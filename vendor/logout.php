<?php

$target_dir = "vendor_images/";
$uploadOk = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $aadher = $_POST['aadhar']; // ✅ Fixed: $_post ➜ $_POST

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageName = $_FILES['image']['name'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        $imageFileType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

        // ✅ Use uniqid() not "unique" (which doesn't exist in PHP)
        $imageId = uniqid('rest_', true) . '.' . $imageFileType;
        $imagePath = $target_dir . $imageId;

        // ✅ Check if file already exists
        if (file_exists($imagePath)) {
            echo "Sorry, file already exists.<br>";
            $uploadOk = 0;
        }

        // ✅ Check file size (limit: ~500KB)
        if ($imageSize > 500000) {
            echo "Sorry, your file is too large.<br>";
            $uploadOk = 0;
        }

        // ✅ Check allowed file types
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowed)) {
            echo "Invalid file type. Only JPG, JPEG, PNG, GIF allowed.<br>";
            $uploadOk = 0;
        }

        // ✅ Upload file if checks pass
        if ($uploadOk == 1) {
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0755, true);
            }

            if (move_uploaded_file($imageTmp, $imagePath)) {
                echo "Successfully Uploaded.<br>";
                // You can now store $name, $email, etc. in the DB
            } else {
                echo "There was an error uploading the file.<br>";
            }
        } else {
            echo "Sorry, Upload Failed.<br>";
        }
    } else {
        echo "No file uploaded or file error.<br>";
    }
}
?>
