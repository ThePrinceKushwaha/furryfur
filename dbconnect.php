<?php
$server_name="localhost";
$server_username="root";
$server_password="";


$conn = mysqli_connect($server_name, $server_username, $server_password);


if(!$conn){
    die("Connection failed: ". mysql_error());
}


// create database
$create_db = "CREATE DATABASE if not exists userdetails"; 

if(!mysqli_query($conn,$create_db)){
    echo "Error creating database: " .mysqli_error($conn);
}

$db_name= 'userdetails';

$conn = mysqli_connect($server_name, $server_username,$server_password,$db_name);


$create_tbl = "CREATE TABLE if not exists `tbl_users` (
    `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,  
    `usern` varchar(255) NOT NULL,  
    `email` varchar(255) DEFAULT NULL,
    `setpw` varchar(255) DEFAULT NULL,
    `confirmpw` varchar(255) DEFAULT NULL,
    `phoneno` varchar(10) DEFAULT NULL,
    `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,  
  PRIMARY KEY (`id`)
) ";


if(!mysqli_query($conn, $create_tbl)){
    echo "Error creating table: " . mysqli_error($create_tbl);
}




?>