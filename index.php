<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Adam Mubarok</title>

    <link rel="icon" type="image/png" href="assets/uploads/faviconadam.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        html { scroll-behavior: smooth; }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1484417894907-623942c8ee29?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
        }
        .ai-card { border-radius: 20px; border: none; }
    </style>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Keahlian</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link text-info fw-bold" href="#info-cepat"><i class="bi bi-info-circle"></i> Info Cepat</a></li>
                    <li class="nav-item"><a class="btn btn-outline-light btn-sm ms-lg-3" href="admin/login.php">Admin Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-white py-5 text-center">
        <div class="container py-5">
            <h1 class="display-4 fw-bold">Halo, Saya Adam Mubarok</h1>
            <p class="lead mb-4">Web Developer | Database Enthusiast | Mahasiswa Teknik Informatika</p>
            <a href="#projects" class="btn btn-primary btn-lg px-4">Lihat Karya Saya</a>
        </div>
    </header>

    <section id="about" class="py-5 bg-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-5 text-center">
                    <div class="sticky-md-top" style="top: 100px;">
                        <img src="assets/uploads/geminiadam.png"
                            class="rounded-circle shadow border border-5 border-light mb-3"
                            alt="Profile"
                            style="width: 200px; height: 200px; object-fit: cover;">
                        <h3 class="fw-bold mb-0">Adam Mubarok</h3>
                        <p class="text-primary fw-semibold">Mahasiswa Teknik Informatika</p>
                        <hr class="w-25 mx-auto border-primary border-2 opacity-100">
                        <p class="text-muted px-lg-4">Saya berfokus pada pengembangan aplikasi web dan manajemen basis data. Website ini dibangun menggunakan PHP Native dan MySQL.</p>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="mb-5">
                        <h4 class="fw-bold mb-4 text-dark"><i class="bi bi-briefcase-fill text-primary me-2"></i>Pengalaman Kerja</h4>
                        <div class="ps-3 border-start border-2 border-primary-subtle">
                            <div class="mb-4">
                                <h6 class="fw-bold mb-1">IT Support</h6>
                                <p class="text-muted small mb-2">PT. Samindo Electronics | Agustus 2024 - Sekarang</p>
                                <p class="small text-secondary">Bertanggung jawab dalam pemeliharaan infrastruktur IT dan dukungan teknis operasional perusahaan.</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="fw-bold mb-1">Engineering Support</h6>
                                <p class="text-muted small mb-2">PT. Samindo Electronics | Nov 2019 - April 2024</p>
                                <p class="small text-secondary">Mendukung teknis produksi alat elektronik seperti STB (Set Top Box) dan Router Wi-fi.</p>
                            </div>
                            <div class="mb-0">
                                <h6 class="fw-bold mb-1">Leader Group</h6>
                                <p class="text-muted small mb-2">PT. Ruben Mandiri Utama | Agt 2018 - Nov 2019</p>
                                <p class="small text-secondary">Memimpin operasional pada proses painting menggunakan metode EDP dan Powder Coating.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="fw-bold mb-4 text-dark"><i class="bi bi-people-fill text-success me-2"></i>Pengalaman Organisasi</h4>
                        <div class="ps-3 border-start border-2 border-success-subtle">
                            <div class="mb-4">
                                <h6 class="fw-bold mb-1 text-success">Ketua Umum</h6>
                                <p class="text-muted small mb-2">Himatif Universitas Pelita Bangsa | Periode 2025 - 2026</p>
                                <p class="small text-secondary">Memimpin koordinasi seluruh program kerja dan menciptakan komunikasi yang baik antar anggota.</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="fw-bold mb-1 text-success">Ketua Divisi Penelitian Dan Pengembangan</h6>
                                <p class="text-muted small mb-2">Himatif Universitas Pelita Bangsa | Periode 2024 - 2025</p>
                                <p class="small text-secondary">Mengkoordinasikan inovasi program kerja khusus untuk pengembangan anggota.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-5 bg-light border-top border-bottom">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Keahlian Utama</h2>
            <div class="row g-4 text-start">
                <div class="col-md-3">
                    <div class="p-4 bg-white shadow-sm rounded-4 h-100">
                        <h5 class="fw-bold text-primary">MySQL</h5>
                        <p class="small text-muted mb-0">Perancangan database relasional dan optimasi query.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 bg-white shadow-sm rounded-4 h-100">
                        <h5 class="fw-bold text-primary">PHP</h5>
                        <p class="small text-muted mb-0">Pemrosesan server-side dan logika bisnis website.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 bg-white shadow-sm rounded-4 h-100">
                        <h5 class="fw-bold text-primary">Bootstrap</h5>
                        <p class="small text-muted mb-0">Desain interface responsif dan modern.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 bg-white shadow-sm rounded-4 h-100">
                        <h5 class="fw-bold text-primary">VS Code</h5>
                        <p class="small text-muted mb-0">Lingkungan pengembangan utama saya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-5 bg-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Daftar Proyek Saya</h2>
                <span class="badge bg-secondary">Data Real-time</span>
            </div>
            <div class="row">
                <?php
                $query = "SELECT * FROM projects ORDER BY id DESC";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) : ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                                <div class="card-body">
                                    <span class="badge bg-primary-subtle text-primary mb-2">Web Development</span>
                                    <h5 class="card-title fw-bold"><?= htmlspecialchars($row['judul']); ?></h5>
                                    <p class="card-text text-secondary small"><?= nl2br(htmlspecialchars($row['deskripsi'])); ?></p>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                } else {
                    echo "<div class='col-12 text-center py-5'><p class='text-muted'>Belum ada proyek.</p></div>";
                } ?>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h2 class="fw-bold mb-4">Mari Terhubung!</h2>
                    <p class="text-muted mb-5">Tertarik untuk bekerja sama atau sekadar ingin berdiskusi? Silakan hubungi saya melalui platform di bawah ini.</p>
                    
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="p-4 border rounded-4 shadow-sm h-100">
                                <i class="bi bi-whatsapp fs-1 text-success mb-3"></i>
                                <h5 class="fw-bold">WhatsApp</h5>
                                <p class="small text-muted">Respon cepat via chat</p>
                                <a href="https://wa.me/6289506047143" target="_blank" class="btn btn-outline-success btn-sm rounded-pill px-4">Chat Sekarang</a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-4 border rounded-4 shadow-sm h-100">
                                <i class="bi bi-envelope-at fs-1 text-danger mb-3"></i>
                                <h5 class="fw-bold">Email</h5>
                                <p class="small text-muted">Kirim pesan</p>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=adammubarok73@gmail.com" 
                                target="_blank" 
                                class="btn btn-outline-danger btn-sm rounded-pill px-4">
                                Kirim Email
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-4 border rounded-4 shadow-sm h-100">
                                <i class="bi bi-linkedin fs-1 text-primary mb-3"></i>
                                <h5 class="fw-bold">LinkedIn</h5>
                                <p class="small text-muted">Koneksi Profesional</p>
                                <a href="https://www.linkedin.com/in/adam-mubarok-1ab49a308/" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill px-4">Hubungkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section id="info-cepat" class="py-5 bg-light border-top shadow-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-4">
                    <h2 class="fw-bold">Informasi Cepat</h2>
                    <p class="text-muted">Temukan jawaban instan mengenai latar belakang Adam</p>
                </div>
                <div class="col-md-8">
                    <div class="accordion shadow-sm" id="faqAdam">
                        <div class="accordion-item ai-card mb-2 overflow-hidden border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                                    Apa Jabatan Adam di Himatif?
                                </button>
                            </h2>
                            <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faqAdam">
                                <div class="accordion-body text-secondary">
                                    Adam saat ini menjabat sebagai <strong>Ketua Himpunan Mahasiswa Teknik Informatika</strong> di Universitas Pelita Bangsa untuk periode 2025-2026.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ai-card mb-2 overflow-hidden border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                                    Dimana Adam Bekerja Sekarang?
                                </button>
                            </h2>
                            <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAdam">
                                <div class="accordion-body text-secondary">
                                    Adam bekerja di <strong>PT. Samindo Electronics</strong> sebagai IT Support sejak Agustus 2024.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2026 Adam Mubarok || All Rights Reserved</p>
            <small class="text-secondary">Dibuat dengan PHP, MySQL, dan Bootstrap 5</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>