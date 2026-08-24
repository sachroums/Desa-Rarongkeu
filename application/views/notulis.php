<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Desa - Desakita Desa Rarongkeu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
            color: white;
            padding: 70px 0;
        }
        .gallery-card {
            border: none;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        .gallery-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 1.5rem rgba(0, 0, 0, 0.1);
        }
        .gallery-img {
            height: 220px;
            object-fit: cover;
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
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/profil'); ?>">Profil Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/berita'); ?>">Berita</a></li>
                    <li class="nav-item"><a class="nav-link active fw-semibold text-success" href="<?php echo site_url('home/galeri'); ?>">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/sarana'); ?>">Sarana Prasarana</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/perangkat'); ?>">Perangkat Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/potensi'); ?>">Potensi Desa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row g-4">
            
            <?php foreach($galeri as $g) : ?>
            <div class="col-md-4 col-sm-6">
                <div class="card gallery-card h-100 bg-white">
                    <img src="<?php echo base_url('assets/uploads/' . $g->gambar); ?>" class="card-img-top gallery-img" alt="<?php echo $g->judul; ?>">
                    <div class="card-body">
                        <span class="badge bg-success-subtle text-success mb-2 px-2 py-1 small"><?php echo $g->kategori; ?></span>
                        <h6 class="fw-bold text-dark mb-1"><?php echo $g->judul; ?></h6>
                        <p class="small text-muted mb-0"><?php echo $g->deskripsi; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>

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
                        <li class="mb-1"><a href="<?php echo site_url('home/profil'); ?>" class="text-decoration-none">Profil Desa</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/berita'); ?>" class="text-decoration-none">Berita</a></li>
                        <li class="mb-1"><a href="#" class="text-decoration-none">Galeri</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/sarana'); ?>" class="text-decoration-none">Sarana Prasarana</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/perangkat'); ?>" class="text-decoration-none">Perangkat Desa</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/potensi'); ?>" class="text-decoration-none">Potensi Desa</a></li>
                        <li class="mb-1"><a href="<?php echo site_url('home/peta'); ?>" class="text-decoration-none">Peta Desa</a></li>
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