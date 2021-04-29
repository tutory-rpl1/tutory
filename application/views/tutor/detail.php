<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="img rounded-circle overflow-hidden ms-lg-4" style="width : 500px; height : 500px;">
                <img src="<?= base_url('assets/img/profile/') . $tutor['image'] ?>" alt="" width="100%">
            </div>
        </div>
        <div class="col-lg-6">
            <?php if ($this->session->userdata('role_id') == 2) : ?>
                <p>My Profile</p>
            <?php endif; ?>
            <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message'); ?>
                <?php unset($_SESSION['message']) ?>
            <?php endif; ?>
            <div class="data mb-3 d-flex flex-column">
                <h1><?= $tutor['nama'] ?></h1>
                <span class="text-gray">Member since <?= date("s F Y", $tutor['date_created']) ?></span>
                <span class="mt-3"><?= $tutor['overview'] ?></span>
                <hr>
                <?php if ($this->session->userdata('role_id') == 2) : ?>
                    <span class="fw-bold">Link donasi saweria:</span>
                    <?php if ($tutor['saweria'] == '') : ?>
                        <div style="cursor: pointer;" class="alert alert-warning mt-3" onclick="window.location.href='<?= base_url('tutor/edit') ?>'" role="alert">
                            <span>Tambahkan akun saweria anda agar anda dapat menerima donasi dari para pelajar</span>
                        </div>
                    <?php else : ?>
                        <span><a style="text-decoration: none;" href="http://saweria.co/<?= $tutor['saweria'] ?>" target="_blank"><?= $tutor['saweria'] ?></a></span>
                    <?php endif; ?>
                <?php else : ?>
                    <span class="fw-bold">Link donasi saweria:</span>
                    <?php if ($tutor['saweria'] == '') : ?>
                        <div style="cursor: pointer;" class="alert alert-warning mt-3" role="alert">
                            <span>Tutor belum menambahkan link donasi</span>
                        </div>
                    <?php else : ?>
                        <span><a class="badge bg-warning" style="text-decoration: none;" href="http://saweria.co/<?= $tutor['saweria'] ?>" target="_blank"><?= $tutor['saweria'] ?></a></span>
                    <?php endif; ?>
                <?php endif; ?>
                <span class="fw-bold">Favorit :</span>
                <span>Tutor <?= $tutor['matkul'] ?></span>
                <span class="fw-bold">NIM :</span>
                <span><?= $tutor['nim'] ?></span>
                <span class="fw-bold">Email :</span>
                <span><?= $tutor['email'] ?></span>
                <span class="fw-bold">Fakultas :</span>
                <span><?= $tutor['fakultas'] ?></span>
                <span class="fw-bold">Jurusan :</span>
                <span><?= $tutor['jurusan'] ?></span>
            </div>
            <?php if ($this->session->userdata('role_id') == 2) : ?>
                <div class="aksi">
                    <button onclick="window.location = '<?= base_url('tutor/edit')  ?>'" class="btn btn-primary">Edit profile</button>
                    <button onclick="window.location = '<?= base_url('auth/logout')  ?>'" class="btn btn-outline-primary">Logout</button>
                </div>
            <?php elseif ($this->session->userdata('role_id') == 3) : ?>
                <div class="aksi">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $tutor['no_telepon'] ?>&text=Saya%20tertarik%20untuk%20tutor%20bareng" class="btn btn-primary">Request Tutor Bareng</a>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $tutor['no_telepon'] ?>&text=Saya%20tertarik%20untuk%20tutor%20private" class="btn btn-outline-primary">Request Tutor Private</a>
                </div>
            <?php else : ?>
                <div class="aksi">
                    <button onclick="window.location = '<?= base_url('Auth')  ?>'" class="btn btn-primary">Request Tutor Bareng</button>
                    <button onclick="window.location = '<?= base_url('Auth')  ?>'" class="btn btn-outline-primary">Request Tutor Private</button>
                </div>
            <?php endif; ?>

        </div>
    </div>


</div>