CREATE DATABASE IF NOT EXISTS organica;

USE organica;

CREATE TABLE IF NOT EXISTS admins (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,        -- Unique username for the admin
    email VARCHAR(100) NOT NULL UNIQUE,          -- Add email field (required and unique)
    password VARCHAR(255) NOT NULL,              -- Store hashed password securely
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- Add created_at field to track registration time
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  -- Track last updated time
    is_active TINYINT(1) DEFAULT 1,              -- Track whether the account is active (1 = active, 0 = inactive)
    admin_role ENUM('admin', 'super_admin', 'moderator') DEFAULT 'admin'  -- Role of the admin (admin, super_admin, moderator)
);
