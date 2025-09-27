<?php 

class Mahasiswa_model {
    private $mhs = [
        [
            "Nama" => "Tito Putra Bamulo",
            "NIM" => "2415354011",
            "Jurusan" => "Teknologi Informasi"
        ],
        [
            "Nama" => "Sesilia Dehar",
            "NIM" => "2415354033",
            "Jurusan" => "Menejemen Bisnis"
        ],
        [
            "Nama" => "Pramudya anantatoer",
            "NIM" => "2415354099",
            "Jurusan" => "Sastra Indonesia"
        ],
        ];

        public function getAllMahasiswa() {
            return $this->mhs;
        }
    }