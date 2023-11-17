<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Add Bootstrap CDN link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 600px;
        margin: auto;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #007bff;
    }

    a {
        display: block;
        text-align: right;
        margin-bottom: 20px;
        color: #007bff;
        text-decoration: none;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 4px;
    }

    .btn-success {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border-radius: 4px;
        border: none;
        background-color: #28a745;
        color: #fff;
        cursor: pointer;
    }

    .btn-success:hover {
        background-color: #218838;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Tambah Produk</h1>
        <a href="show.php">Lihat data produk</a>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" class="form-control" name="name" placeholder="Input nama produk" required>
            </div>
            <div class="form-group">
                <label for="price">Harga Produk</label>
                <input type="number" class="form-control" name="price" placeholder="Input harga produk" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar Produk</label>
                <input type="file" class="form-control-file" name="image" required>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Simpan</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>