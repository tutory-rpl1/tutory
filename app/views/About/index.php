<div class="container">
    <div class="row mt-3">
        <div class="col-lg-6">
        <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal" >
              Tambah data mahasiswa
        </button>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari mahasiswa.." name="keyword" id="keyword"autocomplete="off">
            <button class="btn btn-primary" type="submit" >Cari</button>
          </div>
        </form>
      </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-lg-6">
            <h3 class="mt-3">Daftar Mahasiswa</h3>
                <ul class="list-group">
                <?php if($data['mhs'] == []) : ?>
                   <p style="font-style:italic"> - Tidak ada data yang cocok - </p>
                <?php endif ; ?>

               <?php foreach($data['mhs'] as $mhs): ?>
        
                    <li class="list-group-item"><?= $mhs['nama'] ?>
                        <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id'] ?>"class="badge bg-danger float-end ms-1" onclick="return confirm('Yakin ?');">hapus</a>
                        <a href="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs['id'] ?>"class="badge bg-success float-end ms-1 modalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>"class="badge bg-primary float-end ms-1" >Detail</a>
                    </li>

                <?php endforeach; ?>
                </ul>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post"> 
         <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                <option selected>pilih jurusan</option>
                <option value="Ilmu Komputer">Ilmu Komputer</option>
                <option value="Biologi">Biologi</option>
                <option value="Matematika">Matematika</option>
                <option value="Agroteknologi">Agroteknologi</option>
                <option value="Kehutanan">Kehutanan</option>
                <option value="Manajemen">Manajemen</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>