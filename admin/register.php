<?php
session_start();
require_once '../config/db_config.php'; // Include your DB configuration file

// Initialize error variables
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect input values
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm_password']);
    $admin_role = trim($_POST['admin_role']);  // Collect the admin role

    // Basic validation
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword) || empty($admin_role)) {
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email format.';
    } elseif ($password !== $confirmPassword) {
        $error = 'Passwords do not match.';
    } else {
        // Hash the password for secure storage
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            // Check if the username or email already exists in the database
            $stmt = $conn->prepare('SELECT COUNT(*) FROM admins WHERE username = :username OR email = :email');
            $stmt->execute(['username' => $username, 'email' => $email]);
            $userExists = $stmt->fetchColumn();

            if ($userExists) {
                $error = 'Username or email already exists.';
            } else {
                // Insert the new admin into the database, including the admin_role
                $stmt = $conn->prepare('INSERT INTO admins (username, email, password, admin_role) VALUES (:username, :email, :password, :admin_role)');
                $stmt->execute([
                    'username' => $username,
                    'email' => $email,
                    'password' => $hashedPassword,
                    'admin_role' => $admin_role
                ]);

                // $sql = "INSERT INTO admins(username, email, password, admin_role) VALUES (?, ?, ?, ?)";
                // $stmt = $conn->prepare($sql);
                // $stmt->execute([$username, $email, $hashedPassword, $admin_role]);
                // $stmt->execute([
                //     'username' => $username,
                //     'email' => $email,
                //     'password' => $hashedPassword,
                //     'admin_role' => $admin_role
                // ]);

                // Redirect to the login page after successful registration
                header('Location: login.php');
                exit;  // Always call exit after a redirect to stop further script execution
            }
        } catch (PDOException $e) {
            // Handle potential errors
            $error = 'Database error: ' . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #3a0ca3;
            --accent: #7209b7;
            --light: #f8f9fa;
            --dark: #212529;
            --error: #e63946;
            --success: #2a9d8f;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .register-container {
            width: 100%;
            max-width: 500px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: fadeIn 0.5s ease-in-out;
            transform-style: preserve-3d;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 1.5rem;
            text-align: center;
            position: relative;
        }

        .header h2 {
            font-weight: 600;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .decoration {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 20px;
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 1440 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,30L120,40C240,50,480,70,720,70C960,70,1200,50,1320,40L1440,30L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z' fill='white'/%3E%3C/svg%3E");
            background-size: cover;
            background-position: center;
        }

        .form-container {
            padding: 2rem;
        }

        .error-message {
            background-color: rgba(230, 57, 70, 0.1);
            color: var(--error);
            padding: 0.8rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--error);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            animation: shake 0.3s ease-in-out;
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            20%,
            60% {
                transform: translateX(-5px);
            }

            40%,
            80% {
                transform: translateX(5px);
            }
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark);
            transition: all 0.3s ease;
        }

        .input-container {
            position: relative;
        }

        .input-container i {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
            transition: all 0.3s ease;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem 0.8rem 40px;
            font-size: 1rem;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
            outline: none;
            background-color: white;
        }

        .form-control:focus+i {
            color: var(--primary);
        }

        select.form-control {
            appearance: none;
            padding-right: 2.5rem;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%236c757d' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }

        .input-container i.password-toggle {
            position: absolute;
            left: 90%;
            top: 50%;
            /* transform: translateY(-50%); */
            cursor: pointer;
            color: #adb5bd;
            transition: all 0.3s ease;
        }

        .password-toggle:hover {
            color: var(--primary);
        }

        .btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }

        .btn:hover {
            background: linear-gradient(to right, var(--primary-dark), var(--accent));
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(67, 97, 238, 0.4);
        }

        .btn:active {
            transform: translateY(0);
        }

        .footer {
            text-align: center;
            margin-top: 1.5rem;
            color: #6c757d;
        }

        .footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .footer a:hover {
            color: var(--secondary);
            text-decoration: underline;
        }

        /* Password strength indicator */
        .strength-meter {
            height: 4px;
            background-color: #e9ecef;
            margin-top: 0.5rem;
            border-radius: 2px;
            overflow: hidden;
        }

        .strength-meter-fill {
            height: 100%;
            width: 0%;
            border-radius: 2px;
            transition: width 0.3s ease, background-color 0.3s ease;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }

            .register-container {
                border-radius: 12px;
            }

            .header {
                padding: 1.2rem;
            }

            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <div class="register-container">
        <div class="header">
            <h2>Admin Registration</h2>
            <p>Create your administrator account</p>
            <div class="decoration"></div>
        </div>

        <?php if ($error): ?>
        <div class="error">
            <?php echo htmlspecialchars($error); ?>
        </div>
        <?php endif; ?>


        <div class="form-container">
            <div class="error-message" style="display: none;">
                <i class="fas fa-exclamation-circle"></i>
                <span id="error-text">Error message goes here</span>
            </div>

            <form id="registrationForm" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-container">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" class="form-control"
                            placeholder="Enter your username" value="<?php echo htmlspecialchars($username ?? ''); ?>"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-container">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email"
                            value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-container">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Create a password" required>
                        <i class="far fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                    <div class="strength-meter">
                        <div class="strength-meter-fill"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <div class="input-container">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control"
                            placeholder="Confirm your password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="admin_role">Admin Role</label>
                    <div class="input-container">
                        <i class="fas fa-user-tag"></i>
                        <select id="admin_role" name="admin_role" class="form-control" required>
                            <option value="" disabled selected>Select your role</option>
                            <option value="admin" <?php echo (isset($admin_role) && $admin_role==='admin' ) ? 'selected'
                                : '' ; ?>>Admin</option>
                            <option value="super_admin" <?php echo (isset($admin_role) && $admin_role==='super_admin' )
                                ? 'selected' : '' ; ?>>Super Admin</option>
                            <option value="moderator" <?php echo (isset($admin_role) && $admin_role==='moderator' )
                                ? 'selected' : '' ; ?>>Moderator</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn">Register</button>
            </form>

            <div class="footer">
                <p>Already have an account? <a href="login.php">Sign in</a></p>
            </div>
        </div>


        <script>
            // Password visibility toggle
            document.getElementById('togglePassword').addEventListener('click', function () {
                const passwordInput = document.getElementById('password');
                const icon = this;

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });

            // Password strength meter
            document.getElementById('password').addEventListener('input', function () {
                const password = this.value;
                const strengthMeter = document.querySelector('.strength-meter-fill');
                let strength = 0;

                // Check for length
                if (password.length >= 8) strength += 1;
                if (password.length >= 12) strength += 1;

                // Check for special characters
                if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength += 1;

                // Check for numbers
                if (/\d/.test(password)) strength += 1;

                // Check for mixed case
                if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 1;

                // Update strength meter
                let width = 0;
                let color = '#e63946'; // red

                switch (strength) {
                    case 1:
                        width = 20;
                        color = '#e63946';
                        break;
                    case 2:
                        width = 40;
                        color = '#f4a261';
                        break;
                    case 3:
                        width = 60;
                        color = '#2a9d8f';
                        break;
                    case 4:
                        width = 80;
                        color = '#4361ee';
                        break;
                    case 5:
                        width = 100;
                        color = '#4cc9f0';
                        break;
                }

                strengthMeter.style.width = width + '%';
                strengthMeter.style.backgroundColor = color;
            });

            // Form validation
            document.getElementById('registrationForm').addEventListener('submit', function (e) {
                e.preventDefault();
                const errorDiv = document.querySelector('.error-message');
                const errorText = document.getElementById('error-text');

                // Clear any previous errors
                errorDiv.style.display = 'none';

                // Simple validation example
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirm_password').value;

                if (password !== confirmPassword) {
                    errorText.textContent = 'Passwords do not match!';
                    errorDiv.style.display = 'flex';
                    return;
                }

                // More validations can be added here

                // If validation passes, submit the form
                alert('Form submitted successfully!');
                // In a real application, you would submit to server here
                this.submit();
            });
        </script>

</body>

</html>