<?php
session_start();
require_once __DIR__ . '/../config/db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userQuery = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");
    
    if ($userQuery) {
        $userData = mysqli_fetch_assoc($userQuery);

        if ($userData && password_verify($password, $userData['password'])) {
            $_SESSION['name'] = $userData['name'];
            $_SESSION['role'] = $userData['role'];

            if ($_SESSION['role'] == 'admin') {
                header('Location: ./../admin.php');
                exit();
            } else {
                header('Location: ./../profile.php');
                exit();
            }
        } else {
            echo"Password salah";
        }
    } else {
        echo"Email atau password salah";
    }
}
?>