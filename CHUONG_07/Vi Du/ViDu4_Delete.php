<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql_delete = "DELETE FROM khachhang WHERE makh = 'K007'";

    $result = mysqli_query($conn, $sql_delete);
    if ($result)
    {
        echo "Xoá thành công";
    }
    else 
    {
        echo "Xoá thất bại";
    }
?>