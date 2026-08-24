<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Perangkat Desa - Admin Desa Rarongkeu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 512%22 fill=%22%23198754%22><path d=%22M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm224 32c70.7 0 128-57.3 128-128S390.7 0 320 0S192 57.3 192 128s57.3 128 128 128zM96 288c-53 0-96 43-96 96v32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32v-32c0-53-43-96-96-96H96zm328-32c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 128v32c0 17.7 14.3 32 32 32h144c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64h-80c-35.3 0-64 28.7-64 64z%22/></svg>">
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23198754'><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg>">    
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
                        <a class="nav-link active" href="<?php echo site_url('admin/perangkat'); ?>">
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
                    <h2 class="fw-bold text-dark m-0">Data Perangkat Desa</h2>
                </div>

                <!-- Card Utama -->
                <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                    <div class="card-header bg-light border-bottom p-3">
                        <!-- Tombol Pemicu Modal Pop-up Tambah -->
                        <button type="button" class="btn btn-primary btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#modalTambahPerangkat">
                            <i class="fa-solid fa-plus me-1"></i> Tambah Perangkat
                        </button>
                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light text-center">
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="25%">Nama Lengkap</th>
                                        <th width="20%">Jabatan</th>
                                        <th width="25%">Uraian Tugas Utama</th>
                                        <th width="10%">Foto</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($perangkat as $p) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td class="fw-semibold"><?php echo $p->nama; ?></td>
                                        <td><?php echo $p->jabatan; ?></td>
                                        <td><?php echo !empty($p->tugas) ? $p->tugas : '-'; ?></td>
                                        <td class="text-center">
                                            <?php if(!empty($p->foto)) : ?>
                                                <img src="<?php echo base_url('assets/upload/'.$p->foto); ?>" alt="Foto" class="img-thumbnail rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                            <?php else : ?>
                                                <span class="badge bg-secondary">Tidak ada</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                            <!-- Tombol pemicu modal edit -->
                                            <button type="button" class="btn btn-success btn-sm mb-1 px-2 py-1" data-bs-toggle="modal" data-bs-target="#modalEditPerangkat<?php echo $p->id_perangkat; ?>">
                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                            </button>
                                            <a href="<?php echo site_url('admin/hapus_perangkat/'.$p->id_perangkat); ?>" class="btn btn-danger btn-sm mb-1 px-2 py-1" onclick="return confirm('Yakin ingin menghapus perangkat ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                    <?php if(empty($perangkat)) : ?>
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-4">Belum ada data perangkat desa.</td>
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

   <!-- Modal Pop-up Tambah Perangkat -->
    <div class="modal fade" id="modalTambahPerangkat" tabindex="-1" aria-labelledby="modalTambahPerangkatLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title fw-bold" id="modalTambahPerangkatLabel"><i class="fa-solid fa-users me-2"></i> Tambah Perangkat Desa Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form action="<?php echo site_url('admin/tambah_perangkat'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama beserta gelar..." required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jabatan</label>
                            <select name="jabatan" class="form-control" required>
                                <option value="" disabled selected>-- Pilih Jabatan --</option>
                                <option value="Kepala Desa">Kepala Desa</option>
                                <option value="Sekretaris Desa">Sekretaris Desa</option>
                                <option value="Kepala Urusan Umum">Kepala Urusan Umum</option>
                                <option value="Kepala Urusan Keuangan">Kepala Urusan Keuangan</option>
                                <option value="Kepala Seksi Pemerintahan">Kepala Seksi Pemerintahan</option>
                                <option value="Kepala Seksi Kesejahteraan">Kepala Seksi Kesejahteraan</option>
                                <option value="Kepala Dusun I">Kepala Dusun I</option>
                                <option value="Kepala Dusun II">Kepala Dusun II</option>
                                <option value="Kepala Dusun III">Kepala Dusun III</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Uraian Tugas Utama</label>
                            <textarea name="tugas" class="form-control" rows="3" placeholder="Masukkan rincian tugas pokok perangkat..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Foto Perangkat</label>
                            <input type="file" name="foto" class="form-control" required>
                            <div class="form-text text-muted">Format yang diizinkan: jpg, jpeg, png</div>
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

    <!-- Modal Pop-up Edit Perangkat (Dibuat Dinamis Berdasarkan ID) -->
    <?php foreach($perangkat as $p) : ?>
    <div class="modal fade" id="modalEditPerangkat<?php echo $p->id_perangkat; ?>" tabindex="-1" aria-labelledby="modalEditPerangkatLabel<?php echo $p->id_perangkat; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title fw-bold" id="modalEditPerangkatLabel<?php echo $p->id_perangkat; ?>"><i class="fa-solid fa-pen-to-square me-2"></i> Edit Perangkat Desa</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form action="<?php echo site_url('admin/update_perangkat'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_perangkat" value="<?php echo $p->id_perangkat; ?>">

                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $p->nama; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jabatan</label>
                            <select name="jabatan" class="form-control" required>
                                <option value="" disabled>-- Pilih Jabatan --</option>
                                <option value="Kepala Desa" <?php echo ($p->jabatan == 'Kepala Desa') ? 'selected' : ''; ?>>Kepala Desa</option>
                                <option value="Sekretaris Desa" <?php echo ($p->jabatan == 'Sekretaris Desa') ? 'selected' : ''; ?>>Sekretaris Desa</option>
                                <option value="Kepala Urusan Umum" <?php echo ($p->jabatan == 'Kepala Urusan Umum') ? 'selected' : ''; ?>>Kepala Urusan Umum</option>
                                <option value="Kepala Urusan Keuangan" <?php echo ($p->jabatan == 'Kepala Urusan Keuangan') ? 'selected' : ''; ?>>Kepala Urusan Keuangan</option>
                                <option value="Kepala Seksi Pemerintahan" <?php echo ($p->jabatan == 'Kepala Seksi Pemerintahan') ? 'selected' : ''; ?>>Kepala Seksi Pemerintahan</option>
                                <option value="Kepala Seksi Kesejahteraan" <?php echo ($p->jabatan == 'Kepala Seksi Kesejahteraan') ? 'selected' : ''; ?>>Kepala Seksi Kesejahteraan</option>
                                <option value="Kepala Dusun I" <?php echo ($p->jabatan == 'Kepala Dusun I') ? 'selected' : ''; ?>>Kepala Dusun I</option>
                                <option value="Kepala Dusun II" <?php echo ($p->jabatan == 'Kepala Dusun II') ? 'selected' : ''; ?>>Kepala Dusun II</option>
                                <option value="Kepala Dusun III" <?php echo ($p->jabatan == 'Kepala Dusun III') ? 'selected' : ''; ?>>Kepala Dusun III</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Uraian Tugas Utama</label>
                            <textarea name="tugas" class="form-control" rows="3" required><?php echo $p->tugas; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Foto Saat Ini</label>
                            <div class="mb-2">
                                <?php if(!empty($p->foto)) : ?>
                                    <img src="<?php echo base_url('assets/upload/'.$p->foto); ?>" class="img-thumbnail rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
                                <?php else : ?>
                                    <span class="badge bg-secondary">Tidak ada foto</span>
                                <?php endif; ?>
                            </div>
                            <label class="form-label fw-semibold">Ganti Foto (Opsional)</label>
                            <input type="file" name="foto" class="form-control">
                            <div class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah foto.</div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success px-4"><i class="fa-solid fa-save me-1"></i> Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <!-- Script Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>