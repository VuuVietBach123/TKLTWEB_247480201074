<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ</title>
</head>
<body>
    <h1> KẾT NỐI CƠ SỞ DỮ LIỆU </h1>
    <?php
        $host = "servername";
        $user = ""; // Tên nguời dùng login vào MySQL
        $pass = ""; // Mật khẩu đăng nhập vào MySQL 
        $data = ""; // Tên csdl
        $connect = mysqli_connect($host, $user, $pass, $data);
        if ($connect)
        {
            echo "Kết nối thành công";
        }
        else 
        {
            echo "Kết nối thất bại";
        }
    ?>
</body>
</html>