<?php
$servername = "localhost";
$username = "root"; // Tên tài khoản mặc định của XAMPP là root
$password = ""; // Mật khẩu mặc định để trống 
$database = "quanlybanhang"; // Tên cơ sở dữ liệu ở cuối cùng

// Gọi hàm kết nối với đúng thứ tự biến 
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
    die("Connection failed: " .mysqli_connect_error());
}

// Câu lệnh truy vấn SQL cho bảng khachhang (tương tự $sql trong Ví dụ 2)
$sql = "SELECT makh, tenkh, namsinh, dienthoai, diachi FROM khachhang";
$result = mysqli_query($conn, $sql);

// Duyệt kết quả bằng mysqli_fetch_assoc và in ra màn hình giống ví dụ 2
while ($row = mysqli_fetch_assoc($result))
{
    echo "Mã KH: " . $row['makh'].
    echo "Tên KH: " . $row['tenkh'].
    echo "Năm sinh: " . $row['namsinh'].
    echo "Điện thoại: " . $row['dienthoai'].
    echo "Địa chỉ: " . $row['diachi']. "<br>";
}

// Giải phóng bộ nhớ và đóng kết nối (chuẩn theo ví dụ 2)
mysqli_fetch_result($result);
mysqli_close($conn);
?>