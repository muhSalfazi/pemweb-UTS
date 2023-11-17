<?php
// update.php

require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    global $db_connect;

    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];

    $uploadDir = __DIR__ . '/../upload/';

    
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    
    $randomFilename = time() . '-' . md5(rand()) . '-';

    if ($_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];
        $tempImage = $_FILES['image']['tmp_name'];

        
        $randomFilename .= $image;

        $uploadPath = $uploadDir . $randomFilename;

        $upload = move_uploaded_file($tempImage, $uploadPath);

        if ($upload) {
           
            $oldImageQuery = mysqli_query($db_connect, "SELECT image FROM products WHERE id = $productId");
            $oldImagePath = mysqli_fetch_assoc($oldImageQuery)['image'];

          
            mysqli_query($db_connect, "UPDATE products SET name = '$productName', price = '$productPrice', image = 'upload/$randomFilename' WHERE id = $productId");

            echo "Berhasil mengubah produk dengan gambar baru.";
        } else {
            echo "Gagal mengubah data dengan gambar yang baru.";
        }
    } else {
       
        mysqli_query($db_connect, "UPDATE products SET name = '$productName', price = '$productPrice' WHERE id = $productId");

        echo "Produk berhasil diubah tanpa menggunakan gambar baru.";
    }
} else {
    echo "Invalid request.";
}