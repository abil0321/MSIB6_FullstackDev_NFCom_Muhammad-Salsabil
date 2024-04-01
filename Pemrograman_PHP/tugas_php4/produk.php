    <div class="container mx-5 mt-3 mb-5">
    <table class="table table-bordered border-black">
        <thead>
            <tr class="table-primary border border-black">
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = [
                ["nama" => "Deni", "nim" => "1011001", "nilai" => 75],
                ["nama" => "Nina", "nim" => "1011002", "nilai" => 85],
                ["nama" => "Budi", "nim" => "1011003", "nilai" => 90],
                ["nama" => "Rina", "nim" => "1011004", "nilai" => 50],
                ["nama" => "Jamal", "nim" => "1011001", "nilai" => 75],
                ["nama" => "Sumanto", "nim" => "1011002", "nilai" => 85],
                ["nama" => "Joko", "nim" => "1011003", "nilai" => 95],
                ["nama" => "Ratna", "nim" => "1011004", "nilai" => 50],
                ["nama" => "Gigih", "nim" => "1011004", "nilai" => 100],
                ["nama" => "Bono", "nim" => "1011005", "nilai" => 30]
            ];

            usort($students, function ($a, $b) {
                return $a['nilai'] < $b['nilai'] ? 1 : -1;
            });

            $i = 1;
            foreach ($students as $student) {
                $nilai = $student['nilai'];
                $keterangan = $nilai >= 65 ? "Lulus" : "Tidak Lulus";
                $grade = ($nilai >= 85) ? "A" : (($nilai >= 70) ? "B" : (($nilai >= 55) ? "C" : (($nilai >= 40) ? "D" : "E")));

                $predikat = match ($grade) {
                    "A" => "Memuaskan",
                    "B" => "Bagus",
                    "C" => "Cukup",
                    "D" => "Kurang",
                    default => "Buruk"
                };
                echo "<tr>
                        <td>$i</td>
                        <td>" . $student['nama'] . "</td>
                        <td>" . $student['nim'] . "</td>
                        <td>" . $student['nilai'] . "</td>
                        <td>" . $keterangan . "</td>
                        <td>" . $grade . "</td>
                        <td>" . $predikat . "</td>
                     </tr>";
                $i++;
            }
            ?>
        </tbody>
        <tfoot>
            <?php
            // Menggunakan fungsi array
            $nilai = array_column($students, 'nilai');
            $nilaiTertinggi = max($nilai);
            $nilaiTerendah = min($nilai);
            $nilaiRataRata = array_sum($nilai) / count($nilai);
            $jumlahMahasiswa = count($nilai);

            echo "
                <tr>
                    <td colspan='3' class='text-end'>Nilai Tertinggi</td>
                    <td colspan='4' class='text-center'>" . $nilaiTertinggi . "</td>
                    
                </tr>
                <tr>
                    <td colspan='3' class='text-end'>Nilai Terendah</td>
                    <td colspan='4' class='text-center'>" . $nilaiTerendah . "</td>
                    
                </tr>
                <tr>
                    <td colspan='3' class='text-end'>Nilai Rata-Rata</td>
                    <td colspan='4' class='text-center'>" . number_format($nilaiRataRata, 2) . "</td>
                    
                </tr>
               <tr>
                    <td colspan='3' class='text-end'>Jumlah Mahasiswa</td>
                    <td colspan='4' class='text-center'>" . $jumlahMahasiswa . "</td>
                    
                </tr>
                <tr>
                    <td colspan='3' class='text-end'>Jumlah Keseluruhan Nilai</td>
                    <td colspan='4' class='text-center'>" . array_sum($nilai) . "</td>
                    
                </tr>
            ";
            ?>
        </tfoot>
    </table>
    </div>
