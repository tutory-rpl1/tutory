<div class="container mt-4 ">
    <div class="row">
        <div class="col-6 pt-5 mt-5">
            <img src="<?= base_url() ?>assets/img/regispelajar.png" alt="">

        </div>
        <div class="col-6">
            <h1 class="mb-5 tutory">Tutory</h1>
            <h1 class="mb-5">Buat akun pelajar</h1>
            <form action="<?= base_url() ?>Auth/regisPelajar" method="post">
                <div class="row mb-3">
                    <div class="col-7">
                        <input type="text" class="form-control rounded-pill" id="nama" name="nama" placeholder="Nama lengkap" value="<?= set_value('nama') ?>">
                        <?= form_error('nama', '<small class="text-danger ms-3">', '</small>')  ?>
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control rounded-pill" id="nim" name="nim" placeholder="NIM" value="<?= set_value('nim') ?>">
                        <?= form_error('nim', '<small class="text-danger ms-3">', '</small>')  ?>
                    </div>
                </div>

                <div class="mb-3">
                    <select class="form-select rounded-pill fakultas" name="fakultas">
                        <option selected disabled>Fakultas</option>
                        <?php foreach ($fakultas as $row) : ?>
                            <option value="<?= $row['fakultas'] ?>" data-id="<?= $row['fakultas_id'] ?>" name="fakultas" id="faks"><?= $row['fakultas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('fakultas', '<small class="text-danger ms-3">', '</small>')  ?>
                </div>
                <div class="mb-3">
                    <select class="form-select rounded-pill jurusan" name="jurusan">
                        <option selected disabled>Jurusan</option>
                    </select>
                    <?= form_error('jurusan', '<small class="text-danger ms-3">', '</small>')  ?>

                </div>
                <div class="mb-3">
                    <input type="text" class="form-control rounded-pill" id="email" name="email" placeholder="Email IPB" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger ms-3">', '</small>')  ?>

                </div>
                <div class="mb-3">
                    <input type="password" class="form-control rounded-pill" name="password1" placeholder="Password">
                    <small for="" class="ms-3" style="font-size: .8em;">*Gunakan password yang berbeda, jika email kamu sudah ada di akun tutor</small>
                    <?= form_error('password1', '<small class="text-danger ms-3">', '</small>')  ?>

                </div>
                <div class="mb-3">
                    <input type="password" class="form-control rounded-pill" name="password2" placeholder="Ulangi Password">

                </div>
                <small class="ms-3" style="font-size: .8em;">Dengan membuat akun, anda menyetujui <a href="" class="text-primary" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#guide">syarat dan ketentuan tutory </a>
                </small><br>
                <button class="btn btn-primary mt-3 rounded-pill " type="submit" name="regis">Buat akun</button>
            </form>
        </div>
    </div>
</div>