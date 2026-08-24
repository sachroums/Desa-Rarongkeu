<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarana Prasarana - Desakita Desa Rarongkeu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 512%22 fill=%22%23198754%22><path d=%22M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm224 32c70.7 0 128-57.3 128-128S390.7 0 320 0S192 57.3 192 128s57.3 128 128 128zM96 288c-53 0-96 43-96 96v32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32v-32c0-53-43-96-96-96H96zm328-32c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 128v32c0 17.7 14.3 32 32 32h144c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64h-80c-35.3 0-64 28.7-64 64z%22/></svg>">
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23198754'><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg>">    
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
            color: white;
            padding: 70px 0;
        }
        /* Layout Card Minimalis Tanpa Foto */
        .facility-icon-card {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .facility-icon-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 1rem 1.5rem rgba(0, 0, 0, 0.08);
            border-color: #198754;
        }
        /* Kotak Ikon Besar di dalam Card */
        .card-icon-box {
            width: 65px;
            height: 65px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 20px;
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

        /* ===== CSS RESPONSIF KHUSUS MOBILE (2 KOLOM, TANPA TEKS DESKRIPSI) ===== */
        @media (max-width: 768px) {
            .mobile-2-col {
                flex: 0 0 50% !important;
                max-width: 50% !important;
                padding-left: 6px !important;
                padding-right: 6px !important;
            }
            .container.my-5 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
                padding-left: 10px;
                padding-right: 10px;
            }
            .row.g-4 {
                --bs-gutter-x: 0.5rem;
                --bs-gutter-y: 0.5rem;
            }
            .facility-icon-card {
                padding: 48px !important;
                border-radius: 12px;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .facility-icon-card .badge {
                display: inline-block;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 8px;
            }

            .card-icon-box {
                width: 70px !important;
                height: 70px !important;
                font-size: 39px !important;
                border-radius: 40px;
                margin-bottom: 8px !important;
                margin-left: auto;
                margin-right: auto;
            }
            .facility-icon-card h5 {
                font-size: 13px !important;
                line-height: 1.25;
                margin-bottom: 8px !important;
            }
            .facility-icon-card p.mobile-desc,
            .facility-icon-card h5 {
                display: none !important;
            }
            .facility-icon-card a {
                font-size: 11px !important;
            }
            .page-header {
                padding: 40px 15px;
            }
            .page-header h1 {
                font-size: 22px;
            }
            .page-header p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body class="bg-light">

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

    <div class="container my-5">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6 mobile-2-col">
                <div class="card facility-icon-card h-100 p-4">
                    <div class="card-icon-box bg-success-subtle text-success">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <span class="badge bg-success-subtle text-success mb-2 px-2 py-1 small align-self-start">Fasilitas Umum</span>
                    <h5 class="fw-bold text-dark mb-2">Kantor/Balai Desa Rarongkeu</h5>
                    <p class="small text-muted mb-4 mobile-desc">Tempat pelaksanaan musyawarah desa, rapat warga, dan acara kemasyarakatan dan koordinasi pemerintahan desa sehari-hari.</p>
                    <div class="mt-auto">
                        <a href="<?php echo site_url('home/detail_sarana/1'); ?>" class="text-success small fw-semibold text-decoration-none">Lihat Detail <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mobile-2-col">
                <div class="card facility-icon-card h-100 p-4">
                    <div class="card-icon-box bg-primary-subtle text-primary">
                        <i class="fa-solid fa-house-medical"></i>
                    </div>
                    <span class="badge bg-primary-subtle text-primary mb-2 px-2 py-1 small align-self-start">Kesehatan</span>
                    <h5 class="fw-bold text-dark mb-2">Puskesmas Pembantu (Pustu)</h5>
                    <p class="small text-muted mb-4 mobile-desc">Fasilitas layanan kesehatan masyarakat dan posyandu terpadu desa.</p>
                    <div class="mt-auto">
                        <a href="<?php echo site_url('home/detail_sarana/2'); ?>" class="text-primary small fw-semibold text-decoration-none">Lihat Detail <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mobile-2-col">
                <div class="card facility-icon-card h-100 p-4">
                    <div class="card-icon-box bg-warning-subtle text-warning-emphasis">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <span class="badge bg-warning-subtle text-dark mb-2 px-2 py-1 small align-self-start">Pendidikan</span>
                    <h5 class="fw-bold text-dark mb-2">Gedung Sekolah Dasar</h5>
                    <p class="small text-muted mb-4 mobile-desc">Sarana pendidikan dasar bagi anak-anak usia sekolah di lingkungan desa.</p>
                    <div class="mt-auto">
                        <a href="<?php echo site_url('home/detail_sarana/3'); ?>" class="text-warning-emphasis small fw-semibold text-decoration-none">Lihat Detail <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mobile-2-col">
                <div class="card facility-icon-card h-100 p-4">
                    <div class="card-icon-box bg-info-subtle text-info-emphasis">
                        <i class="fa-solid fa-futbol"></i>
                    </div>
                    <span class="badge bg-info-subtle text-dark mb-2 px-2 py-1 small align-self-start">Olahraga</span>
                    <h5 class="fw-bold text-dark mb-2">Lapangan Olahraga Desa</h5>
                    <p class="small text-muted mb-4 mobile-desc">Area terbuka hijau untuk kegiatan olahraga, sepak bola, dan aktivitas pemuda.</p>
                    <div class="mt-auto">
                        <a href="<?php echo site_url('home/detail_sarana/4'); ?>" class="text-info-emphasis small fw-semibold text-decoration-none">Lihat Detail <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mobile-2-col">
                <div class="card facility-icon-card h-100 p-4">
                    <div class="card-icon-box bg-danger-subtle text-danger">
                        <i class="fa-solid fa-mosque"></i>
                    </div>
                    <span class="badge bg-danger-subtle text-danger mb-2 px-2 py-1 small align-self-start">Keagamaan</span>
                    <h5 class="fw-bold text-dark mb-2">Masjid & Sarana Ibadah</h5>
                    <p class="small text-muted mb-4 mobile-desc">Pusat kegiatan keagamaan dan pembinaan mental spiritual warga desa.</p>
                    <div class="mt-auto">
                        <a href="<?php echo site_url('home/detail_sarana/6'); ?>" class="text-danger small fw-semibold text-decoration-none">Lihat Detail <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-custom pt-5 pb-3">
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
                        <li class="mb-1"><a href="<?php echo site_url('home/profil'); ?>" class="text-decoration-none">Profil Desa</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/berita'); ?>" class="text-decoration-none">Berita</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/galeri'); ?>" class="text-decoration-none">Galeri</a></li>
                        <li class="mb-1"><a href="#" class="text-decoration-none">Sarana Prasarana</a></li>
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