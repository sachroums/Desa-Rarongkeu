<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa - Desakita Desa Rarongkeu</title>
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
        .main-card {
            border: none;
            border-radius: 14px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        }
        .vision-mission-box {
            background-color: #f8f9fa;
            border-left: 4px solid #0d6efd;
            padding: 15px 20px;
            border-radius: 0 8px 8px 0;
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
                    <li class="nav-item"><a class="nav-link active fw-semibold text-success" href="<?php echo site_url('home/profil'); ?>">Profil Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/berita'); ?>">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/galeri'); ?>">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/sarana'); ?>">Sarana Prasarana</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/perangkat'); ?>">Perangkat Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/potensi'); ?>">Potensi Desa</a></li>                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row g-4">
            
            <div class="col-lg-8">
                <div class="card main-card p-4 mb-4">
                    <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-book-open text-primary me-2"></i> Sejarah Desa Rarongkeu</h4>
                    <p class="text-secondary" style="line-height: 1.7;">
                        Desa Rarongkeu merupakan salah satu wilayah pedesaan yang memiliki akar sejarah kebersamaan dan gotong royong yang kuat di antara masyarakatnya. Berawal dari pembukaan lahan perkebunan dan permukiman rintisan oleh para leluhur pendiri, kawasan ini secara bertahap terus berkembang menjadi sebuah desa yang definitif dan mandiri.
                    </p>
                    <p class="text-secondary mb-0" style="line-height: 1.7;">
                        Dalam perjalanannya, roda pemerintahan dan pembangunan di Desa Rarongkeu terus beradaptasi dengan kemajuan zaman, termasuk menginisiasi transparansi informasi dan pelayanan publik berbasis digital demi kesejahteraan seluruh warga.
                    </p>
                </div>

                <div class="card main-card p-4">
                    <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-map-location-dot text-success me-2"></i> Batas Wilayah Desa</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 align-middle">
                            <tbody>
                                <tr>
                                    <td class="fw-semibold bg-light" style="width: 30%;">Sebelah Utara</td>
                                    <td class="text-secondary">Berbatasan dengan Wilayah Desa / Kecamatan Sebelah Utara</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold bg-light">Sebelah Selatan</td>
                                    <td class="text-secondary">Berbatasan dengan Wilayah Desa / Kecamatan Sebelah Selatan</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold bg-light">Sebelah Barat</td>
                                    <td class="text-secondary">Berbatasan dengan Wilayah Desa / Kecamatan Sebelah Barat</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold bg-light">Sebelah Timur</td>
                                    <td class="text-secondary">Berbatasan dengan Wilayah Desa / Kecamatan Sebelah Timur</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card main-card p-4 mb-4">
                    <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-bullseye text-danger me-2"></i> Visi & Misi</h5>
                    
                    <div class="mb-3">
                        <h6 class="fw-bold text-primary mb-2">Visi Desa:</h6>
                        <div class="vision-mission-box">
                            <p class="small mb-0 text-dark fst-italic">"Terwujudnya Desa Rarongkeu yang Maju, Mandiri, Sejahtera, dan Transparan Berbasis Pelayanan Publik Digital."</p>
                        </div>
                    </div>

                    <div>
                        <h6 class="fw-bold text-primary mb-2">Misi Desa:</h6>
                        <ul class="small text-secondary ps-3 mb-0" style="line-height: 1.6;">
                            <li class="mb-1">Meningkatkan kualitas tata kelola pemerintahan desa yang bersih, transparan, dan akuntabel.</li>
                            <li class="mb-1">Mengembangkan sarana prasarana infrastruktur dasar yang merata.</li>
                            <li class="mb-1">Mengoptimalkan potensi ekonomi lokal melalui pengembangan produk UMKM desa.</li>
                            <li>Meningkatkan kualitas pelayanan kesehatan, pendidikan, dan kehidupan sosial masyarakat.</li>
                        </ul>
                    </div>
                </div>

                <div class="card main-card p-4 bg-primary text-white">
                    <h5 class="fw-bold mb-3"><i class="fa-solid fa-circle-info me-2"></i> Informasi Singkat</h5>
                    <ul class="list-unstyled small mb-0" style="line-height: 1.9;">
                        <li><i class="fa-solid fa-location-dot me-2"></i> Kabupaten: Konawe / Wilayah Terkait</li>
                        <li><i class="fa-solid fa-map-pin me-2"></i> Provinsi: Sulawesi Tenggara</li>
                        <li><i class="fa-solid fa-users me-2"></i> Jumlah Penduduk: ± 1.200 Jiwa</li>
                        <li><i class="fa-solid fa-seedling me-2"></i> Sektor Utama: Pertanian & Perkebunan</li>
                    </ul>
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
                        <li class="mb-1"><a href="<?php echo site_url('home'); ?>" class="text-decoration-none">Beranda</a></li>
                        <li class="mb-1"><a href="#" class="text-decoration-none">Profil Desa</a></li>
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
