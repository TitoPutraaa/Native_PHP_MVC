<div class="container mt-3">
    <h1><?=$data['judul'] ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">Tambahkan Data Mahasiswa</button> <!-- modal button --> 
            <br><br>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <?= $mhs['Nama'];?>
                        </div>
                        <div>
                            <a href="<?=BASEURL;?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="badge text-bg-danger text-decoration-none ms-1" onclick="return confirm('yakin?')">Hapus</a>
                            <a href="<?=BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge text-bg-primary text-decoration-none ms-1">Detail</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="NIM" class="form-label">NIM</label>
                <input type="number" class="form-control" id="NIM" name="NIM" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                    <option value="" disabled selected></option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Ekonomi Bisnis">Ekonomi Bisnis</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Pariwisata">Pariwisata</option>
                </select>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>