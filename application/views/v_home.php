<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desakita - Website Resmi Desa Rarongkeu</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 512%22 fill=%22%23198754%22><path d=%22M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm224 32c70.7 0 128-57.3 128-128S390.7 0 320 0S192 57.3 192 128s57.3 128 128 128zM96 288c-53 0-96 43-96 96v32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32v-32c0-53-43-96-96-96H96zm328-32c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 128v32c0 17.7 14.3 32 32 32h144c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64h-80c-35.3 0-64 28.7-64 64z%22/></svg>">
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23198754'><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg>">    
<style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
            color: white;
            padding: 100px 0;
        }
        
        /* Styling Quick Feature Cards */
        .feature-container-wrapper {
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }
        
        /* Desktop: Tampilan Horizontal Scroll */
        .feature-scroll-container {
            display: flex;
            gap: 16px;
            overflow-x: auto;
            scroll-behavior: smooth;
            scrollbar-width: none;
            -ms-overflow-style: none;
            padding: 10px 4px 20px 4px;
        }
        .feature-scroll-container::-webkit-scrollbar {
            display: none;
        }
        
        .feature-card {
            flex: 0 0 220px;
            border: 1px solid #e9ecef;
            border-radius: 14px;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s, box-shadow 0.2s;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .icon-circle {
            width: 56px;
            height: 56px;
            min-width: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: white;
            margin-bottom: 12px;
        }
        
        .feature-text h6 {
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 4px;
            color: #1e293b;
        }
        
        .feature-text p {
            font-size: 11px;
            color: #64748b;
            margin-bottom: 0;
            line-height: 1.3;
        }

        /* Tombol Navigasi Geser Kiri & Kanan (Desktop) */
        .scroll-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background-color: white;
            border: 1px solid #dee2e6;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 20;
            cursor: pointer;
            color: #334155;
            transition: background-color 0.2s, color 0.2s;
        }
        .scroll-btn:hover {
            background-color: #0d6efd;
            color: white;
            border-color: #0d6efd;
        }
        .scroll-btn-left {
            left: -20px;
        }
        .scroll-btn-right {
            right: -20px;
        }

        /* KHUSUS RESPONSIVE MOBILE (HP): Berubah jadi Grid 2 Kolom */
        @media (max-width: 768px) {
            .feature-container-wrapper {
                margin-top: -30px;
            }
            .feature-scroll-container {
                display: grid;
                grid-template-columns: repeat(2, 1fr); /* Diubah jadi 2 Kolom */
                gap: 12px;
                overflow-x: visible;
                padding: 0;
            }
            .feature-card {
                flex: unset;
                width: 100%;
                height: 200px;
                padding: 12px 10px;
                align-items: center;
                text-align: center;
                border-radius: 12px;
            }
            .icon-circle {
                width: 80px;
                height: 80px;
                min-width: 48px;
                font-size: 48px;
                margin-bottom: 50px;
            }
            .feature-text h6 {
                font-size: 16px;
                font-weight: 600;
                line-height: 1.2;
            }
            /* Deskripsi disembunyikan di HP agar rapi */
            .feature-text p {
                display: none; 
            }
        }

        .footer-custom {
            background-color: #0f172a;
            color: #cbd5e1;
        }
        .footer-custom a {
            color: #cbd5e1;
            transition: color 0.2s;
        }
        .footer-custom a:hover {
            color: #ffffff !important;
        }
        .list-img {
            width: 90px;
            height: 65px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }
        .main-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
    </style>
</head>
<body class="bg-light">

    <!-- 1. NAVBAR ATAS -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-success d-flex align-items-center" href="#">
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
                    <li class="nav-item"><a class="nav-link active fw-semibold text-success" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/profil'); ?>">Profil Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/berita'); ?>">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/galeri'); ?>">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/sarana'); ?>">Sarana Prasarana</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/perangkat'); ?>">Perangkat Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/potensi'); ?>">Potensi Desa</a></li>
                    
                    <!-- TOMBOL LOGIN DI SINI (Sebelah kanan Potensi Desa) -->
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-success btn-sm px-3 text-white fw-semibold shadow-sm" href="<?php echo site_url('auth'); ?>">
                            <i class="fa-solid fa-right-to-bracket me-1"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. HERO BANNER -->
    <header class="hero-section text-center text-lg-start">
        <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-7 text-start">
            <h1 class="fw-bold text-white mb-3">Selamat Datang di Desa Rarongkeu</h1>
            <p class="text-white mb-4 fs-5">Pusat informasi, transparansi, dan pelayanan publik desa dalam satu genggaman untuk warga yang lebih baik.</p>
            <a href="<?php echo site_url('home/profil'); ?>" class="btn btn-primary px-4 py-2">Selengkapnya</a>
        </div>
    </div>
</div>
        </div>
    </header>

    <!-- 3. QUICK FEATURE CARDS (Desktop: Scroll Horizontal | Mobile: Grid 2 Kolom) -->
    <div class="container feature-container-wrapper mb-5">
        <div style="position: relative;">
            <!-- Tombol Geser Kiri (Desktop) -->
            <button class="scroll-btn scroll-btn-left d-none d-md-flex" onclick="scrollCard('left')">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <!-- Container Kartu -->
            <div class="feature-scroll-container" id="featureScroll">
                <!-- 1. Profil Desa -->
                <div class="feature-card" onclick="location.href='<?php echo site_url('home/profil'); ?>'" style="cursor: pointer;">
                    <div class="icon-circle" style="background-color: #0d6efd;">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <div class="feature-text">
                        <h6>Profil Desa</h6>
                        <p>Sejarah, struktur, dan visi misi pemerintahan desa.</p>
                    </div>
                </div>

                <!-- 2. Galeri -->
                <div class="feature-card" onclick="location.href='<?php echo site_url('home/galeri'); ?>'" style="cursor: pointer;">
                    <div class="icon-circle" style="background-color: #198754;">
                        <i class="fa-solid fa-images"></i>
                    </div>
                    <div class="feature-text">
                        <h6>Galeri</h6>
                        <p>Dokumentasi foto kegiatan dan momen penting warga.</p>
                    </div>
                </div>

                <!-- 3. Berita -->
                <div class="feature-card" onclick="location.href='<?php echo site_url('home/berita'); ?>'" style="cursor: pointer;">
                    <div class="icon-circle" style="background-color: #ffc107;">
                        <i class="fa-solid fa-newspaper text-dark"></i>
                    </div>
                    <div class="feature-text">
                        <h6>Berita</h6>
                        <p>Informasi dan pengumuman kegiatan terbaru desa.</p>
                    </div>
                </div>

                <!-- 4. Potensi Desa -->
                <div class="feature-card" onclick="location.href='<?php echo site_url('home/potensi'); ?>'" style="cursor: pointer;">
                    <div class="icon-circle" style="background-color: #dc3545;">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <div class="feature-text">
                        <h6>Potensi Desa</h6>
                        <p>Kenali produk UMKM dan hasil unggulan masyarakat.</p>
                    </div>
                </div>

                <!-- 5. Perangkat Desa -->
                <div class="feature-card" onclick="location.href='<?php echo site_url('home/perangkat'); ?>'" style="cursor: pointer;">
                    <div class="icon-circle" style="background-color: #0dcaf0;">
                        <i class="fa-solid fa-users-gear text-dark"></i>
                    </div>
                    <div class="feature-text">
                        <h6>Perangkat Desa</h6>
                        <p>Struktur organisasi aparatur pemerintahan desa.</p>
                    </div>
                </div>

                <!-- 6. Sarana Prasarana -->
                <div class="feature-card" onclick="location.href='<?php echo site_url('home/sarana'); ?>'" style="cursor: pointer;">
                    <div class="icon-circle" style="background-color: #6c757d;">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    <div class="feature-text">
                        <h6>Sarana Prasarana</h6>
                        <p>Daftar fasilitas umum dan infrastruktur desa.</p>
                    </div>
                </div>
                </div>


            <!-- Tombol Geser Kanan (Desktop) -->
            <button class="scroll-btn scroll-btn-right d-none d-md-flex" onclick="scrollCard('right')">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Script Penggerak Tombol Scroll Desktop -->
    <script>
        function scrollCard(direction) {
            const container = document.getElementById('featureScroll');
            const scrollAmount = 250; 
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }
    </script>

    <!-- 4. LAYOUT 4 CARD KOLOM UTAMA -->
    <div class="container my-5">
        <div class="row g-4">
           
            <!-- Kolom 1: Berita Terbaru -->
            <div class="col-md-6 col-lg-6">
                <div class="card main-card h-100 p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                        <h5 class="fw-bold mb-0"><i class="fa-solid fa-newspaper text-primary me-2"></i> Berita Terbaru</h5>
                        <a href="<?php echo site_url('home/berita'); ?>" class="text-decoration-none small fw-semibold">Lihat Semua</a>
                    </div>
                    
                    <div class="card-body p-0">
                        <?php foreach($berita as $b): ?>
                        <div class="d-flex align-items-start mb-3">
                            <img src="<?php echo base_url('assets/upload/' . $b->gambar); ?>" 
                                class="list-img me-3" style="width: 80px; height: 60px; object-fit: cover; border-radius: 8px;" alt="Gambar Berita">
                            <div>
                                <h6 class="fw-bold mb-1" style="font-size: 14px;">
                                    <a href="<?php echo site_url('home/detail_berita/' . $b->id_berita); ?>" class="text-decoration-none text-dark">
                                        <?php echo $b->judul; ?>
                                    </a>
                                </h6>
                                <p class="text-muted mb-1" style="font-size: 11px;">
                                <?php echo date('d M Y', strtotime($b->tanggal)); ?> 
                                    <span class="text-primary fw-bold mx-1">&bullet;</span> 
                                    <span class="text-primary"><?php echo $b->kategori; ?></span>
                                </p>
                                <p class="text-secondary small mb-0" style="font-size: 12px;">
                                    <?php echo character_limiter(strip_tags($b->isi), 60); ?>
                                </p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Kolom 2: Potensi Desa -->
            <div class="col-md-6 col-lg-6">
                <div class="card main-card h-100 p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                        <h5 class="fw-bold text-dark m-0"><i class="fa-solid fa-store text-success me-2"></i> Potensi Desa</h5>
                         <a href="<?php echo site_url('home/potensi'); ?>" class="text-decoration-none small fw-semibold">Lihat Semua</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex align-items-start">
                            <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=400" class="list-img me-3" style="width: 120px; height: 85px;" alt="Potensi Desa">
                            <div>
                                <h6 class="fw-bold mb-1" style="font-size: 14px;">Kerajinan Tangan Anyaman Bambu</h6>
                                <p class="text-muted mb-1" style="font-size: 11px;">Produk UMKM &bull; <span class="text-success">Unggulan</span></p>
                                <p class="text-secondary small mb-0" style="font-size: 12px;">Menampilkan keunggulan lokal, produk UMKM, dan hasil bumi masyarakat desa yang bernilai ekonomis tinggi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom 3: Sarana Prasarana -->
            <div class="col-md-6 col-lg-6">
                <div class="card main-card h-100 p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                        <h5 class="fw-bold text-dark m-0"><i class="fa-solid fa-hotel text-warning me-2"></i> Sarana Prasarana</h5>
                        <a href="<?php echo site_url('home/sarana'); ?>" class="text-decoration-none small fw-semibold">Lihat Semua</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
                                <img src="<?php echo base_url('assets/img/kantor.jpg'); ?>" class="list-img me-2" style="width: 50px; height: 40px; object-fit: cover;" alt="Kantor/Balai Desa">                                    <span class="small fw-semibold" style="font-size: 12px;">Kantor/Balai Desa</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
<img src="<?php echo base_url('assets/img/posyandu.jpg'); ?>" class="list-img me-2" style="width: 50px; height: 40px; object-fit: cover;" alt="Puskesmas">                                    <span class="small fw-semibold" style="font-size: 12px;">Puskesmas</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
<img src="<?php echo base_url('assets/img/sekolah.jpg'); ?>" class="list-img me-2" style="width: 50px; height: 40px; object-fit: cover;" alt="Gedung Sekolah">                                    <span class="small fw-semibold" style="font-size: 12px;">Gedung Sekolah</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
<img src="<?php echo base_url('assets/img/lapangan.jpg'); ?>" class="list-img me-2" style="width: 50px; height: 40px; object-fit: cover;" alt="Lapangan Olahraga">                                    <span class="small fw-semibold" style="font-size: 12px;">Lapangan Olahraga</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
<img src="<?php echo base_url('assets/img/polindes.jpg'); ?>" class="list-img me-2" style="width: 50px; height: 40px; object-fit: cover;" alt="Polindes">                                    <span class="small fw-semibold" style="font-size: 12px;">Polindes</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
<img src="<?php echo base_url('assets/img/masjid.jpg'); ?>" class="list-img me-2" style="width: 50px; height: 40px; object-fit: cover;" alt="Masjid Desa">                                    <span class="small fw-semibold" style="font-size: 12px;">Masjid Desa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom 4: Galeri -->
           <div class="col-md-6 col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0"><i class="fa-solid fa-images text-danger me-2"></i> Galeri</h5>
                <a href="<?php echo site_url('home/galeri'); ?>" class="text-decoration-none small fw-semibold">Lihat Semua</a>
            </div>

            <!-- Grid Thumbnail Galeri yang Terhubung Database -->
            <div class="row g-2">
                <?php if(!empty($galeri_beranda)) : ?>
                    <?php foreach($galeri_beranda as $g) : ?>
                    <div class="col-4 mb-2">
                        <a href="<?php echo site_url('home/galeri'); ?>">
                            <img src="<?php echo base_url('assets/upload/' . $g->gambar); ?>" class="rounded w-100 shadow-sm" style="height: 65px; object-fit: cover;" alt="<?php echo $g->judul; ?>">
                        </a>
                    </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="col-12 text-center text-muted small py-3">Belum ada foto galeri.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<!-- Bagian Beranda -->
<div class="container my-5">
    <h3 class="fw-bold text-dark mb-4">Lokasi Desa Rarongkeu</h3>
    
    <div class="row g-4">
        <!-- Kolom Peta -->
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <!-- Kode Iframe yang sudah diperbarui dengan koordinat Rarongkeu -->
                    <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15852.123456789!2d121.9!3d-4.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9e6...%3A0x!2sRarongkeu%2C+Kec.+Lantari+Jaya%2C+Kabupaten+Bombana%2C+Sulawesi+Tenggara!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        
        <!-- Kolom Informasi Tambahan / Sidebar -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-4 h-80">
                <h5 class="fw-bold mb-3">Tentang Wilayah</h5>
                <p class="text-muted small">
                    Desa Rarongkeu terletak di posisi strategis. Berikut adalah fasilitas utama di desa kami yang dapat dijangkau:
                </p>
                <ul class="list-unstyled small mb-4">
                    <li class="mb-2"><i class="fa-solid fa-school text-primary me-2"></i> Sekolah Dasar (SDN Rarongkeu)</li>
                    <li class="mb-2"><i class="fa-solid fa-house-chimney text-success me-2"></i> Kantor Desa Rarongkeu</li>
                    <li class="mb-2"><i class="fa-solid fa-tree text-success me-2"></i> Area Persawahan & Perkebunan</li>
                </ul>
                <a href="https://maps.app.goo.gl/kHPdH38Zv5Y8VGUR6" target="_blank" class="btn btn-outline-success btn-sm w-100">
                    <i class="fa-solid fa-location-arrow me-1"></i> Buka di Google Maps
                </a>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>

    <!-- 5. FOOTER BAWAH -->
    <footer class="footer-custom pt-5 pb-3">
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
                        <li class="mb-1"><a href="#" class="text-decoration-none">Beranda</a></li>
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

    <!-- Script Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>