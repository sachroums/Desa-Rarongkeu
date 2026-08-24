<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direktori Perangkat Desa - Desakita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .profile-card {
            background: #fff;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .profile-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 20px -4px rgba(0, 0, 0, 0.05);
        }
        .profile-img {
            width: 85px;
            height: 85px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #16a34a;
        }
        .footer-custom {
            background-color: #0f172a;
            color: #cbd5e1;
        }
        .footer-custom a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-custom a:hover {
            color: #ffffff !important;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-success d-flex align-items-center" href="<?php echo site_url('home'); ?>">
                <i class="fa-solid fa-house-chimney-user fs-3 me-2"></i>
                <div>
                    <span class="fs-4 text-dark">DESAKITA</span>
                    <div class="small text-muted" style="font-size: 10px;">Desa Rarongkeu</div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home'); ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/profil'); ?>">Profil Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/berita'); ?>">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/galeri'); ?>">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/sarana'); ?>">Sarana Prasarana</a></li>
                    <li class="nav-item"><a class="nav-link active fw-semibold text-success" href="<?php echo site_url('home/perangkat'); ?>">Perangkat Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/potensi'); ?>">Potensi Desa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA: MODEL UI KARTU GRID -->
    <div class="container py-5">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div>
                <span class="text-muted small">Beranda > Perangkat Desa > Direktori Kartu</span>
                <h2 class="fw-bold text-dark mt-1"><i class="fa-solid fa-address-card text-success me-2"></i>Direktori Perangkat Desa</h2>
                <p class="text-muted small mb-0">Daftar lengkap profil tim aparatur pemerintah Desa Rarongkeu.</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <!-- Tombol Lihat Struktur Lengkap yang memanggil Modal -->
                <button type="button" class="btn text-white px-3 py-2 btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#modalStrukturLengkap" style="background-color: #16a34a; border-radius: 8px; font-size: 13px;">
                    <i class="fa-solid fa-sitemap me-1"></i> Lihat Struktur Lengkap
                </button>
                <a href="<?php echo site_url('home/perangkat'); ?>" class="btn btn-outline-secondary btn-sm rounded-pill px-3 shadow-sm">
                    <i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Bagan Utama
                </a>
            </div>
        </div>

        <div class="row g-4">
            <?php if(!empty($perangkat)) : ?>
                <?php foreach($perangkat as $p) : ?>
                <div class="col-md-4">
                    <div class="profile-card p-4 text-center h-100">
                        <img src="<?php echo base_url('assets/upload/' . $p->foto); ?>" alt="<?php echo $p->nama; ?>" class="profile-img mb-3 shadow-sm">
                        <h5 class="fw-bold text-dark mb-1"><?php echo $p->nama; ?></h5>
                        <span class="badge bg-success bg-opacity-15 text-success mb-2 px-3 py-1 rounded-pill small"><?php echo $p->jabatan; ?></span>
                        <p class="text-muted small mb-2">Pemerintah Desa Rarongkeu</p>
                        <hr class="text-muted opacity-25">
                        <div class="small text-muted"><i class="fa-solid fa-circle-check text-success me-1"></i> Aktif Bertugas</div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-12 text-center text-muted py-5">
                    <p>Belum ada data perangkat desa yang tersedia.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- MODAL STRUKTUR LENGKAP -->
    <div class="modal fade" id="modalStrukturLengkap" tabindex="-1" aria-labelledby="modalStrukturLengkapLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0 shadow" style="border-radius: 16px;">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title fw-bold" id="modalStrukturLengkapLabel"><i class="fa-solid fa-sitemap me-2"></i>Rincian Struktur & Tugas Perangkat Desa Rarongkeu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="alert alert-success small mb-4">
                        <i class="fa-solid fa-circle-info me-1"></i> Berikut adalah daftar lengkap perangkat Desa Rarongkeu beserta jabatan dari database.
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle small">
                            <thead class="table-success text-center">
                                <tr>
                                    <th style="width: 8%;">No</th>
                                    <th style="width: 35%;">Nama & Jabatan</th>
                                    <th style="width: 57%;">Foto / Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($perangkat)) : ?>
                                    <?php $no=1; foreach($perangkat as $p) : ?>
                                    <tr>
                                        <td class="text-center fw-bold"><?php echo $no++; ?></td>
                                        <td>
                                            <strong><?php echo $p->nama; ?></strong><br>
                                            <span class="badge bg-success text-white mt-1"><?php echo $p->jabatan; ?></span>
                                        </td>
                                        <td class="text-center">
                                            <img src="<?php echo base_url('assets/upload/' . $p->foto); ?>" class="rounded-circle shadow-sm" style="width: 45px; height: 45px; object-fit: cover;" alt="Foto">
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="3" class="text-center text-muted py-3">Belum ada data tersedia.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary btn-sm px-4" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer-custom pt-5 pb-3 mt-5">
       <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="fw-bold text-white mb-3">DESAKITA</h5>
                    <p class="small mb-1">Pusat Informasi dan Pelayanan Digital Resmi Pemerintah Desa Rarongkeu.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold text-white mb-3">Kontak Kami</h5>
                    <p class="small mb-1"><i class="fa-solid fa-location-dot me-2"></i> Kantor Desa Rarongkeu, Sulawesi Tenggara</p>
                    <p class="small mb-1"><i class="fa-solid fa-phone me-2"></i> +62 812-3456-7890</p>
                    <p class="small mb-0"><i class="fa-solid fa-envelope me-2"></i> desa.rarongkeu@email.com</p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold text-white mb-3">Menu Cepat</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-1"><a href="<?php echo site_url('home'); ?>" class="text-decoration-none">Beranda</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/perangkat'); ?>" class="text-decoration-none">Perangkat Desa</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="text-center text-white-50 small">
                <p class="mb-0">&copy; 2026 Pemerintah Desa Rarongkeu. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>