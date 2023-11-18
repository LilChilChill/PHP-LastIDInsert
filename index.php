<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <!-- Sử dụng Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Insert Data</h1>
        <form action="insert.php" method="post">
            <div class="form-group">
                <label for="HoTen">Họ tên:</label>
                <input type="text" class="form-control" id="HoTen" name="HoTen" required>
            </div>

            <div class="form-group">
                <label for="NamSinh">Năm sinh:</label>
                <input type="date" class="form-control" id="NamSinh" name="NamSinh" required>
            </div>


            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="Email" name="Email" required>
            </div>

            <div class="form-group">
                <label for="DiaChi">Địa chỉ:</label>
                <textarea class="form-control" id="DiaChi" name="DiaChi" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Insert Data</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
