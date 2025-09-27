<?php 

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "Nama" => "Tito Putra Bamulo",
    //         "NIM" => "2415354011",
    //         "Jurusan" => "Teknologi Informasi"
    //     ],
    //     [
    //         "Nama" => "Sesilia Dehar",
    //         "NIM" => "2415354033",
    //         "Jurusan" => "Menejemen Bisnis"
    //     ],
    //     [
    //         "Nama" => "Pramudya anantatoer",
    //         "NIM" => "2415354099",
    //         "Jurusan" => "Sastra Indonesia"
    //     ],
    //     ];

    private $dbh;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=MVC';

        try {
            $this->dbh = new PDO($dsn,'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

        public function getAllMahasiswa() {
            $this->stmt = $this->dbh->prepare('SELECT * FROM Mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll();
        }
    }