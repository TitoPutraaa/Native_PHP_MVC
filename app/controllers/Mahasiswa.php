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

    public function detail($id) {
        $data['judul'] = 'Detail Mahasiswa';
        $data['section'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

        $this->views('tamplates/header.php', $data);
        $this->views('mahasiswa/detail.php', $data);
        $this->views('tamplates/footer.php', $data);
    }

    public function tambah() {
        if ($this->model("Mahasiswa_model") -> tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlasher('Berhasil', 'ditambahkan', 'success');
            header("Location: ". BASEURL . "/mahasiswa");
            exit;
        } else {
            Flasher::setFlasher('Gagal', 'ditambahkan', 'danger');
        }
    }

    public function hapus($id) {
        if ($this->model("Mahasiswa_model") -> hapusDataMahasiswa($id) > 0) {
            Flasher::setFlasher('Berhasil', 'dihapus', 'success');
            header("Location: ". BASEURL . "/mahasiswa");
            exit;
        } else {
            Flasher::setFlasher('Gagal', 'dihapus', 'danger');
        }
    }
}