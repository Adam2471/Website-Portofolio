<?php
session_start();
if (!isset($_SESSION['login'])) { header("Location: login.php"); exit; }
include '../koneksi.php';

$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM projects WHERE id = $id")) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "Gagal menghapus: " . mysqli_error($conn);
}
?>