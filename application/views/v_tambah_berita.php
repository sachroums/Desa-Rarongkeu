<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita - Admin Desa Rarongkeu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            min-height: calc(100vh - 70px);
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .sidebar .nav-link {
            color: #333;
            padding: 10px 15px;
            font-weight: 500;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: #198754;
            color: #fff;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm" style="height: 70px;">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fa-solid fa-user-shield me-2"></i> Admin Desa Rarongkeu
            </a>
            <div class="ms-auto d-flex align-items-center">
                <span class="text-white me-3 small">Halo, <b><?php echo $this->session->userdata('username'); ?></b></span>
                <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-light btn-sm text-danger fw-semibold">
                    <i class="fa-solid fa-right-from-bracket me-1"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            
            <!-- Sidebar Kiri -->
            <div class="col-md-3 col-lg-2 px-3 py-4 sidebar d-none d-md-block">
                <div class="mb-3 px-2">
                    <input type="text" class="form-control form-control-sm" placeholder="Cari menu...">
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('admin/dashboard'); ?>">
                            <i class="fa-solid fa-gauge me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url('admin/berita'); ?>">
                            <i class="fa-solid fa-newspaper me-2"></i> Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-images me-2"></i> Galeri
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-users me-2"></i> Perangkat Desa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-store me-2"></i> Potensi Desa
                        </a>
                    </li>
                    <hr class="text-muted">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="<?php echo site_url('auth/logout'); ?>">
                            <i class="fa-solid fa-right-from-bracket me-2"></i> Log Out
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Konten Utama Sebelah Kanan (Form Tambah Berita) -->
            <div class="col-md-9 col-lg-10 px-md-4 py-4">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold text-dark">Tambah Berita Baru</h2>
                </div>

                <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                    <div class="card-body p-4">
                        
                        <!-- Form mengarah ke method proses_tambah_berita di controller Admin.php -->
                        <?php echo form_open_multipart('admin/proses_tambah_berita'); ?>
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Judul Berita</label>
                                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul berita..." required>
                            </div>

                            <!-- Tambahan Input Kategori -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="" disabled selected>-- Pilih Kategori Berita --</option>
                                    <option value="Kegiatan Desa">Kegiatan Desa</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                    <option value="Pengumuman">Pengumuman</option>
                                    <option value="Pembangunan">Pembangunan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Isi Berita</label>
                                <textarea name="isi" class="form-control" rows="6" placeholder="Tulis isi berita di sini..." required></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Gambar Berita</label>
                                <input type="file" name="gambar" class="form-control">
                                <div class="form-text text-muted">Format yang diizinkan: jpg, jpeg, png</div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo site_url('admin/berita'); ?>" class="btn btn-secondary px-4">
                                    <i class="fa-solid fa-arrow-left me-1"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-success px-4">
                                    <i class="fa-solid fa-save me-1"></i> Simpan Berita
                                </button>
                            </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>

            </div>

        </div>
    </div>

</body>
</html>