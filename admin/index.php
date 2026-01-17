<?php
session_start();
if (!isset($_SESSION['login'])) { header("Location: login.php"); exit; }
include '../koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM projects");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="../assets/uploads/faviconadam.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Panel Kelola Portofolio</h2>
            <div>
                <a href="tambah.php" class="btn btn-success"> + Tambah Proyek</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        
        <div class="table-responsive shadow-sm">
            <table class="table table-hover table-bordered bg-white">
                <thead class="table-dark">
                    <tr>
                        <th width="50">No</th>
                        <th>Judul Proyek</th>
                        <th>Deskripsi</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><strong><?= $row['judul']; ?></strong></td>
                        <td><?= $row['deskripsi']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>