<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $sql_update = "UPDATE khachhang SET tenkh = 'Trần Thị B' where makh - 'k006'";

    $result = mysqli_query($conn, $sql_update);
    if ($result)
    {
        echo "Cập nhật thành công";
    }
    else 
    {
        echo "Cập nhật thất bại";
    }
?>