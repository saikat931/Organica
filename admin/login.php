<?php
session_start();
require_once '../config/db_config.php'; // Include your DB connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user inputs
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate the inputs
    if (empty($username) || empty($password)) {
        echo 'Both fields are required.';
        exit;
    }

    try {
        // Prepare the SQL query to check the username
        $stmt = $conn->prepare('SELECT * FROM admins WHERE username = :username');
        $stmt->execute(['username' => $username]);
        
        // Fetch the user record from the database
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Start a session and store user data
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to the admin panel
            header('Location: admin.php');
            exit;
        } else {
            echo 'Invalid credentials. Please try again.';
        }
    } catch (PDOException $e) {
        echo 'Database error: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Panel</title>
    <!-- <link rel="stylesheet" href="../assets/css/admin.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
               :root {
            --primary: #4f46e5;
            --primary-light: #6366f1;
            --dark: #1e293b;
            --light: #f8fafc;
        }

        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
        }

        .login-header {
            background: linear-gradient(to right, var(--primary), var(--primary-light));
            color: white;
            padding: 24px;
            text-align: center;
            position: relative;
        }

        .login-header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }

        .login-header p {
            margin: 8px 0 0;
            opacity: 0.9;
            font-size: 14px;
        }

        .login-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
        }

        .login-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
            transition: all 0.3s ease;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            background-color: #f8fafc;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .password-toggle {
            position: absolute;
            top: 60%;
            right: 5%;
            cursor: pointer;
            color: #64748b;
        }

        .btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, var(--primary), var(--primary-light));
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            background: linear-gradient(to right, var(--primary-light), var(--primary));
            opacity: 0.9;
        }

        .btn:active {
            transform: translateY(0);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
            color: #94a3b8;
        }

        .divider::before, .divider::after {
            content: '';
            height: 1px;
            flex: 1;
            background: #e2e8f0;
        }

        .divider::before {
            margin-right: 15px;
        }

        .divider::after {
            margin-left: 15px;
        }

        .footer-links {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-links a {
            color: var(--primary-light);
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .brand-logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .brand-logo img {
            height: 40px;
        }

        .error-message {
            color: #ef4444;
            font-size: 13px;
            margin-top: 5px;
            display: none;
        }

        .shake {
            animation: shake 0.4s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-5px); }
            40%, 80% { transform: translateX(5px); }
        }

        @media (max-width: 480px) {
            .login-container {
                border-radius: 0;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
     <div class="login-container" id="loginContainer">
        <div class="login-header">
            <h2>Secure Admin Portal</h2>
            <p>Please enter your credentials to continue</p>
        </div>
        <div class="login-body">
            <div class="brand-logo">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/27ba5cd1-ada8-49dc-ad0c-c94e1fd714db.png" alt="Company logo with modern typography in blue gradient" />
            </div>
            <form id="loginForm" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
                    <div class="error-message" id="usernameError">Please enter a valid username</div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                    <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    <div class="error-message" id="passwordError">Password must be at least 8 characters</div>
                </div>
                <button type="submit" class="btn" id="submitBtn">
                    <span id="btnText">Sign In</span>
                    <i class="fas fa-spinner fa-spin" id="spinner" style="display: none;"></i>
                </button>
                <div class="divider">OR</div>
                <button type="button" class="btn" style="background: #4285F4;">
                    <i class="fab fa-google" style="margin-right: 8px;"></i>
                    Sign in with Google
                </button>
            </form>
            <div class="footer-links">
                <a href="#">Forgot password?</a>
                <a href="#">Need help?</a>
            </div>
        </div>
    </div>


    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const usernameInput = document.getElementById('username');
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const spinner = document.getElementById('spinner');
            const usernameError = document.getElementById('usernameError');
            const passwordError = document.getElementById('passwordError');
            const loginContainer = document.getElementById('loginContainer');

            // Toggle password visibility
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
            });

            // Form validation
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                let isValid = true;

                // Username validation
                if(usernameInput.value.trim().length < 3) {
                    usernameError.style.display = 'block';
                    usernameInput.classList.add('shake');
                    isValid = false;
                } else {
                    usernameError.style.display = 'none';
                    usernameInput.classList.remove('shake');
                }

                // Password validation
                if(passwordInput.value.length < 8) {
                    passwordError.style.display = 'block';
                    passwordInput.classList.add('shake');
                    isValid = false;
                } else {
                    passwordError.style.display = 'none';
                    passwordInput.classList.remove('shake');
                }

                // If form is valid, simulate submission
                if(isValid) {
                    btnText.style.display = 'none';
                    spinner.style.display = 'inline-block';
                    submitBtn.disabled = true;

                    // Simulate API call
                    setTimeout(function() {
                        spinner.style.display = 'none';
                        btnText.style.display = 'inline-block';
                        submitBtn.disabled = false;
                        
                        // Here you would typically submit the form
                        // loginForm.submit();
                        
                        // For demo purposes, we'll just show a success state
                        loginContainer.style.boxShadow = '0 20px 25px -5px rgba(16, 185, 129, 0.1), 0 10px 10px -5px rgba(16, 185, 129, 0.04)';
                        loginContainer.querySelector('.login-header').style.background = 'linear-gradient(to right, #10b981, #34d399)';
                        submitBtn.style.background = 'linear-gradient(to right, #10b981, #34d399)';
                        
                        alert('Login successful! Redirecting...');
                    }, 1500);
                } else {
                    loginContainer.classList.add('shake');
                    setTimeout(() => loginContainer.classList.remove('shake'), 400);
                }
            });

            // Input event listeners for real-time validation
            usernameInput.addEventListener('input', function() {
                if(this.value.trim().length >= 3) {
                    usernameError.style.display = 'none';
                }
            });

            passwordInput.addEventListener('input', function() {
                if(this.value.length >= 8) {
                    passwordError.style.display = 'none';
                }
            });
        });
    </script> -->

</body>
</html>
