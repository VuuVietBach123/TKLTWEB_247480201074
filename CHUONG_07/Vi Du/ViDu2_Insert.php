<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $sql_insert = "INSERT INTO khachhang VALUES('K011', 'Nguyễn Văn A', '2006', '0909090822', 'BẠC LiÊU')";

    $result = mysqli_query($conn, $sql_insert);
    if ($result)
    {
        echo "Thêm thành công";
    }
    else 
    {
        echo "Thêm thất bại";
    }
?>