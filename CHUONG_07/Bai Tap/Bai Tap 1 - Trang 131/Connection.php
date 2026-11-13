<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

// Tạo kêt nối bằng MySQLi
$conn = mysqli_connect($servername, $database, $username, $password);

// Kiểm tra kết nối
if (!$conn) 
{
    die("Kết nối thất bại: " . mysqli_connect_error());
}
