<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="img rounded-circle overflow-hidden ms-lg-4" style="width : 500px; height : 500px;">
                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="100%">
            </div>

        </div>
        <div class="col-lg-6 mt-3 mt-lg-0">
            <p class="mb-3 fw-bold">Edit Profile</p>
            <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message'); ?>
                <?php unset($_SESSION['message']) ?>
            <?php endif; ?>
            <?= form_open_multipart('tutor/prosesEdit'); ?>
            <div class="data mb-5">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control rounded-pill mb-3" value="<?= $user['nama'] ?>" name="nama" id="nama">
                <div class="form-floating mb-3">
                    <textarea value="<?= $user['overview'] ?>" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="overview"><?= $user['overview'] ?></textarea>
                    <label for="floatingTextarea2">Overview kamu</label>
                    <?= form_error('deskripsi', '<small class="text-danger ms-3">', '</small>')  ?>

                </div>
                <div class="mb-3">
                    <label for="saweria">Username Saweria :</label>
                    <input type="text" class="form-control rounded-pill" value="<?= $user['saweria'] ?>" name="saweria" id="saweria">
                    <small class="ms-3">*Belum punya akun saweria? <a style="text-decoration : none;" href="https://saweria.co/register" target="_blank">Klik disini</a> untuk daftar</small>
                </div>
                <div class="mb-3">
                    <label class="" for="telepon">Nomor telepon :</label>
                    <div class="input-group ">
                        <div class="input-group-text" style="border-top-left-radius: 50rem;border-bottom-left-radius: 50rem;">+62</div>
                        <input style="border-top-right-radius: 50rem !important;border-bottom-right-radius: 50rem !important;" name="no_telepon" type="text" class="form-control rounded" id="telepon" placeholder="8XXXXXXX" value="<?= $user['no_telepon'] ?>">
                    </div>
                </div>
                <label for="nim">NIM :</label>
                <input type="text" class="form-control rounded-pill mb-3" value="<?= $user['nim'] ?>" name="nim" id="nim">
                <label for="email">Email :</label>
                <input type="text" class="form-control rounded-pill mb-3" value="<?= $user['email'] ?>" name="email" id="email" readonly>
                <div class="mb-3">
                    <label for="fakultas">Fakultas :</label>
                    <select class="form-select rounded-pill fakultas" name="fakultas">
                        <option disabled>Fakultas</option>
                        <?php foreach ($fakultas as $row) : ?>
                            <option value="<?= $row['fakultas'] ?>" <?php if ($row['fakultas'] == $user['fakultas']) {
                                                                        $fak = $row['fakultas_id'];
                                                                        echo 'selected';
                                                                    }  ?> data-id="<?= $row['fakultas_id'] ?>" name="fakultas" id="faks"><?= $row['fakultas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('fakultas', '<small class="text-danger ms-3">', '</small>')  ?>
                </div>
                <div class="mb-3">

                    <label for="jurusan">Jurusan :</label>
                    <select class="form-select rounded-pill jurusan" name="jurusan">
                        <?php foreach ($jurusan as $row) : ?>
                            <option value="<?= $row['jurusan'] ?>" <?php if (
                                                                        $row['jurusan'] == $user['jurusan']
                                                                    ) echo 'selected'; ?>><?= $row['jurusan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('jurusan', '<small class="text-danger ms-3">', '</small>')  ?>

                </div>
                <div class="mb-3">
                    <label for="pp">Foto profil :</label>
                    <input type="file" class="form-control rounded-pill mb-1" id="pp" name="pp">
                </div>

            </div>
            <div class="aksi">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <a onclick="window.location = '<?= base_url('tutor')  ?>'" class="btn btn-outline-primary">batal</a>
            </div>
        </div>
    </div>


</div>