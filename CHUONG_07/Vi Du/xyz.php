<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khách hàng</title>
</head>
<body>
    <!-- Form gửi dữ liệu sang trang Insert.php -->
    <form action = "Insert.php" method = "post" >
        Mã khách <input type = "text" name = "txtMsv" value = ""><br>
        Tên khách <input type = "text" name = "txtHoten" value = ""><br>
        Năm sinh <input type = "text" name = "txtMsv" value = ""><br>
        Điện thoại <input type = "text" name = "txtDienThoai" value = ""><br>
        Địa chỉ <input type = "text" name = "txtDiaChi" value = ""><br>
        <button type = "submit"> Insert </button>
    </form>

    <h1>Xem</h1>

    <?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn)
    {
        die ("Connection failed:". mysqli_connect_error());
    }
    else
    {
        echo "Connected successfully";
    }
    ?>

    <h3>DANH SÁCH KHÁCH HÀNG</h3>

    <table border ="1" cellspacing="0">
        <tr>
            <th>Mã khách</th>
            <th>Tên khách</th>
            <th>Năm sinh</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
        </tr>

        <?php
        $sql_select = "SELECT * FROM khachhang";
        $result = mysqli_query($conn, $sql_select);

        if ($result && mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                    <td><?php echo $row['makh']; ?></td>
                    <td><?php echo $row['tenkh']; ?></td>
                    <td><?php echo $row['namsinh']; ?></td>
                    <td><?php echo $row['dienthoai']; ?></td>
                    <td><?php echo $row['diachi']; ?></td>
                </tr>
                <?php
            }
            mysqli_free_result($result);
        }
        else
        {
            echo "<tr><td colspan ='5'>Không có bản ghi nào</td></tr>";
        }
        ?>
    </table>

    <?php
    // Đóng kết nối CSDL sau khi hoàn tất
    mysqli_close($conn);
    ?>
 </body>
</html>