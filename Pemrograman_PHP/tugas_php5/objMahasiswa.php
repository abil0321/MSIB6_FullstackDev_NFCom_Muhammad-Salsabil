<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="px-5">

    <div class="container">
        <h1 class="text-center my-4">Form Nilai Mahasiswa</h1>
        <div class="row">
            <div class="col">
                <form style="width: 80%;" action="Hasil.php" method="post">
                    <div class="form-group mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input class="form-control" type="text" name="nim" id="nim" required aria-describedby="nimHelp">
                        <div id="nimHelp" class="form-text">We'll never share your NIM with anyone else.</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input class="form-control" type="text" name="nama" id="nama" required aria-describedby="namaHelp">
                        <div id="namaHelp" class="form-text">Masukkan nama mu.</div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="kuliah">Kuliah:</label>
                        <select name="kuliah" id="kuliah" class="form-control" required>
                            <option value="">-- Pilih Kuliah --</option>
                            <option value="Universitas Pancen Oye">Universitas Pancen Oye</option>
                            <option value="Institute Cap Kaki Tiga">Institute Cap Kaki Tiga</option>
                            <option value="Sekolah Tinggi Pegal Linu">Sekolah Tinggi Pegal Linu</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="mata_kuliah">Mata Kuliah:</label>
                        <select name="mata_kuliah" id="mata_kuliah" class="form-control" required>
                            <option value="">-- Pilih Mata Kuliah --</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <input class="form-control" type="number" name="nilai" id="nilai" required aria-describedby="nilaiHelp">
                        <div id="nilaiHelp" class="form-text">Masukkan nilai mu.</div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>