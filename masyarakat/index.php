<?php
session_start();
include '../layouts/header.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'tanggapan':
            include 'tanggapan.php';
            break;
        default:
            echo "Halaman Tidak Tersedia";
            break;
    }
} else {
    include 'home.php';
}

include '../layouts/footer.php';