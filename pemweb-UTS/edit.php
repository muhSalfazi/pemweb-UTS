<?php
// edit.php

require 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $productId = $_GET['id'];

    
    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $productId");

    if ($result) {
        $product = mysqli_fetch_assoc($result);

        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <!-- Add Bootstrap CDN link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h1>Edit Product</h1>
    <form action="backend/update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product['id']; ?>">

        <div class="form-group">
            <label for="name">Nama produk:</label>
            <input type="text" name="name" class="form-control" value="<?= $product['name']; ?>" required>
        </div>

        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" name="price" class="form-control" value="<?= $product['price']; ?>" required>
        </div>

        <div class="form-group">
            <label for="image">Gambar produk:</label>
            <input type="file" name="image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <!-- Add Bootstrap JS and Popper.js CDN links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php
    } else {
        echo "Error mengambil data produk.";
    }
} else {
    echo "Invalid request.";
}
?>