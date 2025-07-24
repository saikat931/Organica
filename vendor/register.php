<?php
    session_start();

    $target_dir = "vendor_images/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $aadher = $_POST['aadhar'];
    

        //handle file upload

        if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $imageName = $_FILES['image']['name'];
            $imageTmp = $_FILES['image']['tmp_name'];
            $imageSize = $_FILES['image']['size'];
            $imageFileType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
            $imageId = uniqid('rest_', true) . '.' . $imageFileType;
            $imagePath = $target_dir . $imageId;

            // Check if file already exists
            if(file_exists($imagePath)){
                $_SESSION['message'] = "Sorry, file already exits";
                $uploadOk = 0;
            };

            //check file size
            if($imageSize > 500000){
                $_SESSION['message'] = "Sorry, your file is too large";
                $uploadOk = 0;
            };

            // check file type
            $allowed = ['jpg', 'jpeg', 'png', 'gif'];
            if(!in_array($imageFileType, $allowed)){
                $_SESSION['message'] = "Invalid file type";
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
                $_SESSION['message'] = " Sucessfully Uploaded";
                
            }else{
                $_SESSION['message'] = "Sorry, Upload Failed";
                exit();
            };
        };
    // Redirect to avoid resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
    };
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Registration</title>
</head>
<body>
    
    <h2>Restaurant Registration Form</h2>
    <form action="register.php" method="post" enctype="multipart/form-data">
        <label for="name">Reataurent Name</label>
        <input type="text" name="name" requred><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" requred><br><br>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" requred><br><br>

        <label for="aadhar">Aadhaar Number:</label>
        <input type="text" name="aadhar" requred><br><br>

        <label for="image">Restaurant Image:</label>
        <input type="file" name="image" accept="image/*" requred><br><br>

        <button type="submit">Submit</button>
    </form>
    <?php if (isset($_SESSION['message'])): ?>
    <p style="color: green;"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
    <?php endif; ?>
</body>
</html>