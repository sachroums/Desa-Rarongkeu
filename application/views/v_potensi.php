<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potensi Desa - Desakita Desa Rarongkeu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 512%22 fill=%22%23198754%22><path d=%22M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm224 32c70.7 0 128-57.3 128-128S390.7 0 320 0S192 57.3 192 128s57.3 128 128 128zM96 288c-53 0-96 43-96 96v32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32v-32c0-53-43-96-96-96H96zm328-32c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 128v32c0 17.7 14.3 32 32 32h144c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64h-80c-35.3 0-64 28.7-64 64z%22/></svg>">
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23198754'><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg>">    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* ===== KARTU POTENSI DESA ===== */
        .potensi-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.01);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .potensi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px -3px rgba(0, 0, 0, 0.08);
            border-color: #2e6930;
        }

        .potensi-img-wrapper {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .potensi-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .potensi-card:hover .potensi-img-wrapper img {
            transform: scale(1.05);
        }

        .potensi-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(46, 105, 48, 0.9);
            color: #fff;
            font-size: 11px;
            font-weight: 600;
            padding: 5px 10px;
            border-radius: 20px;
            backdrop-filter: blur(4px);
        }

        .potensi-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .potensi-body h5 {
            font-size: 16px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
        }

        .potensi-body p {
            font-size: 13px;
            color: #64748b;
            line-height: 1.5;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        /* Filter Kategori Button */
        .filter-btn {
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            padding: 8px 16px;
            transition: all 0.2s;
        }

        /* Styling Modal Detail */
        .modal-content {
            border-radius: 20px;
        }

        .detail-img-hero {
            height: 280px;
            object-fit: cover;
            border-radius: 12px;
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
<body class="bg-light">

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
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/perangkat'); ?>">Perangkat Desa</a></li>
                    <li class="nav-item"><a class="nav-link active fw-semibold text-success" href="<?php echo site_url('home/potensi'); ?>">Potensi Desa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <div class="container my-5">
        <!-- Breadcrumb & Header -->
        <div class="mb-4">
            <div class="text-muted small mb-1">Beranda &gt; Potensi Desa</div>
            <h2 class="fw-bold text-dark">Potensi Desa Rarongkeu</h2>
            <p class="text-muted small">Jelajahi berbagai sektor unggulan, kekayaan alam, dan produk lokal Desa Rarongkeu.</p>
        </div>

        <!-- FILTER KATEGORI -->
        <div class="d-flex flex-wrap gap-2 mb-4" id="filterButtons">
            <button class="btn btn-success filter-btn active" data-filter="semua"><i class="fa-solid fa-border-all me-1"></i> Semua</button>
            <button class="btn btn-outline-success filter-btn" data-filter="pertanian"><i class="fa-solid fa-seedling me-1"></i> Pertanian</button>
            <button class="btn btn-outline-success filter-btn" data-filter="perikanan"><i class="fa-solid fa-fish me-1"></i> Perikanan</button>
            <button class="btn btn-outline-success filter-btn" data-filter="umkm"><i class="fa-solid fa-store me-1"></i> UMKM & Kerajinan</button>
            <button class="btn btn-outline-success filter-btn" data-filter="pariwisata"><i class="fa-solid fa-mountain-sun me-1"></i> Pariwisata</button>
        </div>

        <!-- GRID POTENSI DESA (DINAMIS) -->
<div class="row g-4" id="potensiGrid">
    <?php if(!empty($potensi)): ?>
        <?php foreach($potensi as $p): ?>
            <?php $kategori_slug = strtolower(trim($p->kategori)); ?>
            <div class="col-md-4 col-sm-6 potensi-item" data-category="<?php echo $kategori_slug; ?>">
                <div class="potensi-card">
                    <div class="potensi-img-wrapper">
                        <img src="<?php echo base_url('assets/upload/' . $p->foto); ?>" alt="<?php echo $p->nama_potensi; ?>">
                        <span class="potensi-badge">
                            <i class="fa-solid fa-seedling me-1"></i> <?php echo $p->kategori; ?>
                        </span>
                    </div>
                    <div class="potensi-body">
                        <h5><?php echo $p->nama_potensi; ?></h5>
                        <p><?php echo character_limiter($p->deskripsi, 90); ?></p>
                        <button type="button" class="btn btn-sm btn-outline-success w-100 fw-semibold rounded-pill py-2" data-bs-toggle="modal" data-bs-target="#modalDetailPotensi<?php echo $p->id; ?>">
                            Lihat Detail Potensi
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="col-12 text-center text-muted py-5">
            <p>Belum ada data potensi desa tersedia.</p>
        </div>
    <?php endif; ?>
</div>
        </div>
    </div>

    <!-- MOCKUP UI MODAL: LIHAT DETAIL POTENSI -->
    <div class="modal fade" id="modalDetailPotensi<?php echo $p->id; ?>" tabindex="-1" aria-labelledby="modalDetailPotensiLabel<?php echo $p->id; ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title fw-bold" id="modalDetailPotensiLabel<?php echo $p->id; ?>">
                    <i class="fa-solid fa-circle-info me-2"></i>Rincian Potensi Desa
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <!-- Foto Utama / Banner -->
                <div class="mb-4 text-center">
                    <img src="<?php echo base_url('assets/upload/' . $p->foto); ?>" alt="<?php echo $p->nama_potensi; ?>" class="img-fluid detail-img-hero w-100 shadow-sm">
                </div>

                <!-- Judul & Badge Kategori -->
                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-3">
                    <div>
                        <span class="badge bg-success mb-2 px-3 py-2 rounded-pill"><i class="fa-solid fa-seedling me-1"></i> Sektor <?php echo $p->kategori; ?></span>
                        <h3 class="fw-bold text-dark"><?php echo $p->nama_potensi; ?></h3>
                    </div>
                    <div class="text-muted small">
                        <i class="fa-solid fa-location-dot text-success me-1"></i> Desa Rarongkeu
                    </div>
                </div>

                <!-- Deskripsi Lengkap -->
                <div class="mb-4">
                    <h6 class="fw-bold text-dark mb-2">Deskripsi & Potensi Utama</h6>
                    <p class="text-muted small" style="line-height: 1.7;">
                        <?php echo $p->deskripsi; ?>
                    </p>
                </div>

                <!-- Informasi Statistik / Spesifikasi Ringkas -->
                <div class="row g-2 g-md-3 mb-4">
                    <div class="col-4">
                        <div class="p-2 p-md-3 border rounded-3 bg-light text-center h-100 d-flex flex-column justify-content-center">
                            <i class="fa-solid fa-chart-area text-success fs-5 fs-md-4 mb-1"></i>
                            <div class="small text-muted" style="font-size: 11px;">Kategori</div>
                            <div class="fw-bold text-dark" style="font-size: 12px;"><?php echo $p->kategori; ?></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-2 p-md-3 border rounded-3 bg-light text-center h-100 d-flex flex-column justify-content-center">
                            <i class="fa-solid fa-users text-success fs-5 fs-md-4 mb-1"></i>
                            <div class="small text-muted" style="font-size: 11px;">Pengelola</div>
                            <div class="fw-bold text-dark" style="font-size: 12px;">Kelompok Tani</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-2 p-md-3 border rounded-3 bg-light text-center h-100 d-flex flex-column justify-content-center">
                            <i class="fa-solid fa-box-open text-success fs-5 fs-md-4 mb-1"></i>
                            <div class="small text-muted" style="font-size: 11px;">Komoditas</div>
                            <div class="fw-bold text-dark" style="font-size: 12px;">Buah / Sayuran</div>
                        </div>
                    </div>
                </div>

                    <!-- Galeri Pendukung Kecil di dalam Modal -->
                    <div class="mb-3">
                        <h6 class="fw-bold text-dark mb-2">Dokumentasi Terkait</h6>
                        <div class="row g-2">
                            <!-- Foto Dokumentasi 1 -->
                            <div class="col-4">
                                <img src="<?php echo base_url('assets/upload/kecil/foto1.PNG'); ?>" alt="Dokumentasi 1" class="img-fluid rounded border-0 shadow-sm" style="height: 90px; width: 100%; object-fit: cover;">
                            </div>
                            <!-- Foto Dokumentasi 2 -->
                            <div class="col-4">
                                <img src="<?php echo base_url('assets/upload/kecil/foto2.PNG'); ?>" alt="Dokumentasi 2" class="img-fluid rounded border-0 shadow-sm" style="height: 90px; width: 100%; object-fit: cover;">
                            </div>
                            <!-- Foto Dokumentasi 3 -->
                            <div class="col-4">
                                <img src="<?php echo base_url('assets/upload/kecil/foto3.PNG'); ?>" alt="Dokumentasi 3" class="img-fluid rounded border-0 shadow-sm" style="height: 90px; width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary btn-sm px-4 rounded-pill" data-bs-dismiss="modal">Tutup</button>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success btn-sm px-4 rounded-pill">
                        <i class="fa-brands fa-whatsapp me-1"></i> Hubungi Pengelola
                    </a>
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
                    <p class="small mb-1"></i>Pusat Informasi dan Pelayanan Digital Resmi Pemerintah Desa Rarongkeu.</p>
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
                        <li class="mb-1"><a href="<?php echo site_url('home/profil'); ?>" class="text-decoration-none">Profil Desa</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/berita'); ?>" class="text-decoration-none">Berita</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/galeri'); ?>" class="text-decoration-none">Galeri</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/sarana'); ?>" class="text-decoration-none">Sarana Prasarana</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/perangkat'); ?>" class="text-decoration-none">Perangkat Desa</a></li>
                        <li class="mb-1"><a href="#" class="text-decoration-none">Potensi Desa</a></li>                    </ul>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="text-center text-white-50 small">
                <p class="mb-0">&copy; 2026 Pemerintah Desa Rarongkeu. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Script Bootstrap JS & Filter Interaktif -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const filterButtons = document.querySelectorAll("#filterButtons .filter-btn");
            const potensiItems = document.querySelectorAll(".potensi-item");

            filterButtons.forEach(button => {
                button.addEventListener("click", function () {
                    // Hapus kelas aktif dari semua tombol
                    filterButtons.forEach(btn => {
                        btn.classList.remove("btn-success", "active");
                        btn.classList.add("btn-outline-success");
                    });

                    // Tambahkan kelas aktif ke tombol yang diklik
                    this.classList.remove("btn-outline-success");
                    this.classList.add("btn-success", "active");

                    const filterValue = this.getAttribute("data-filter");

                    // Tampilkan atau sembunyikan item berdasarkan kategori
                    potensiItems.forEach(item => {
                        if (filterValue === "semua" || item.getAttribute("data-category") === filterValue) {
                            item.style.display = "block";
                        } else {
                            item.style.display = "none";
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>