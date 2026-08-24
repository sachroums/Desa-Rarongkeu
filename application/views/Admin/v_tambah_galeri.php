<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Galeri - Admin Desa Rarongkeu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-4 text-success"><i class="fa-solid fa-images me-2"></i>Tambah Galeri Baru</h3>
                        
                        <?php echo form_open_multipart('admin/proses_tambah_galeri'); ?>
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Judul Foto / Kegiatan</label>
                                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul foto..." required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="" disabled selected>-- Pilih Kategori Galeri --</option>
                                    <option value="Gotong Royong">Gotong Royong</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                    <option value="Pemerintahan">Pemerintahan</option>
                                    <option value="Wilayah">Wilayah</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Pemuda & Olahraga">Pemuda & Olahraga</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="4" placeholder="Tulis deskripsi singkat..." required></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">File Gambar</label>
                                <input type="file" name="gambar" class="form-control" required>
                                <div class="form-text text-muted">Format yang diizinkan: jpg, jpeg, png</div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="<?php echo site_url('admin/galeri'); ?>" class="btn btn-secondary px-4">
                                    <i class="fa-solid fa-arrow-left me-1"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-success px-4">
                                    <i class="fa-solid fa-save me-1"></i> Simpan Galeri
                                </button>
                            </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>