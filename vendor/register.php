<?php

    require_once '../config/db_config.php';
    session_start();

    $message = "";
    $target_dir = "vendor_images/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $aadhar = htmlspecialchars(trim($_POST['aadhar']));
    

        //handle file upload

        if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $imageName = $_FILES['image']['name'];
            $imageTmp = $_FILES['image']['tmp_name'];
            $imageSize = $_FILES['image']['size'];
            $imageFileType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
            $imageId = uniqid('ven_', true) . '.' . $imageFileType;
            $imagePath = $target_dir . $imageId;

            // Check if file already exists
            $uploadedHash = md5_file($imageTmp);
            $files = scandir($target_dir);

            foreach ($files as $file) {
            if (in_array($file, ['.', '..'])) continue;

            $existingPath = $target_dir . $file;

            if (is_file($existingPath) && md5_file($existingPath) === $uploadedHash) {
                $message = "This image has already been uploaded.";
                $uploadOk = 0;
                break;
            }
        }


            //check file size
            if($imageSize > 500000){
                $message = "Sorry, your file is too large.";
                $uploadOk = 0;
            };

            // check file type
            $allowed = ['jpg', 'jpeg','png', 'gif'];
            if(!in_array($imageFileType, $allowed)){
                $message = "Invalid file type. Only JPG, JPEG, and GIF are allowed.";
                $uploadOk = 0;
            };

            // Allow certain file formats
            // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            // && $imageFileType != "gif" ) {
            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            // $uploadOk = 0;
            // };

            if($uploadOk == 1){
                
                move_uploaded_file($imageTmp, $imagePath);
                $message = "Successfully uploaded.";

                try {
                    $sql = "INSERT INTO vendors_register(name, email, phone, aadhar, image_path) VALUES (?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$name, $email, $phone, $aadhar, $imagePath]);
                    // echo 'Data inserted successfully';
                } catch (PDOException $e) {
                    echo 'Insert failed: ' . $e->getMessage();
                }

            } 
            }else{
                $message = "Sorry, there was an error uploading your file.";
            };
        }
        // else{
        //     $message = "Please upload a valid image file.";
        // }
    // Redirect to avoid resubmission
    // header("Location: " . $_SERVER['PHP_SELF']);
    // exit();
    
    
   
    $conn = null;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"/>
</head>
<body>


<style>
    .v-r-from{
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      filter: brightness(75%);
    }
    .form-container {
      background: rgba(255, 255, 255, 0.25); /* more transparent white *//* Transparent white */
      backdrop-filter: blur(20px) saturate(180%); /* Strong blur + saturation */
      -webkit-backdrop-filter: blur(20px) saturate(180%);
      border-radius: 1rem;
      padding: 5rem 2rem;
      width: 30rem;
      max-width: 100%;
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.25); /* subtle border */
      box-shadow: 0 8px 32px rgba(0,0,0,0.25); /* glass shadow */
    }
    .form-control {
      background: rgba(255, 255, 255, 0.1) !important;
      border-radius: 50rem;
      color: hsl(152, 95%, 31%);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .form-control::placeholder {
      color: hsla(152, 57%, 30%, 1.00);
    }
    .form-control:focus {
      box-shadow: 0 0 0 0.25rem rgba(128, 0, 128, 0.5);
      border-color: #6f42c1;
    }
    .input-icon {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: hsl(152, 95%, 31%);
      pointer-events: none;
    }
    .bg-image {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }
    .link-purple {
      color: #a855f7;
    }
    .link-purple:hover {
      text-decoration: underline;
      color: #c084fc;
    }
    .submit{
        color:hsl(152, 95%, 31%);
    }
    .status-message{
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }
  </style>
</head>
<body>
    <div class="container-fluied d-flex align-items-center justify-content-center position-relative overflow-hidden v-r-from">

  <img src="/assets/images/hero-banner-2.jpg" 
       alt="Abstract background" class="bg-image">

  <form action="/vendor/register.php" method="post" enctype="multipart/form-data" class="align-items-center form-container">
    <h2 class="text-center mb-5 fw-semibold">Registration Form</h2>

    <!-- Username -->
    <div class="mb-5 position-relative">
      <input type="text" name="name" class="form-control pe-5" placeholder="Name" required/>
      <i class="fas fa-user input-icon"></i>
    </div>

    <!-- Email  -->
    <div class="mb-5 position-relative">
      <input type="email" name="email" class="form-control pe-5" placeholder="Email" required/>
      <i class="fas fa-envelope input-icon"></i>
    </div>

    <!-- Phone -->
    <div class="mb-5 position-relative">
      <input type="text" name="phone" class="form-control pe-5" placeholder="Phone" required/>
      <i class="fas fa-phone input-icon"></i>
    </div>

    <!-- Aadhar  -->
    <div class="mb-5 position-relative">
      <input type="text" name="aadhar" class="form-control pe-5" placeholder="Addhar"  required/>
      <i class="fas fa-id-card input-icon"></i>
    </div>

    <!-- Image -->
    <div class="mb-5 position-relative">
      <input type="file" name="image" accept="image/*" class="form-control pe-5" placeholder="Image" required/>
      <i class="fas fa-image input-icon"></i>
    </div>

    <!-- Login Button -->
    <button type="submit" class="btn btn-light w-100 rounded-pill submit">Submit</button>

    <div class="status-message">
         <?php if (!empty($message)): ?>
        <p  style="color: <?= strpos($message, 'Success') !== false ? 'green' : 'red' ?>;">
            <?= htmlspecialchars($message) ?>
        </p>
        <?php endif; ?>
    </div>

   
  </form>

</div>
    
    <!-- <h2>Restaurant Registration Form</h2>
    <form action="/vendor/register.php" method="post" enctype="multipart/form-data">
        <label for="name">Vendor Name</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" required><br><br>

        <label for="aadhar">Aadhaar Number:</label>
        <input type="text" name="aadhar" required><br><br>

        <label for="image">Restaurant Image:</label>
        <input type="file" name="image" accept="image/*" required><br><br>

        <button type="submit">Submit</button>
    </form> -->
    
</body>
</html>