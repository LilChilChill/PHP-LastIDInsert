<?php
$host = 'localhost';
$db   = 'database';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $HoTen = isset($_POST['HoTen']) ? $_POST['HoTen'] : null;
        $NamSinh = isset($_POST['NamSinh']) ? $_POST['NamSinh'] : null;
        $Email = isset($_POST['Email']) ? $_POST['Email'] : null;
        $DiaChi = isset($_POST['DiaChi']) ? $_POST['DiaChi'] : null;

        if ($HoTen === null || $NamSinh === null || $Email === null || $DiaChi === null) {
            die("Dữ liệu không hợp lệ. Vui lòng điền đầy đủ thông tin.");
        }

        $stmt = $pdo->prepare("INSERT INTO `user` (`HoTen`, `NamSinh`, `Email`, `DiaChi`) VALUES (:HoTen, :NamSinh, :Email, :DiaChi)");
        $stmt->bindParam(':HoTen', $HoTen);
        $stmt->bindParam(':NamSinh', $NamSinh);
        $stmt->bindParam(':Email', $Email);
        $stmt->bindParam(':DiaChi', $DiaChi);
        $stmt->execute();

        $lastInsertId = $pdo->lastInsertId();

        echo "Bản ghi đã được chèn với ID: $lastInsertId";
        echo '<br><br><a href="index.php" class="btn btn-primary">Quay lại</a>';

    }
} catch (PDOException $e) {
    die("Kết nối không thành công: " . $e->getMessage());
}
?>
