<?php
session_start();
// Proteksi halaman admin
if (!isset($_SESSION['login'])) { header("Location: login.php"); exit; }

include '../koneksi.php';

// Mengambil ID dari URL
$id = $_GET['id'];

// Query untuk mengambil data proyek berdasarkan ID
$result = mysqli_query($conn, "SELECT * FROM projects WHERE id = $id");
$data = mysqli_fetch_assoc($result);

// Jika tombol simpan ditekan
if (isset($_POST['update'])) {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    // Query Update
    $query = "UPDATE projects SET judul = '$judul', deskripsi = '$deskripsi' WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Berhasil Diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "Gagal memperbarui: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proyek | Admin</title>
    <link rel="icon" type="image/png" href="../assets/uploads/faviconadam.png">`
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 15px;
        }
        .card-header {
            border-radius: 15px 15px 0 0 !important;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-warning text-dark py-3">
                    <h5 class="mb-0 fw-bold"><i class="bi bi-pencil-square me-2"></i>Edit Proyek</h5>
                </div>
                <div class="card-body p-4">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Judul Proyek</label>
                            <input type="text" name="judul" class="form-control" 
                                   value="<?= htmlspecialchars($data['judul']); ?>" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Deskripsi Proyek</label>
                            <textarea name="deskripsi" class="form-control" rows="5" 
                                      required><?= htmlspecialchars($data['deskripsi']); ?></textarea>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" name="update" class="btn btn-primary">
                                <i class="bi bi-save me-1"></i> Simpan Perubahan
                            </button>
                            <a href="index.php" class="btn btn-outline-secondary">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center text-muted mt-4 small">&copy; 2026 Adam Mubarok</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>