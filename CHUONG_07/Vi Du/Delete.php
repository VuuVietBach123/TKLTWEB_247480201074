<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($_SERVER["REQUEST METHOD"] == "POST")
    {
        if (isset($_POST["txtMkh"]))
        {
            $makh = $_POST['txtMkh'];
        }
        $sql_delete = "DELETE FROM khachhang WHERE makh = '$makh'";

        $result = mysqli_query($conn, $sql_delete);
        if ($result)
        {
            echo "Xoá thành công";
        }
        else 
        {
            echo "Xoá thất bại";
        }
    }
?>