<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'blog';
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}echo "Connected successfully <br>";

//CREATING DATABASE BLOG:

// $sql = "create database blog";
// if (mysqli_query($conn, $sql)) {
//  echo "Database created successfully";
// } else {
//  echo "Error: " . mysql_error($conn);
// }

//CREATING TABLES USER & POST & COMMENT

// $sql = "CREATE TABLE user (
// Uid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// username VARCHAR(30) NOT NULL UNIQUE KEY,
// email VARCHAR(100) NOT NULL,
// password VARCHAR(20) NOT NULL,
// gender VARCHAR(1) 
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table created successfully";
// } else {
// echo "Error creating table: " . mysqli_error($conn);
// }

// $sql = "CREATE TABLE post (
// Pid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// Title VARCHAR(100) NOT NULL,
// Body TEXT(65535) NOT NULL,
// Uid INT UNSIGNED,
// FOREIGN KEY (Uid) REFERENCES user(Uid) 
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table created successfully";
// } else {
// echo "Error creating table: " . mysqli_error($conn);
// }

// $sql = "CREATE TABLE comment (
// Cid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// CBody TEXT(65535) NOT NULL,
// Uid INT UNSIGNED,
// Pid INT UNSIGNED,
// FOREIGN KEY (Uid) REFERENCES user(Uid),
// FOREIGN KEY (Pid) REFERENCES post(Pid) 
// )";
// if (mysqli_query($conn, $sql)) {
// echo "Table created successfully";
// } else {
// echo "Error creating table: " . mysqli_error($conn);
// }