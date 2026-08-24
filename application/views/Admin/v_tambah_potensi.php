<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Potensi Desa - Admin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-success text-white py-3">
                        <h5 class="mb-0 fw-bold"><i class="fa-solid fa-plus-circle me-2"></i>Tambah Data Potensi Desa</h5>
                    </div>
                    <div class="card-body p-4">
                        <?php echo form_open_multipart('admin/proses_tambah_potensi'); ?>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Potensi</label>
                                <input type="text" name="nama_potensi" class="form-control" placeholder="Contoh: Budidaya Ikan Air Tawar" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kategori Sektor</label>
                                <select name="kategori" class="form-select" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Pertanian">Pertanian</option>
                                    <option value="Perikanan">Perikanan</option>
                                    <option value="Peternakan">Peternakan</option>
                                    <option value="UMKM">UMKM / Kerajinan</option>
                                    <option value="Pariwisata">Pariwisata</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Deskripsi Lengkap</label>
                                <textarea name="deskripsi" class="form-control" rows="5" placeholder="Tuliskan detail informasi potensi desa..." required></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Foto Potensi</label>
                                <input type="file" name="foto" class="form-control" required>
                                <div class="form-text text-muted">Format yang diizinkan: jpg, jpeg, png, webp. Maksimal 2MB.</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="<?php echo site_url('admin/potensi'); ?>" class="btn btn-secondary px-4 rounded-pill">Kembali</a>
                                <button type="submit" class="btn btn-success px-4 rounded-pill">Simpan Potensi</button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>