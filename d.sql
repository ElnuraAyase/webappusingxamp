DROP DATABASE IF EXISTS `E1_Mirzayeva_55404_Englishing_walk_taek`

CREATE DATABASE `e1_mirzayeva_55404_englishing_walk_talk`;


USE `e1_mirzayeva_55404_englishing_walk_taek`
CREATE TABLE `Main` (
    `main_id` INT AUTO_INCREMENT PRIMARY KEY,
    `company_name` VARCHAR(100),
    `location` VARCHAR(100),
    `contact_email` VARCHAR(100),
    `contact_phone` VARCHAR(20)
);

CREATE TABLE `Register` (
    `register_id` INT AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(50),
    `last_name` VARCHAR(50),
    `email` VARCHAR(100),
    `level` VARCHAR(20),
    `lessons_balance` INT
);

CREATE TABLE `Purchase` (
    `purchase_id` INT AUTO_INCREMENT PRIMARY KEY,
    `register_id` INT,
    `num_lessons` INT,
    `total_price` DECIMAL(10, 2),
    FOREIGN KEY (`register_id`) REFERENCES `Register`(`register_id`)
);

CREATE TABLE `Schedule` (
    `schedule_id` INT AUTO_INCREMENT PRIMARY KEY,
    `register_id` INT,
    `purchase_id` INT,
    `lesson_date` DATE,
    `status` ENUM('active', 'frozen', 'rescheduled', 'canceled'),
    FOREIGN KEY (`register_id`) REFERENCES `Register`(`register_id`),
    FOREIGN KEY (`purchase_id`) REFERENCES `Purchase`(`purchase_id`)
);
