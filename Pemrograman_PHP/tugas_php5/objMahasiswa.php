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
    <script>
        $(document).ready(function() {
            $("#clear").click(function() {
                $("#nim").val("");
                $("#nama").val("");
                $("#kuliah").val("");
                $("#mata_kuliah").val("");
                $("#nilai").val("");
                // $("#result").hide();

                $("#result").fadeOut(500)
            });
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "$('#result').show();";
                require_once 'Mahasiswa.php';

                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $kuliah = $_POST['kuliah'];
                $mata_kuliah = $_POST['mata_kuliah'];
                $nilai = $_POST['nilai'];

                $ns1 = new Mahasiswa($nim, $nama, $kuliah, $mata_kuliah, $nilai);
            }
            ?>
        });
    </script>

    <div class="container">
        <h1 class="text-center my-4">Form Input Mahasiswa</h1>
        <div class="row">
            <div class="col">
                <form style="width: 80%;" action="objMahasiswa.php" method="post">
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

            <div class='col' style="display:none;" id="result">
                <div class='card border-success mb-3' style='max-width: 100%;'>
                    <div class='card-header text-bg-success border-success'><b>Result</b></div>
                    <div class='card-body text-success'>
                        <h5 class='card-title mb-3'><?php echo $ns1->nama ?></h5>

                        <div class='card mb-3' style='width: 80%;'>
                            <ul class='list-group list-group-flush'>
                                <li class='list-group-item'>NIM: <?php echo $ns1->nim; ?></li>
                                <li class='list-group-item'>Kuliah: <?php echo $ns1->kuliah; ?></li>
                                <li class='list-group-item'>Mata Kuliah: <?php echo $ns1->mata_kuliah; ?></li>
                                <li class='list-group-item'>Nilai: <?php echo $ns1->nilai; ?></li>
                                <li class='list-group-item'>Status: <?php echo $ns1->getStatus(); ?></li>
                                <li class='list-group-item'>Grade: <?php echo $ns1->getGrade(); ?></li>
                                <li class='list-group-item'>Grade: <?php echo $ns1->getPredikat(); ?></li>
                            </ul>
                        </div>

                        <p class='card-text'>Siswa atas nama <?php echo $ns1->nama; ?> Lulus dengan nilai <?php echo $ns1->nilai; ?> dengan predikat <b><?php echo $ns1->getPredikat(); ?></b> di mata-kuliah <?php echo $ns1->mata_kuliah; ?></p>
                    </div>

                    <button type="button" class="btn btn-success mb-3" style="width: 50%; margin-left: 25%;" id="clear">Clear</button>
                    <div class='card-footer bg-transparent border-success text-center text-secondary'>Copyright by @Muhammad Salsabil - 2024</div>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>