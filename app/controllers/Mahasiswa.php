<?php 
class Mahasiswa extends Controller{
    public function index() {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['section'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->views('tamplates/header.php', $data);
        $this->views('mahasiswa/index.php', $data);
        $this->views('tamplates/footer.php', $data);
    }
}