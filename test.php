<!DOCTYPE html>
<html>
<head>
    <title>Tính tổng hai số</title>
</head>
<body>
    <h1>Tính tổng hai số</h1>
    <form method="post" action="">
        <label for="num1">Nhập số thứ nhất:</label>
        <input type="text" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Nhập số thứ hai:</label>
        <input type="text" id="num2" name="num2" required>
        <br><br>
        <input type="submit" value="Tính tổng">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
            $sum = $num1 + $num2;
            echo "<p>Tổng của $num1 và $num2 là: $sum</p>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Tìm số lớn nhất trong mảng</title>
</head>
<body>
    <h1>Tìm số lớn nhất trong mảng</h1>
    <form method="post" action="">
        <label for="numbers">Nhập các số (cách nhau bằng dấu phẩy):</label>
        <input type="text" id="numbers" name="numbers" required>
        <br><br>
        <input type="submit" value="Tìm số lớn nhất">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy chuỗi nhập từ form và chuyển thành mảng
        $numbersInput = $_POST["numbers"];
        $numbersArray = explode(",", $numbersInput);
        // Loại bỏ khoảng trắng và chuyển đổi các phần tử thành số nguyên
        $numbersArray = array_map('trim', $numbersArray);
        $numbersArray = array_map('intval', $numbersArray);
        // Tìm số lớn nhất trong mảng
        $maxNumber = max($numbersArray);
        echo "<p>Số lớn nhất trong mảng là: $maxNumber</p>";
    }
    ?>
</body>
</html>