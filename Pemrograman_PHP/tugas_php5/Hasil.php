<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <script>
        $(document).ready(function() {
            $("#clear").click(function() {
                $("#nim").val("");
                $("#nama").val("");
                $("#kuliah").val("");
                $("#mata_kuliah").val("");
                $("#nilai").val("");
                $("#result").hide();
            });
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "$('#result').fadeIn(500);";
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
        <h1 class="text-center my-4">Nilai Mahasiswa</h1>

        <div class="row" style="display:none;" id="result">
            <div class="col">
            <a href="objMahasiswa.php" type="button" class="btn btn-primary mb-3" style="width: 15%; margin-left: 0;" id="back"><< Back</a>

            <table class="table table-bordered border-success">
                            <thead class="table-dark">
                                <tr style="color: white;">
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kuliah</th>
                                    <th scope="col">Mata Kuliah</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Predikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"><?php echo $ns1->nim ?></td>
                                    <td><?php echo $ns1->nama ?></td>
                                    <td><?php echo $ns1->kuliah ?></td>
                                    <td><?php echo $ns1->mata_kuliah ?></td>
                                    <td><?php echo $ns1->nilai ?></td>
                                    <td><?php echo $ns1->getStatus() ?></td>
                                    <td><?php echo $ns1->getGrade() ?></td>
                                    <td><?php echo $ns1->getPredikat() ?></td>
                                </tr>
                            </tbody>
                        </table>
            </div>
        </div>

        <div class="row">
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
                                <li class='list-group-item'>Predikat: <?php echo $ns1->getPredikat(); ?></li>
                            </ul>
                        </div>

                        <p class='card-text'>"<i>atas nama <?php echo $ns1->nama; ?> Lulus dengan nilai <?php echo $ns1->nilai; ?> dengan grade <b><?php echo $ns1->getGrade(); ?></b> di mata-kuliah <?php echo $ns1->mata_kuliah; ?></i>"</p>
                    </div>

                    <!-- <a href="objMahasiswa.php" type="button" class="btn btn-success mb-3" style="width: 50%; margin-left: 25%;" id="back">Back</a> -->
                    <div class='card-footer bg-transparent border-success text-center text-secondary'>Copyright by @Muhammad Salsabil - 2024</div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>