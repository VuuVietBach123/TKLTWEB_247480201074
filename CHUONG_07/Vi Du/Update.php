<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($_SERVER["REQUEST METHOD"] == "POST")
    {
        if(isset($_POST["txtMkh"]))
        {
            $makh = $_POST['txtMkh'];
        }
        if(isset($_POST["txtTkh"]))
        {
            $tenkh = $_POST['txtTkh'];
        }

        $sql_update = "UPDATE khachhang SET tenkh = '$tenkh' where makh = '$makh'";

        $result = mysqli_query($conn, $sql_update);
        if ($result)
        {
            echo "Cập nhật thành công";
        }
        else 
        {
            echo "Cập nhật thất bại";
        }
    }
?>