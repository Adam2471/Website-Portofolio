<?php
session_start();
// Proteksi halaman admin
if (!isset($_SESSION['login'])) { header("Location: login.php"); exit; }

include '../koneksi.php';

if (isset($_POST['submit'])) {
    // Mengambil data dari form
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    // Query SQL untuk memasukkan data
    $query = "INSERT INTO projects (judul, deskripsi) VALUES ('$judul', '$deskripsi')";
    
    if (mysqli_query($conn, $query)) {
        // Jika berhasil, munculkan pesan dan kembali ke dashboard admin
        echo "<script>alert('Proyek Berhasil Disimpan!'); window.location='index.php';</script>";
    } else {
        echo "Gagal menyimpan: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Proyek</title>
    <link rel="icon" type="image/png" href="../assets/uploads/faviconadam.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white"><h5>Tambah Proyek Baru</h5></div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Judul Proyek</label>
                        <input type="text" name="judul" class="form-control" placeholder="Contoh: Aplikasi Kasir" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Proyek</label>
                        <textarea name="deskripsi" class="form-control" rows="4" placeholder="Jelaskan singkat tentang proyek ini..." required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan ke Database</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>