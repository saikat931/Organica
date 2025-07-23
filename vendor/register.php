<?php

    if($_SERVER['REQUEST_METHOD'] == 'post'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $aadher = $_post['aadher'];
    }

    //handle file upload

    if(isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imageName = $_FILES['image']['name'];
        $imageTmp = $_FILES

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
        <input type="file" name="image" requred><br><br>

        <button>Submit</button>
    </form>

</body>
</html>