<div class="container mt-4 pb-5">
    <div class="row">
        <div class="col-6 pt-5 mt-5">
            <img src="<?= base_url() ?>assets/img/registutor.png" alt="" class="pt-5 mt-5">

        </div>
        <div class="col-6">
            <h1 class="mb-5 tutory">Tutory</h1>
            <h1 class="mb-5"> Buat akun tutor</h1>
            <form action="" method="post">
                <div class="row mb-3">
                    <div class="col-7">
                        <input type="text" class="form-control rounded-pill" id="nama" name="nama" placeholder="Nama lengkap">
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control rounded-pill" id="nim" name="nim" placeholder="NIM">
                    </div>
                </div>
                <div class="mb-3">
                    <select class="form-select rounded-pill fakultas">
                        <option selected disabled>Fakultas</option>
                        <?php foreach ($fakultas as $row) : ?>
                            <option value="<?= $row['fakultas'] ?>" data-id="<?= $row['fakultas_id'] ?>" name="fakultas" id="faks"><?= $row['fakultas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select rounded-pill jurusan" name="jurusan">
                        <option selected disabled>Jurusan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <small style="font-size: .8em;" class="" for="fotoktm">Unggah foto KTM IPB kamu :</small>
                    <input type="file" class="form-control rounded-pill" id="fotoktm" placeholder="Foto KTM" name="ktm">
                </div>
                <div class="mb-3">
                    <select class="form-select rounded-pill" name="matkul">
                        <option selected disabled>Pilih mata kuliah yang mau di tutor</option>
                        <?php foreach ($matkul as $row) : ?>
                            <option value="<?= $row['matkul'] ?>"><?= $row['matkul'] ?>(<?= $row['kode_matkul'] ?>)</option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <small style="font-size: .8em;" class="" for="fotoktm">Unggah capture IP matkul yang kamu pilih :</small>
                    <input type="file" class="form-control rounded-pill" id="fotoip" placeholder="" name="fotoip">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control rounded-pill" id="email" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control rounded-pill" id="password" name="password1" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control rounded-pill" id="password" name="password2" placeholder="Ulangi Password">
                </div>
                <small class="" style="font-size: .8em;">Dengan membuat akun, anda menyetujui <a href="" class="text-primary" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#guide">syarat dan ketentuan tutory </a>
                </small><br>
                <button class="btn btn-primary mt-3 rounded-pill ">Buat akun</button>
            </form>
        </div>
    </div>
</div>