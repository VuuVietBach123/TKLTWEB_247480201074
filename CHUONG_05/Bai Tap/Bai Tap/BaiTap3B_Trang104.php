<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>KẾT QUẢ CÁC PHÉP TÍNH</h2>
    <?php
        $x = rand(1,100);
        $y = rand(1,100);

        $tong = $x + $y;
        $tru = $x - $y;
        $nhan = $x * $y;
        $chia = $x / $y;
        $du = $x % $y;

        echo "<h2>Kết quả tính toán</h2>"
        echo "<br> Tổng: $x + $y = $tong";
        echo "<br> Trừ: $x - $y = $tru";
        echo "<br> Nhân: $x * $y = $nhan";
        echo "<br> Chia: $x / $y = $chia";
        echo "<br> Chia lấy dư: $x % $y = $du";
    ?>
</body>
</html>