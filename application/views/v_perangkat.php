<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Desa - Desakita Desa Rarongkeu</title>
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

        /* ===== CSS STRUKTUR BAGAN ===== */
        .org-container {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            padding: 30px 10px;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
        }

        .org-chart, .org-chart ul, .org-chart li {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .org-chart {
            display: inline-block;
            min-width: 100%;
        }

        .org-chart ul {
            display: flex;
            justify-content: center;
            position: relative;
            padding-top: 20px;
        }

        .org-chart li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 10px 0 10px;
        }

        /* Garis penghubung antar kotak */
        .org-chart li::before, .org-chart li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 2px solid #198754;
            width: 50%;
            height: 20px;
        }

        .org-chart li::after {
            right: auto;
            left: 50%;
            border-left: 2px solid #198754;
        }

        .org-chart li:only-child::after, .org-chart li:only-child::before {
            display: none;
        }

        .org-chart li:only-child {
            padding-top: 0;
        }

        .org-chart li:first-child::before, .org-chart li:last-child::after {
            border: 0;
        }

        .org-chart li:last-child::before {
            border-right: 2px solid #198754;
            border-radius: 0 5px 0 0;
        }

        .org-chart li:first-child::after {
            border-radius: 5px 0 0 0;
        }

        .org-chart ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 2px solid #198754;
            width: 0;
            height: 20px;
        }

        /* Kartu / Kotak Bagan (Default Desktop) */
        .org-card {
            display: inline-block;
            background: #ffffff;
            border: 2px solid #198754;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            width: 175px;
            text-align: center;
            overflow: hidden;
            position: relative;
            z-index: 10;
            transition: all 0.3s ease;
            margin: 0 auto;
            padding: 12px 6px;
        }

        .org-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            border-color: #146c43;
        }

        .org-card img {
            width: 55px;
            height: 55px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 6px;
            border: 2px solid #d4edda;
        }

        .org-card h6 {
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 4px;
            color: #198754;
            text-transform: uppercase;
        }

        .org-card p {
            font-size: 11px;
            color: #333333;
            margin-bottom: 0;
            font-weight: 600;
            word-wrap: break-word;
        }

        .org-card.kades {
            border-color: #146c43;
            background-color: #f8fff9;
            width: 190px;
        }
        .org-card.kasi {
            border-color: #0d6efd;
        }
        .org-card.kasi h6 {
            color: #0d6efd;
        }
        .org-card.dusun {
            border-color: #d63384;
        }
        .org-card.dusun h6 {
            color: #d63384;
        }

        /* ===== KHUSUS TAMPILAN MOBILE (HP) ===== */
        @media (max-width: 768px) {
            .org-card {
                width: 115px !important;
                padding: 8px 4px !important;
            }
            .org-card.kades {
                width: 130px !important;
            }
            .org-card img {
                width: 38px !important;
                height: 38px !important;
                margin-bottom: 4px !important;
            }
            .org-card h6 {
                font-size: 8.5px !important;
                margin-bottom: 2px !important;
            }
            .org-card p {
                font-size: 8.5px !important;
            }
            .org-chart li {
                padding: 15px 4px 0 4px !important;
            }
            .org-chart ul {
                padding-top: 15px !important;
            }
            .org-chart li::before, .org-chart li::after {
                height: 15px !important;
            }
            .org-chart ul ul::before {
                height: 15px !important;
            }

            /* Penyesuaian Modal Rincian agar pas di layar HP */
            .modal-dialog {
                margin: 0.5rem;
            }
            .modal-body {
                padding: 12px !important;
            }
            .modal-title {
                font-size: 14px !important;
            }
            .table-responsive table {
                font-size: 11px !important;
            }
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

    <!-- KONTEN UTAMA -->
    <div class="container my-5">
        <div class="mb-4">
            <div class="text-muted small mb-1">Beranda &gt; Perangkat Desa</div>
            <h2 class="fw-bold text-dark">Perangkat Desa</h2>
            <p class="text-muted small">Struktur organisasi dan perangkat Desa Rarongkeu.</p>
        </div>

        <!-- BAGAN STRUKTUR ORGANISASI -->
        <div class="card shadow-sm p-3 bg-white border-0" style="border-radius: 16px;">
            <div class="org-container">
                <div class="org-chart">
                    
                    <?php 
                    $kades = null;
                    $sekdes = null;
                    $kaur = [];
                    $kasi = [];
                    $dusun = [];

                    if(!empty($perangkat)) {
                        foreach($perangkat as $p) {
                            $j = strtolower($p->jabatan);
                            if(strpos($j, 'kepala desa') !== false && $kades === null) {
                                $kades = $p;
                            } elseif(strpos($j, 'sekretaris') !== false) {
                                $sekdes = $p;
                            } elseif(strpos($j, 'kaur') !== false || strpos($j, 'umum') !== false || strpos($j, 'keuangan') !== false) {
                                $kaur[] = $p;
                            } elseif(strpos($j, 'kasi') !== false || strpos($j, 'seksi') !== false) {
                                $kasi[] = $p;
                            } elseif(strpos($j, 'dusun') !== false) {
                                $dusun[] = $p;
                            }
                        }
                    }
                    ?>

                    <ul>
                        <li>
                            <!-- KEPALA DESA (PUNCAK) -->
                            <?php if($kades): ?>
                            <div class="org-card kades">
                                <img src="<?php echo base_url('assets/upload/' . (!empty($kades->foto) ? $kades->foto : 'default.png')); ?>" alt="<?php echo $kades->nama; ?>">
                                <h6><?php echo $kades->jabatan; ?></h6>
                                <p><?php echo $kades->nama; ?></p>
                            </div>
                            <?php endif; ?>
                            
                            <ul>
                                <!-- CABANG KIRI: KUMPULAN KEPALA SEKSI (KASI) -->
                                <?php if(!empty($kasi)): ?>
                                <li>
                                    <div class="org-card kasi">
                                        <img src="<?php echo base_url('assets/upload/' . (!empty($kasi[0]->foto) ? $kasi[0]->foto : 'default.png')); ?>" alt="<?php echo $kasi[0]->nama; ?>">
                                        <h6><?php echo $kasi[0]->jabatan; ?></h6>
                                        <p><?php echo $kasi[0]->nama; ?></p>
                                    </div>
                                    
                                    <?php if(count($kasi) > 1): ?>
                                    <ul>
                                        <?php for($i = 1; $i < count($kasi); $i++): ?>
                                        <li>
                                            <div class="org-card kasi">
                                                <img src="<?php echo base_url('assets/upload/' . (!empty($kasi[$i]->foto) ? $kasi[$i]->foto : 'default.png')); ?>" alt="<?php echo $kasi[$i]->nama; ?>">
                                                <h6><?php echo $kasi[$i]->jabatan; ?></h6>
                                                <p><?php echo $kasi[$i]->nama; ?></p>
                                            </div>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                                <?php endif; ?>

                                <!-- CABANG KANAN: SEKRETARIS DESA & KAUR DI BAWAHNYA -->
                                <?php if($sekdes): ?>
                                <li>
                                    <div class="org-card">
                                        <img src="<?php echo base_url('assets/upload/' . (!empty($sekdes->foto) ? $sekdes->foto : 'default.png')); ?>" alt="<?php echo $sekdes->nama; ?>">
                                        <h6><?php echo $sekdes->jabatan; ?></h6>
                                        <p><?php echo $sekdes->nama; ?></p>
                                    </div>
                                    
                                    <?php if(!empty($kaur)): ?>
                                    <ul>
                                        <?php foreach($kaur as $kr): ?>
                                        <li>
                                            <div class="org-card">
                                                <img src="<?php echo base_url('assets/upload/' . (!empty($kr->foto) ? $kr->foto : 'default.png')); ?>" alt="<?php echo $kr->nama; ?>">
                                                <h6><?php echo $kr->jabatan; ?></h6>
                                                <p><?php echo $kr->nama; ?></p>
                                            </div>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                                <?php endif; ?>

                            </ul>

                            <!-- KEPALA DUSUN DI POSISI PALING BAWAH DENGAN GARIS SILSILAH RESMI -->
                            <?php if(!empty($dusun)): ?>
                            <ul style="margin-top: 10px;">
                                <li>
                                    <div class="text-center text-success fw-bold mb-2" style="font-size: 11px; text-transform: uppercase;">
                                        <i class="fa-solid fa-map-location-dot me-1"></i> Kepala Kewilayahan / Dusun
                                    </div>
                                    <ul>
                                        <?php foreach($dusun as $ds): ?>
                                        <li>
                                            <div class="org-card dusun">
                                                <img src="<?php echo base_url('assets/upload/' . (!empty($ds->foto) ? $ds->foto : 'default.png')); ?>" alt="<?php echo $ds->nama; ?>">
                                                <h6><?php echo $ds->jabatan; ?></h6>
                                                <p><?php echo $ds->nama; ?></p>
                                            </div>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                            <?php endif; ?>

                        </li>
                    </ul>

                    <?php if(empty($kades) && empty($sekdes) && empty($kasi) && empty($dusun)): ?>
                        <div class="text-muted text-center py-4">Belum ada data perangkat desa yang dimasukkan melalui halaman admin.</div>
                    <?php endif; ?>

                </div>
            </div>

            <!-- Tombol Lihat Struktur Lengkap -->
            <div class="text-center mt-4">
                <button type="button" class="btn text-white px-4 py-2" data-bs-toggle="modal" data-bs-target="#modalStrukturLengkap" style="background-color: #2e6930; border-radius: 8px; font-size: 14px;">
                    Lihat Struktur Lengkap
                </button>
            </div>
        </div>
    </div>
    
    <!-- MODAL STRUKTUR LENGKAP -->
    <div class="modal fade" id="modalStrukturLengkap" tabindex="-1" aria-labelledby="modalStrukturLengkapLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0 shadow" style="border-radius: 16px;">
                <div class="modal-header bg-success text-white py-3">
                    <h5 class="modal-title fw-bold fs-6" id="modalStrukturLengkapLabel"><i class="fa-solid fa-sitemap me-2"></i>Rincian Struktur & Tugas Perangkat Desa Rarongkeu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3">
                    <div class="alert alert-success small mb-3 py-2">
                        <i class="fa-solid fa-circle-info me-1"></i> Berikut adalah daftar lengkap perangkat Desa Rarongkeu beserta jabatan dan rincian tugas pokoknya.
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-sm align-middle">
                            <thead class="table-success text-center">
                                <tr>
                                    <th style="width: 8%;">No</th>
                                    <th style="width: 37%;">Nama & Jabatan</th>
                                    <th style="width: 55%;">Uraian Tugas Utama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($perangkat)): ?>
                                    <?php $no=1; foreach($perangkat as $p): ?>
                                    <tr>
                                        <td class="text-center fw-bold"><?php echo $no++; ?></td>
                                        <td>
                                            <strong><?php echo $p->nama; ?></strong><br>
                                            <span class="badge bg-success text-white mt-1" style="font-size: 9px;"><?php echo $p->jabatan; ?></span>
                                        </td>
                                        <td>
                                            <?php echo !empty($p->tugas) ? $p->tugas : '<span class="text-muted fst-italic">Belum ada uraian tugas.</span>'; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="3" class="text-center text-muted py-3">Belum ada data tersedia.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer bg-light py-2">
                    <button type="button" class="btn btn-secondary btn-sm px-4" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
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
                        <li class="mb-1"><a href="<?php echo site_url('home/sarana'); ?>" class="text-decoration-none">Sarana Prasarana</a></li>
                        <li class="mb-1"><a href="#" class="text-decoration-none">Perangkat Desa</a></li>
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