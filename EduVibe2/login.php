<?php
include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$user'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['mood'] = $row['mood']; // MENYIMPAN ICON DARI DATABASE
            header("Location: index.php");
            exit;
        }
    }
    echo "<script>alert('Username atau Password salah!');</script>";
}
?>