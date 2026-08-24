<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Desa Rarongkeu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 640 512%22 fill=%22%23198754%22><path d=%22M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm224 32c70.7 0 128-57.3 128-128S390.7 0 320 0S192 57.3 192 128s57.3 128 128 128zM96 288c-53 0-96 43-96 96v32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32v-32c0-53-43-96-96-96H96zm328-32c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 128v32c0 17.7 14.3 32 32 32h144c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64h-80c-35.3 0-64 28.7-64 64z%22/></svg>">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' fill='%23198754'><path d='M256 0c37.8 0 74.5 8.5 108.4 24c25.4 11.8 45.4 31.8 57.2 57.2C435.5 114.5 444 151.2 444 189c0 145.4-82.6 270.8-203.4 319.4C237 511.4 246.5 512 256 512s19-.6 25.4-3.6C402.4 459.8 485 334.4 485 189c0-45.7-10.2-90.1-29-131C433.8 20.9 400.9 4 365 4H147c-35.9 0-68.8 16.9-91 54C37.2 98.9 27 143.3 27 189c0 145.4 82.6 270.8 203.4 319.4C237 511.4 246.5 512 256 512s19-.6 25.4-3.6C402.4 459.8 485 334.4 485 189c0-45.7-10.2-90.1-29-131C433.8 20.9 400.9 4 365 4H147c-35.9 0-68.8 16.9-91 54C37.2 98.9 27 143.3 27 189c0 145.4 82.6 270.8 203.4 319.4C237 511.4 246.5 512 256 512z'/></svg>">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow border-0 rounded-4 p-4">
                    <div class="text-center mb-4">
                        <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-2" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-user-shield fs-4"></i>
                        </div>
                        <h4 class="fw-bold text-dark">Login Admin</h4>
                        <p class="text-muted small">Silakan login untuk mengelola website</p>
                    </div>

                    <!-- Form Login -->
                        <form action="<?php echo site_url('auth/proses_login'); ?>" method="POST">
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Username</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fa-solid fa-user text-muted"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-bold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fa-solid fa-lock text-muted"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100 py-2 fw-semibold shadow-sm">
                            <i class="fa-solid fa-right-to-bracket me-1"></i> Masuk
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="<?php echo site_url('home'); ?>" class="text-decoration-none small text-muted">
                            <i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>