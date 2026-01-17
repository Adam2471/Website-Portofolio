<?php
session_start();

// Menghapus semua data session
session_unset();

// Menghancurkan session
session_destroy();

// Mengarahkan ke halaman utama (index.php di folder root)
header("Location: ../index.php");
exit;
?>