<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Galeri - Admin Desa Rarongkeu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 512%22 fill=%22%23198754%22><path d=%22M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm224 32c70.7 0 128-57.3 128-128S390.7 0 320 0S192 57.3 192 128s57.3 128 128 128zM96 288c-53 0-96 43-96 96v32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32v-32c0-53-43-96-96-96H96zm328-32c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 128v32c0 17.7 14.3 32 32 32h144c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64h-80c-35.3 0-64 28.7-64 64z%22/></svg>">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' fill='%23198754'><path d='M256 0c37.8 0 74.5 8.5 108.4 24c25.4 11.8 45.4 31.8 57.2 57.2C435.5 114.5 444 151.2 444 189c0 145.4-82.6 270.8-203.4 319.4C237 511.4 246.5 512 256 512s19-.6 25.4-3.6C402.4 459.8 485 334.4 485 189c0-45.7-10.2-90.1-29-131C433.8 20.9 400.9 4 365 4H147c-35.9 0-68.8 16.9-91 54C37.2 98.9 27 143.3 27 189c0 145.4 82.6 270.8 203.4 319.4C237 511.4 246.5 512 256 512s19-.6 25.4-3.6C402.4 459.8 485 334.4 485 189c0-45.7-10.2-90.1-29-131C433.8 20.9 400.9 4 365 4H147c-35.9 0-68.8 16.9-91 54C37.2 98.9 27 143.3 27 189c0 145.4 82.6 270.8 203.4 319.4C237 511.4 246.5 512 256 512z'/></svg>">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-4 text-success"><i class="fa-solid fa-pen-to-square me-2"></i>Edit Galeri</h3>
                        
                        <?php echo form_open_multipart('admin/update_galeri/' . $galeri->id_galeri); ?>
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Judul Foto / Kegiatan</label>
                                <input type="text" name="judul" class="form-control" value="<?php echo $galeri->judul; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="Gotong Royong" <?php if($galeri->kategori == 'Gotong Royong') echo 'selected'; ?>>Gotong Royong</option>
                                    <option value="Kesehatan" <?php if($galeri->kategori == 'Kesehatan') echo 'selected'; ?>>Kesehatan</option>
                                    <option value="Pemerintahan" <?php if($galeri->kategori == 'Pemerintahan') echo 'selected'; ?>>Pemerintahan</option>
                                    <option value="Wilayah" <?php if($galeri->kategori == 'Wilayah') echo 'selected'; ?>>Wilayah</option>
                                    <option value="Ekonomi" <?php if($galeri->kategori == 'Ekonomi') echo 'selected'; ?>>Ekonomi</option>
                                    <option value="Pemuda & Olahraga" <?php if($galeri->kategori == 'Pemuda & Olahraga') echo 'selected'; ?>>Pemuda & Olahraga</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="4" ><?php echo $galeri->deskripsi; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Gambar Saat Ini</label>
                                <div class="mb-2">
                                    <?php if(!empty($galeri->gambar)): ?>
                                        <img src="<?php echo base_url('assets/upload/' . $galeri->gambar); ?>" alt="Preview" class="img-thumbnail" style="height: 120px;">
                                    <?php else: ?>
                                        <p class="text-muted small">Tidak ada gambar</p>
                                    <?php endif; ?>
                                </div>
                                <label class="form-label fw-semibold small text-muted">Ganti Gambar (Opsional)</label>
                                <input type="file" name="gambar" class="form-control">
                                <div class="form-text">Biarkan kosong jika tidak ingin mengubah gambar.</div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="<?php echo site_url('admin/galeri'); ?>" class="btn btn-secondary px-4">Kembali</a>
                                <button type="submit" class="btn btn-success px-4">Simpan Perubahan</button>
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