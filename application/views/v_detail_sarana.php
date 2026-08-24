<?php
/** 
 * @var array $sarana 
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sarana['nama']; ?> - Desakita Desa Rarongkeu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 512%22 fill=%22%23198754%22><path d=%22M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm224 32c70.7 0 128-57.3 128-128S390.7 0 320 0S192 57.3 192 128s57.3 128 128 128zM96 288c-53 0-96 43-96 96v32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32v-32c0-53-43-96-96-96H96zm328-32c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 128v32c0 17.7 14.3 32 32 32h144c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64h-80c-35.3 0-64 28.7-64 64z%22/></svg>">
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23198754'><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg>">    
    
    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        /* Style untuk Layout Dashboard / Card Profile */
        .card-profile { 
            background: #fff;
            border-radius: 20px; 
            border: 1px solid #e2e8f0; 
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
            padding: 25px;
        }
        .stat-box { 
            background: #fff; 
            padding: 20px; 
            border-radius: 15px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.05); 
        }
        .infrastructure-list li { 
            padding: 10px 0; 
            border-bottom: 1px solid #e2e8f0; 
        }
        .badge-custom { 
            padding: 6px 16px; 
            border-radius: 20px; 
            font-size: 0.85rem; 
            font-weight: 600;
        }
        
        /* Warna Khusus Tema Kategori (Tanpa Teks Hitam pada Badge/Aksen) */
        .text-school { color: #d97706 !important; }
        .border-school { border-left: 5px solid #d97706 !important; }
        .bg-school-subtle { background-color: #fffbeb !important; color: #d97706 !important; }
        
        .text-mosque { color: #dc2626 !important; }
        .border-mosque { border-left: 5px solid #dc2626 !important; }
        .bg-mosque-subtle { background-color: #fef2f2 !important; color: #dc2626 !important; }

        .text-sport { color: #0284c7 !important; }
        .border-sport { border-left: 5px solid #0284c7 !important; }
        .bg-sport-subtle { background-color: #e0f2fe !important; color: #0284c7 !important; }

        .text-office { color: #16a34a !important; }
        .border-office { border-left: 5px solid #16a34a !important; }
        .bg-office-subtle { background-color: #f0fdf4 !important; color: #16a34a !important; }

        .text-health { color: #2563eb !important; }
        .border-health { border-left: 5px solid #2563eb !important; }
        .bg-health-subtle { background-color: #eff6ff !important; color: #2563eb !important; }

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
                    <li class="nav-item"><a class="nav-link active fw-semibold text-success" href="<?php echo site_url('home/sarana'); ?>">Sarana Prasarana</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/perangkat'); ?>">Perangkat Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/potensi'); ?>">Potensi Desa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <div class="container py-5">
        <div class="mb-4">
            <a href="<?php echo site_url('home/sarana'); ?>" class="text-decoration-none text-muted small">
                <i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Daftar Sarana Prasarana
            </a>
        </div>

        <?php 
            // Penentuan Kelas Warna & Icon Berdasarkan ID / Kategori Sarana
            $color_class = 'office';
            $bg_class = 'bg-office-subtle';
            $icon_kategori = 'fa-tag';

            if ($sarana['id'] == 3) {
                // Sekolah
                $color_class = 'school';
                $bg_class = 'bg-school-subtle';
                $icon_kategori = 'fa-graduation-cap';
            } elseif ($sarana['id'] == 6) {
                // Masjid / Sarana Ibadah
                $color_class = 'mosque';
                $bg_class = 'bg-mosque-subtle';
                $icon_kategori = 'fa-mosque';
            } elseif ($sarana['id'] == 4) {
                // Lapangan Olahraga
                $color_class = 'sport';
                $bg_class = 'bg-sport-subtle';
                $icon_kategori = 'fa-futbol';
            } elseif ($sarana['id'] == 2) {
                // Kesehatan / Pustu
                $color_class = 'health';
                $bg_class = 'bg-health-subtle';
                $icon_kategori = 'fa-house-chimney-medical';
            } else {
                // Kantor Desa / Lainnya
                $color_class = 'office';
                $bg_class = 'bg-office-subtle';
                $icon_kategori = 'fa-building';
            }
        ?>

        <?php if ($sarana['id'] == 3 || $sarana['id'] == 6 || $sarana['id'] == 4): ?>
            <!-- LAYOUT DASHBOARD: SEKOLAH, MASJID, & LAPANGAN OLAHRAGA -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card card-profile">
                        <img src="<?php echo $sarana['gambar']; ?>" alt="<?php echo $sarana['nama']; ?>" class="rounded-4 mb-3" style="height: 220px; width: 100%; object-fit: cover;">
                        <div class="mb-2">
                            <span class="badge-custom <?php echo $bg_class; ?>">
                                <i class="fa-solid <?php echo $icon_kategori; ?> me-1"></i> <?php echo $sarana['kategori']; ?>
                            </span>
                        </div>
                        <h3 class="fw-bold text-dark mt-2 mb-2" style="font-size: 22px;"><?php echo $sarana['nama']; ?></h3>
                        <p class="text-muted small mb-3">
                            <i class="fa-solid fa-user-tie text-<?php echo $color_class; ?> me-1"></i> 
                            <?php echo ($sarana['id'] == 4) ? 'Dikelola oleh Pemuda Rarongkeu' : 'Dikelola oleh Pemerintah Desa Rarongkeu'; ?>
                        </p>
                        <hr class="border-secondary-subtle my-2">
                        <div class="d-flex align-items-center text-<?php echo $color_class; ?> small fw-semibold mt-2">
                            <i class="fa-solid fa-circle-check me-2"></i> Status: <?php echo ($sarana['id'] == 4) ? 'Terbuka untuk Umum' : 'Aktif / Beroperasi Normal'; ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row mb-4">
                        <?php if ($sarana['id'] == 4): ?>
                            <!-- Stats Khusus Lapangan -->
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="stat-box border-sport">
                                    <div class="text-muted small mb-1">Luas Area</div>
                                    <div class="fs-4 fw-bold text-sport">± 1.200 m²</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="stat-box border-sport">
                                    <div class="text-muted small mb-1">Jenis Lapangan</div>
                                    <div class="fs-4 fw-bold text-sport">Tanah</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="stat-box border-sport">
                                    <div class="text-muted small mb-1">Kondisi</div>
                                    <div class="fs-4 fw-bold text-sport">Layak Pakai</div>
                                </div>
                            </div>
                        <?php else: ?>
                            <!-- Stats Umum (Sekolah & Masjid) -->
                            <?php foreach($sarana['stats'] as $stat): ?>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="stat-box border-<?php echo $color_class; ?>">
                                    <div class="text-muted small mb-1"><?php echo $stat['label']; ?></div>
                                    <div class="fs-4 fw-bold text-<?php echo $color_class; ?>"><?php echo $stat['value']; ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="card card-profile">
                        <?php if ($sarana['id'] == 4): ?>
                            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-medal text-sport me-2"></i>Fasilitas & Cabang Olahraga</h5>
                            <ul class="list-unstyled infrastructure-list mb-4">
                                <li><i class="fa-solid fa-check-circle text-sport me-2"></i> Lapangan Voli</li>
                            </ul>
                            <h5 class="fw-bold mb-2 text-dark"><i class="fa-solid fa-circle-info text-sport me-2"></i>Informasi & Ketentuan Penggunaan</h5>
                            <p class="text-secondary mb-0" style="line-height: 1.7;">Lapangan olahraga ini terbuka untuk seluruh warga desa, terutama kegiatan pemuda, turnamen antar-dusun, serta aktivitas olahraga mandiri setiap sore hari. Mohon menjaga kebersihan area sekitar demi kenyamanan bersama.</p>
                        <?php else: ?>
                            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-building-user text-<?php echo $color_class; ?> me-2"></i>Daftar Fasilitas & Infrastruktur</h5>
                            <ul class="list-unstyled infrastructure-list mb-4">
                                <?php foreach($sarana['infrastruktur'] as $item): ?>
                                    <li><i class="fa-solid fa-check-circle text-<?php echo $color_class; ?> me-2"></i> <?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <h5 class="fw-bold mb-2 text-dark"><i class="fa-solid fa-users-line text-<?php echo $color_class; ?> me-2"></i>Struktur Personel / Pengelola</h5>
                            <p class="text-secondary mb-0" style="line-height: 1.7;"><?php echo $sarana['struktur']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <!-- LAYOUT DASHBOARD UNTUK KANTOR DESA, PUSTU, & LAINNYA (KONSISTEN TANPA HITAM) -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card card-profile">
                        <img src="<?php echo $sarana['gambar']; ?>" alt="<?php echo $sarana['nama']; ?>" class="rounded-4 mb-3" style="height: 220px; width: 100%; object-fit: cover;">
                        <div class="mb-2">
                            <span class="badge-custom <?php echo $bg_class; ?>">
                                <i class="fa-solid <?php echo $icon_kategori; ?> me-1"></i> <?php echo $sarana['kategori']; ?>
                            </span>
                        </div>
                        <h3 class="fw-bold text-dark mt-2 mb-2" style="font-size: 22px;"><?php echo $sarana['nama']; ?></h3>
                        <p class="text-muted small mb-3">
                            <i class="fa-solid fa-user-tie text-<?php echo $color_class; ?> me-1"></i> Pemerintah Desa Rarongkeu
                        </p>
                        <hr class="border-secondary-subtle my-2">
                        <div class="d-flex align-items-center text-<?php echo $color_class; ?> small fw-semibold mt-2">
                            <i class="fa-solid fa-circle-check me-2"></i> Status: Aktif / Beroperasi Normal
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card card-profile mb-4">
                        <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-circle-info text-<?php echo $color_class; ?> me-2"></i>Deskripsi & Informasi</h5>
                        <div class="text-secondary" style="line-height: 1.8; font-size: 15px;"><?php echo $sarana['deskripsi']; ?></div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="p-3 bg-white rounded-3 border-<?php echo $color_class; ?> border shadow-sm">
                                <span class="d-block text-muted small mb-1">Status Operasional</span>
                                <span class="fw-bold text-<?php echo $color_class; ?>"><i class="fa-solid fa-circle-check me-2"></i>Aktif / Beroperasi Normal</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-white rounded-3 border-<?php echo $color_class; ?> border shadow-sm">
                                <span class="d-block text-muted small mb-1">Penanggung Jawab / Pengelola</span>
                                <span class="fw-bold text-<?php echo $color_class; ?>"><i class="fa-solid fa-user-tie me-2"></i>Pemerintah Desa Rarongkeu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <footer class="footer-custom pt-5 pb-3 mt-5">
       <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="fw-bold text-white mb-3">DESAKITA</h5>
                    <p class="small mb-1"></i>Pusat Informasi dan Pelayanan Digital Resmi Pemerintah Desa Rarongkeu.</p>                </div>
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
                        <li class="mb-1"><a href="<?php echo site_url('home/profil'); ?>" class="text-decoration-none">Profil Desa</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/berita'); ?>" class="text-decoration-none">Berita</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/galeri'); ?>" class="text-decoration-none">Galeri</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/sarana'); ?>" class="text-decoration-none">Sarana Prasarana</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/perangkat'); ?>" class="text-decoration-none">Perangkat Desa</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/potensi'); ?>" class="text-decoration-none">Potensi Desa</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="text-center text-white-50 small">
                <p class="mb-0">&copy; 2026 Pemerintah Desa Rarongkeu. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>