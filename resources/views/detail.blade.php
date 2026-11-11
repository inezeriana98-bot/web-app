<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm" style="max-width: 400px;">
            <div class="card-body">
                <h3 class="card-title text-capitalize">Detail Produk: {{ $namaItem }}</h3>[cite: 1]
                <p class="card-text fs-5">Harga: <strong>Rp {{ $harga }}</strong></p>[cite: 1]
                <a href="/product" class="btn btn-primary btn-sm">Kembali ke Produk</a>
            </div>
        </div>
    </div>
</body>
</html>