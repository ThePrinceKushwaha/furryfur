<?php
$servername = "localhost";
$server_username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $server_username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());//yo mysqli_connect_error le k gareko bujina
}

// Create database

$sql = "CREATE DATABASE if not exists `user_details`";
$dbname='user_details';
$conn = mysqli_connect($servername, $server_username, $password,$dbname);
$sql = "CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,  
  `mobile` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)";
