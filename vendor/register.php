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
        $aadhear = htmlspecialchars(trim($_POST['aadhar']));
    

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
                    echo 'Data inserted successfully';
                } catch (PDOException $e) {
                    echo 'Insert failed: ' . $e->getMessage();
                }

            } 
            }else{
                $message = "Sorry, there was an error uploading your file.";
            };
        }else{
            $message = "Please upload a valid image file.";
        }
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
</head>
<body>
    
    <h2>Restaurant Registration Form</h2>
    <form action="/vendor/register.php/" method="post" enctype="multipart/form-data">
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
    </form>
    <?php if (!empty($message)): ?>
    <p style="color: <?= strpos($message, 'Success') !== false ? 'green' : 'red' ?>;">
        <?= htmlspecialchars($message) ?>
    </p>
<?php endif; ?>
</body>
</html>