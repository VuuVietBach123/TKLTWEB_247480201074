<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["txtMkh"]))
        {
            $makh = $_POST['txtMkh'];
        }
        if(isset($_POST["txtTkh"]))
        {
            $tenkh = $_POST['txtTkh'];
        }
        if(isset($_POST["txtNamSinh"]))
        {
            $namsinh = $_POST['txtNamSinh'];
        }
        if(isset($_POST["txtDienThoai"]))
        {
            $dienthoai = $_POST['txtDienThoai'];
        }
        if(isset($_POST["txtDiaChi"]))
        {
            $diachi = $_POST['txtDiaChi'];
        }

        $sql_insert = "INSERT INTO khachhang (makh, tenkh, namsinh, dienthoai, diachi) VALUES('$makh', '$tenkh', '$namsinh', '$diachi')";

        $result = mysqli_query($conn, $sql_insert);
        if($result)
        {
            echo "<script>window.location.href = 'xyz.php';</script>";
            // echo "Thêm thành công";
        }
        else 
        {
            echo "Thêm thất bại";
        }
    }
?>