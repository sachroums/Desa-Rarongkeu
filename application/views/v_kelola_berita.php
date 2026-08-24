<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita - Admin Desa Rarongkeu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 512%22 fill=%22%23198754%22><path d=%22M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm224 32c70.7 0 128-57.3 128-128S390.7 0 320 0S192 57.3 192 128s57.3 128 128 128zM96 288c-53 0-96 43-96 96v32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32v-32c0-53-43-96-96-96H96zm328-32c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 128v32c0 17.7 14.3 32 32 32h144c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64h-80c-35.3 0-64 28.7-64 64z%22/></svg>">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' fill='%23198754'><path d='M256 0c37.8 0 74.5 8.5 108.4 24c25.4 11.8 45.4 31.8 57.2 57.2C435.5 114.5 444 151.2 444 189c0 145.4-82.6 270.8-203.4 319.4C237 511.4 246.5 512 256 512s19-.6 25.4-3.6C402.4 459.8 485 334.4 485 189c0-45.7-10.2-90.1-29-131C433.8 20.9 400.9 4 365 4H147c-35.9 0-68.8 16.9-91 54C37.2 98.9 27 143.3 27 189c0 145.4 82.6 270.8 203.4 319.4C237 511.4 246.5 512 256 512s19-.6 25.4-3.6C402.4 459.8 485 334.4 485 189c0-45.7-10.2-90.1-29-131C433.8 20.9 400.9 4 365 4H147c-35.9 0-68.8 16.9-91 54C37.2 98.9 27 143.3 27 189c0 145.4 82.6 270.8 203.4 319.4C237 511.4 246.5 512 256 512z'/></svg>">
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

        /* ===== CSS RESPONSIF MOBILE ===== */
        @media (max-width: 768px) {
            .sidebar {
                min-height: auto;
                padding-bottom: 20px;
                border-right: none;
                border-bottom: 1px solid #dee2e6;
            }
            .navbar-brand {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm" style="height: 70px;">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold m-0" href="#">
                <i class="fa-solid fa-user-shield me-2"></i> Admin Desa Rarongkeu
            </a>
            <div class="ms-auto d-flex align-items-center">
                <span class="text-white me-3 small d-none d-lg-inline">Halo, <b><?php echo $this->session->userdata('username'); ?></b></span>
                <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-light btn-sm text-danger fw-semibold d-none d-lg-inline-block">
                    <i class="fa-solid fa-right-from-bracket me-1"></i> Logout
                </a>
                <button class="navbar-toggler border-0 text-white ms-2 d-lg-none shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars fa-lg"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            
            <!-- Sidebar Kiri -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 px-3 py-4 sidebar collapse d-lg-block">
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
                        <a class="nav-link" href="<?php echo site_url('admin/galeri'); ?>">
                            <i class="fa-solid fa-images me-2"></i> Galeri
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('admin/perangkat'); ?>">
                            <i class="fa-solid fa-users me-2"></i> Perangkat Desa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('admin/potensi'); ?>">
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
            </nav>

            <!-- Konten Utama Sebelah Kanan -->
            <div class="col-lg-10 ms-auto px-md-4 py-4">
                
                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                    <h2 class="fw-bold text-dark m-0">Data Berita</h2>
                </div>

                <!-- Card Utama -->
                <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                    <div class="card-header bg-light border-bottom p-3">
                        <!-- Tombol Pemicu Modal Pop-up -->
                        <button type="button" class="btn btn-primary btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#modalTambahBerita">
                            <i class="fa-solid fa-plus me-1"></i> Tambah Berita
                        </button>
                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light text-center">
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="20%">Judul Berita</th>
                                        <th width="32%">Isi Berita</th>
                                        <th width="12%">Tanggal</th>
                                        <th width="13%">Gambar</th>
                                        <th width="18%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($berita as $b) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td class="fw-semibold"><?php echo $b->judul; ?></td>
                                        <td><?php echo character_limiter($b->isi, 70); ?></td>
                                        <td class="text-center"><?php echo date('d-m-Y', strtotime($b->tanggal)); ?></td>
                                        <td class="text-center">
                                            <?php if(!empty($b->gambar)) : ?>
                                                <img src="<?php echo base_url('assets/upload/'.$b->gambar); ?>" alt="Gambar" class="img-thumbnail rounded" style="width: 70px; height: 45px; object-fit: cover;">
                                            <?php else : ?>
                                                <span class="badge bg-secondary">Tidak ada</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo site_url('admin/edit_berita/' . $b->id_berita); ?>" class="btn btn-success btn-sm mb-1 px-2 py-1"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                            <a href="<?php echo site_url('admin/hapus_berita/'.$b->id_berita); ?>" class="btn btn-danger btn-sm mb-1 px-2 py-1" onclick="return confirm('Yakin ingin menghapus berita ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                    <?php if(empty($berita)) : ?>
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-4">Belum ada data berita.</td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Modal Pop-up Tambah Berita -->
    <div class="modal fade" id="modalTambahBerita" tabindex="-1" aria-labelledby="modalTambahBeritaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title fw-bold" id="modalTambahBeritaLabel"><i class="fa-solid fa-newspaper me-2"></i> Tambah Berita Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form action="<?php echo site_url('admin/proses_tambah_berita'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Judul Berita</label>
                            <input type="text" name="judul" class="form-control" placeholder="Masukkan judul berita..." required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Isi Berita</label>
                            <textarea name="isi" class="form-control" rows="5" placeholder="Tulis isi berita di sini..." required></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="" disabled selected>-- Pilih Kategori --</option>
                                <option value="Kegiatan Desa" <?php echo (isset($berita['kategori']) && $berita['kategori'] == 'Kegiatan Desa') ? 'selected' : ''; ?>>Kegiatan Desa</option>
                                <option value="Kesehatan" <?php echo (isset($berita['kategori']) && $berita['kategori'] == 'Kesehatan') ? 'selected' : ''; ?>>Kesehatan</option>
                                <option value="Pengumuman" <?php echo (isset($berita['kategori']) && $berita['kategori'] == 'Pengumuman') ? 'selected' : ''; ?>>Pengumuman</option>
                                <option value="Pembangunan" <?php echo (isset($berita['kategori']) && $berita['kategori'] == 'Pembangunan') ? 'selected' : ''; ?>>Pembangunan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Gambar Berita</label>
                            <input type="file" name="gambar" class="form-control">
                            <div class="form-text text-muted">Format yang diizinkan: jpg, jpeg</div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success px-4"><i class="fa-solid fa-save me-1"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>