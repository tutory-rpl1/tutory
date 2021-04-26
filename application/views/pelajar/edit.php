<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="img rounded-circle overflow-hidden ms-lg-4" style="width : 500px; height : 500px;">
                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="100%">
            </div>

        </div>
        <div class="col-lg-6 mt-3 mt-lg-0">
            <p class="mb-3 fw-bold">Edit Profile</p>
            <?= form_open_multipart('pelajar/prosesEdit'); ?>
            <div class="data mb-5">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control rounded-pill mb-3" value="<?= $user['nama'] ?>" name="nama" id="nama">
                <label for="nim">NIM :</label>
                <input type="text" class="form-control rounded-pill mb-3" value="<?= $user['nim'] ?>" name="nim" id="nim">
                <label for="email">Email :</label>
                <input type="text" class="form-control rounded-pill mb-3" value="<?= $user['email'] ?>" name="email" id="email" readonly>
                <div class="mb-3">
                    <label for="fakultas">Fakultas :</label>
                    <select class="form-select rounded-pill fakultas" name="fakultas">
                        <option disabled>Fakultas</option>
                        <?php foreach ($fakultas as $row) : ?>
                            <option value="<?= $row['fakultas'] ?>" <?php if ($row['fakultas'] == $user['fakultas']) echo 'selected'; ?> data-id="<?= $row['fakultas_id'] ?>" name="fakultas" id="faks"><?= $row['fakultas'] ?></option>
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
                <button onclick="window.location = '<?= base_url('pelajar/profile')  ?>'" class="btn btn-outline-primary">batal</button>
            </div>
            </form>
        </div>
    </div>


</div>