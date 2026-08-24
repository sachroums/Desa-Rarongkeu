<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Potensi Desa - Admin Desa Rarongkeu</title>
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
                        <a class="nav-link" href="<?php echo site_url('admin/berita'); ?>">
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
                        <a class="nav-link active" href="<?php echo site_url('admin/potensi'); ?>">
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
                    <h2 class="fw-bold text-dark m-0">Data Potensi Desa</h2>
                </div>

                <!-- Card Utama -->
                <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                    <div class="card-header bg-light border-bottom p-3">
                        <!-- Tombol Pemicu Modal Pop-up Tambah Potensi -->
                        <button type="button" class="btn btn-primary btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#modalTambahPotensi">
                            <i class="fa-solid fa-plus me-1"></i> Tambah Potensi
                        </button>
                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light text-center">
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="15%">Foto</th>
                                        <th width="25%">Nama & Kategori</th>
                                        <th width="40%">Deskripsi Utama</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($potensi)) : ?>
                                        <?php $no = 1; foreach($potensi as $p) : ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?></td>
                                            <td class="text-center">
                                                <img src="<?php echo base_url('assets/upload/' . $p->foto); ?>" alt="Foto" class="img-thumbnail rounded" style="width: 70px; height: 50px; object-fit: cover;">
                                            </td>
                                            <td>
                                                <strong><?php echo $p->nama_potensi; ?></strong><br>
                                                <span class="badge bg-success mt-1"><?php echo $p->kategori; ?></span>
                                            </td>
                                            <td><?php echo character_limiter($p->deskripsi, 80); ?></td>
                                            <td class="text-center">
                                                <a href="<?php echo site_url('admin/edit_potensi/' . $p->id); ?>" class="btn btn-warning btn-sm text-white mb-1 px-2 py-1"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                                <a href="<?php echo site_url('admin/hapus_potensi/' . $p->id); ?>" class="btn btn-danger btn-sm mb-1 px-2 py-1" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5" class="text-center text-muted py-4">Belum ada data potensi desa.</td>
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

    <!-- Modal Pop-up Tambah Potensi -->
    <div class="modal fade" id="modalTambahPotensi" tabindex="-1" aria-labelledby="modalTambahPotensiLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title fw-bold" id="modalTambahPotensiLabel"><i class="fa-solid fa-store me-2"></i> Tambah Data Potensi Desa</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <?php echo form_open_multipart('admin/proses_tambah_potensi'); ?>
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Potensi</label>
                            <input type="text" name="nama_potensi" class="form-control" placeholder="Contoh: Budidaya Ikan Air Tawar" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kategori Sektor</label>
                            <select name="kategori" class="form-select" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Pertanian">Pertanian</option>
                                <option value="Perikanan">Perikanan</option>
                                <option value="Peternakan">Peternakan</option>
                                <option value="UMKM">UMKM / Kerajinan</option>
                                <option value="Pariwisata">Pariwisata</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Deskripsi Lengkap</label>
                            <textarea name="deskripsi" class="form-control" rows="4" placeholder="Tuliskan detail informasi potensi desa..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Foto Potensi</label>
                            <input type="file" name="foto" class="form-control" required>
                            <div class="form-text text-muted">Format yang diizinkan: jpg, jpeg, png, webp. Maksimal 2MB.</div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success px-4"><i class="fa-solid fa-save me-1"></i> Simpan Potensi</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>