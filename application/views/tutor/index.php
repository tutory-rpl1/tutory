<div class="container">

    <div class="row">
        <div class="col-lg-6">
            <div class="img rounded-circle overflow-hidden ms-lg-4" style="width : 500px; height : 500px;">
                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="100%">
            </div>
        </div>
        <div class="col-lg-6">
            <p>My Profile</p>
            <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message'); ?>
                <?php unset($_SESSION['message']) ?>
            <?php endif; ?>
            <div class="data mb-3 d-flex flex-column">
                <h1><?= $user['nama'] ?></h1>
                <span class="text-gray">Member since <?= date("s F Y", $user['date_created']) ?></span>
                <span class="mt-3"><?= $user['overview'] ?></span>
                <hr>
                <span class="fw-bold">Keahlian :</span>
                <span>Tutor <?= $user['matkul'] ?></span>
                <span class="fw-bold">NIM :</span>
                <span><?= $user['nim'] ?></span>
                <span class="fw-bold">Email :</span>
                <span><?= $user['email'] ?></span>
                <span class="fw-bold">Fakultas :</span>
                <span><?= $user['fakultas'] ?></span>
                <span class="fw-bold">Jurusan :</span>
                <span><?= $user['jurusan'] ?></span>
            </div>
            <div class="aksi">
                <button onclick="window.location = '<?= base_url('tutor/edit')  ?>'" class="btn btn-primary">Edit profile</button>
                <button onclick="window.location = '<?= base_url('auth/logout')  ?>'" class="btn btn-outline-primary">Logout</button>
            </div>
        </div>
    </div>


</div>