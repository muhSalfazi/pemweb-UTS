<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Data</title>

    <!-- Add Bootstrap CDN link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Data Produk</h1>
        <?php require './config/db.php'; ?>
        <!-- Include the logic directly in show.php -->
        <?php
        function showAlert($icon, $title, $message, $redirect = null) {
            echo "
            <script type='text/javascript'>
                document.addEventListener('DOMContentLoaded', () => {
                    swal.fire({
                        icon: '$icon',
                        title: '$title',
                        html: '<p class=\"p-popup\">$message</p>',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(() => {
                        " . ($redirect ? "window.location.href = '$redirect';" : '') . "
                    });
                });
            </script>
            ";
        }
        ?>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <div id="uploadStatus"></div>

                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar Produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $products = mysqli_query($db_connect, "SELECT * FROM products");
                $no = 1;

                while ($row = mysqli_fetch_assoc($products)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['price']; ?></td>
                    <td><a href="<?= $row['image']; ?>" target="_blank">Unduh</a></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm delete-btn"
                            onclick="deleteProductConfirmation(<?= $row['id']; ?>)">Hapus</button>
                    </td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Tambahkan fungsi JavaScript di bagian head -->
    <script>
    function deleteProductConfirmation(productId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Produk akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke delete.php dengan menyertakan parameter ID
                window.location.href = `backend/delete.php?id=${productId}`;
            }
        });
    }
    </script>

</body>

</html>