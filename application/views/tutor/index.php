<div class="container">
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="img rounded-circle overflow-hidden ms-lg-4" style="width : 500px; height : 500px;">
                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="100%">
            </div>
        </div>
        <div class="col-lg-6">
            <?php if ($this->session->userdata('email')) : ?>
                <p>My Profile</p>
            <?php endif; ?>
            <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message'); ?>
                <?php unset($_SESSION['message']) ?>
            <?php endif; ?>
            <div class="data mb-3 d-flex flex-column">
                <h1><?= $user['nama'] ?></h1>

                <span class="text-gray">Member since <?= date("s F Y", $user['date_created']) ?></span>
                <?php if ($user['overview'] == '' && $this->session->userdata('role_id') == 2) : ?>
                    <div style="cursor: pointer;" class="alert alert-warning mt-3" onclick="window.location.href='<?= base_url('tutor/edit') ?>'" role="alert">
                        <span>Tambahkan overview dan akun saweria anda agar anda dapat menerima donasi dari para pelajar</span>
                    </div>
                <?php else : ?>
                    <span class="mt-3"><?= $user['overview'] ?></span>
                <?php endif; ?>
                <hr>
                <?php if ($this->session->userdata('role_id') == 2) : ?>
                    <span class="fw-bold">Link donasi saweria:</span>
                    <?php if ($user['saweria'] == '') : ?>
                        <div style="cursor: pointer;" class="alert alert-warning mt-3" onclick="window.location.href='<?= base_url('tutor/edit') ?>'" role="alert">
                            <span>Tambahkan akun saweria anda agar anda dapat menerima donasi dari para pelajar</span>
                        </div>
                    <?php else : ?>
                        <span><a class="badge bg-warning" style="text-decoration: none;" href="http://saweria.co/<?= $user['saweria'] ?>" target="_blank"><?= $user['saweria'] ?></a></span>
                    <?php endif; ?>
                <?php else : ?>
                    <span class="fw-bold">Link donasi saweria:</span>
                    <?php if ($user['saweria'] == '') : ?>
                        <div style="cursor: pointer;" class="alert alert-warning mt-3" role="alert">
                            <span>Tutor belum menambahkan link donasi</span>
                        </div>
                    <?php else : ?>
                        <span><a style="text-decoration: none;" href="http://saweria.co/<?= $user['saweria'] ?>" target="_blank"><?= $user['saweria'] ?></a></span>
                    <?php endif; ?>
                <?php endif; ?>
                <span class="fw-bold">Favorit :</span>
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
            <?php if ($this->session->userdata('role_id') == 2) : ?>
                <div class="aksi">
                    <button onclick="window.location = '<?= base_url('tutor/edit')  ?>'" class="btn btn-primary">Edit profile</button>
                    <button onclick="window.location = '<?= base_url('auth/logout')  ?>'" class="btn btn-outline-primary">Logout</button>
                </div>
            <?php elseif ($this->session->userdata('role_id') == 3) : ?>
                <div class="aksi">
                    <button onclick="window.location =  `https://api.whatsapp.com/send?phone=<?= $user['no_telepon'] ?>&text=Saya%20tertarik%20untuk%20tutor%20bareng`" class="btn btn-primary">Request Tutor Bareng</button>
                    <button onclick="window.location = '<?= $user['no_telepon'] ?>'" class="btn btn-outline-primary">Request Tutor Private</button>
                </div>
            <?php else : ?>
                <div class="aksi">
                    <button onclick="window.location = '<?= base_url('Auth')  ?>'" class="btn btn-primary">Request Tutor Bareng</button>
                    <button onclick="window.location = '<?= base_url('Auth')  ?>'" class="btn btn-outline-primary">Request Tutor Private</button>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <?php if ($this->session->userdata('role_id') == 2) : ?>
        <div class="row mt-5">
            <h1>Kelas yang anda buat</h1>
        </div>
        <div class="row mt-3">
            <?php $kelas = $this->db->get_where('kelas', ['pembuat' => $user['nama']])->result_array(); ?>
            <?php foreach ($kelas as $row) : ?>
                <div class="col-11 col-lg-4 mb-4">

                    <div class="card border-0" onclick="window.location = '<?= base_url('tutor/kelas/') . $row['id']; ?>'">
                        <div class="card-body ">
                            <div class="thumbanail overflow-hidden mb-3" style="height:170px;">
                                <img src="<?= base_url('assets/img/sampul/') . $row['sampul'] ?>" alt="" width="100%">
                            </div>
                            <?php
                            $kode = $this->db->get_where('matkul', ['matkul' => $row['nama_kelas']])->row_array();
                            ?>
                            <h6 class="line-height-1half mb-0 mt-3">Tutor <?= $row['nama_kelas'] ?></h6>
                            <span class="text-gray"><?= $kode['kode_matkul'] ?></span>
                            <hr>
                            <div class="row d-flex flex-lg-column justify-content-between">
                                <div class="col-auto d-flex align-items-center">

                                    <i class="bi bi-alarm" style="width:32px;"></i>
                                    <span><?= date("H:i", strtotime($row['mulai'])) ?> WIB</span>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <i class="bi bi-calendar-event " style="width:32px;"></i>
                                    <span><?= date("d F Y", strtotime($row['tanggal'])) ?></span>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <i class="bi bi-camera-video" style="width:32px;"></i>
                                    <span><?= $row['via'] ?></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <div class=" overflow-hidden rounded-circle" style="width:50px; height:50px;">
                                        <img src="<?= base_url('assets/img/profile/') . $row['foto_pembuat'] ?>" alt="<?= $row['pembuat'] ?>" width="100%">
                                    </div>
                                </div>
                                <?php
                                $nim = $this->db->get_where('tutor', ['nama' => $row['pembuat']])->row_array();
                                ?>
                                <div class="col pl-2 d-flex flex-column">
                                    <span class=""><?= $row['pembuat'] ?></span>
                                    <span class="text-gray" style="font-size: 16px !important;"><?= $nim['nim'] ?></span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>


</div>