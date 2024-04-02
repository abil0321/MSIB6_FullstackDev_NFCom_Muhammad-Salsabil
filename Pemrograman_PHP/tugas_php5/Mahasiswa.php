<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $kuliah;
    public $mata_kuliah;
    public $nilai;

    public function __construct($nim, $nama, $kuliah, $mata_kuliah, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;
    }

    public function getStatus()
    {
        if ($this->nilai >= 65) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }

    public function getGrade()
    {
        if ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 69) {
            return "C";
        } elseif ($this->nilai >= 60) {
            return "D";
        }
    }

    public function getPredikat()
    {
        if ($this->nilai >= 85) {
            return "Sangat Memuaskan";
        } elseif ($this->nilai >= 70) {
            return "Memuaskan";
        } elseif ($this->nilai >= 69) {
            return "Cukup";
        } elseif ($this->nilai >= 60) {
            return "Kurang";
        }
    }
}
