<?php
session_start();
include 'koneksi.php';

if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['nik'] = $row['nik'];
        $_SESSION['login'] = $row['level'];
        header('location:../masyarakat/');
    } else {
        $sql = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
        $result = mysqli_query($koneksi, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['nama_petugas'] = $row['nama_petugas'];
            $_SESSION['id_petugas'] = $row['id_petugas'];
            $_SESSION['login'] = $row['level'];
            header('location:../admin/');
        } else {
            echo "user tidak ditemukan";
        }
    }
}