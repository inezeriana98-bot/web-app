<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 500px;">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">{{ $judul }}</h3>
                <form action="/kalkulator/segitiga/proses" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Panjang Alas:</label>
                        <input type="number" step="any" name="alas" class="form-control" value="{{ $alas }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tinggi Segitiga:</label>
                        <input type="number" step="any" name="tinggi" class="form-control" value="{{ $tinggi }}" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">HITUNG LUAS</button>
                </form>
                <hr class="my-4">
                <h5 class="text-center">Hasil Luas Segitiga: <strong class="text-primary">{{ $luas }}</strong></h5>
            </div>
        </div>
    </div>
</body>
</html>