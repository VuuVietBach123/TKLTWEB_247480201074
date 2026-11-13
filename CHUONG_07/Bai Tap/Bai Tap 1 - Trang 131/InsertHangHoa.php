<?php
include 'Connection.php';

if ($_SERVER[REQUEST_METHOD] == "POST")
{
    $mahang = $_POST['mahang'];
    $tenhang = $_POST['tenhang'];
    $mansx = $_POST['mansx'];
    $namsx = $_POST['namsx'];
    $gia = $_POST['gia'];

    $sql = "INSERT INTO HANGHOA (mahang, tenhang, mansx, namsx, gia) VALUES ('$mahang', '$tenhang', '$mansx', '$namsx', '$gia')";

    if (mysqli_query($conn, $sql))
    {
        echo "Thêm hàng hoá thành công! <a href = 'InsertHangHoa.html'>Quay lại</a>";
    }
    else
    {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>