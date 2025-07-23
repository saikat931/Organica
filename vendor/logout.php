<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $aadhaar  = $_POST['aadhaar'];

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageName = $_FILES['image']['name'];
        $imageTmp  = $_FILES['image']['tmp_name'];
        $imageExt  = pathinfo($imageName, PATHINFO_EXTENSION);
        $imageNew  = uniqid('rest_', true) . '.' . $imageExt;

        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $imagePath = $uploadDir . $imageNew;
        move_uploaded_file($imageTmp, $imagePath);
    } else {
        echo "Image upload failed!";
        exit;
    }

    // Save to database (example)
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=your_database", "your_user", "your_password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO restaurants (name, email, phone, aadhaar, image_path) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $aadhaar, $imagePath]);

        echo "Restaurant registered successfully!";
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>
