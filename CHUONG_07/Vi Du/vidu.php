<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root"
$password = "";
// Create Connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn)
{
    die ("Connection failed:". mysqli_connect_error());
}
else
{
    echo "Connected successfully";
}
// Chọn csdl
mysqli_select_db($conn, $database);
// Thực thi câu lệnh truy vấn SQL 
$str = "SELECT * FROM 'khachhang' ";
$khachhang = mysqli_query($conn, $str);
while ($row = mysqli_fetch_array($result))
{
    echo $row['makh'];
    echo $row['tenkh'];
    echo $row['namsinh'];
    echo $row['dienthoai'];
    echo $row['dia chi'] . "<br>";
}
mysqli_close($conn);
?>