<div class="container mb-5 pt-5">
    <div class="row text-center mb-4">
        <div class="col">
            <?php
            $data = $this->db->get_where('tutor', ['nama' => $kelas['pembuat']])->row_array();
            ?>
            <h1>Kelas <?= $kelas['nama_kelas'] ?></h1>
            <?php if ($this->session->userdata('role_id') == 3) : ?>
                <span>Oleh <a href="<?= base_url('pelajar/detailTutor/') . $data['id'] ?>" style="text-decoration: none;" class="text-primary fw-bold"><?= $kelas['pembuat'] ?></a></span>

            <?php else : ?>
                <span>Oleh <a href="<?= base_url('home/viewTutor/') . $data['id'] ?>" style="text-decoration: none;" class="text-primary fw-bold"><?= $kelas['pembuat'] ?></a></span>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($this->session->userdata('role_id') == 2) : ?>
        <div class="row mb-3 text-center justify-content-center">
            <div class="col-4">
                <a href="<?= base_url('tutor/editkelas/') . $kelas['id'] ?>" class="btn btn-success">Edit</a>
                <a href="<?= base_url('tutor/hapuskelas/') . $kelas['id'] ?>" onclick="return confirm('Are u sure ?')" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mb-4 text-center">
        <span class="ket">Dimulai dalam :</span>
        <h3 class="time fw-bold"></h3>
    </div>
    <div class="row ">
        <div class="col-lg-6 slideright fadein">
            <div class="card-kelas p-4 d-flex justify-content-center align-items-center " style="background-image: url(<?= base_url('assets/img/sampul/') . $kelas['sampul'] ?>); height : 400px; border-radius : 50px ">
                <div class="img-tutor overflow-hidden rounded-circle" style="width:200px; height:200px;">
                    <img src="<?= base_url('assets/img/profile/') . $kelas['foto_pembuat'] ?>" alt="" width="100%">

                </div>
            </div>

        </div>
        <div class="col-lg-6 mt-lg-0 mt-4  fadein">

            <div class="card-info p-4" style="background-color: white; width : 100%;">
                <div class="row d-flex flex-lg-column justify-content-between">
                    <div class="col-auto">
                        <p class="fw-200">Materi Tutor</p>
                        <span><?= $kelas['deskripsi'] ?></span>
                    </div>
                    <hr class="mt-4 mb-4">
                    <div class="col-auto d-flex align-items-center mb-2">
                        <i class="bi bi-alarm" style="width:32px;"></i>
                        <span><?= date("H:i", strtotime($kelas['mulai'])) ?> WIB - <?= date("H:i", strtotime($kelas['selesai'])) ?> WIB</span>
                    </div>
                    <div class="col-auto d-flex align-items-center mb-2">
                        <i class="bi bi-calendar-event " style="width:32px;"></i>
                        <span><?= date("d F Y", strtotime($kelas['tanggal'])) ?></span>
                    </div>
                    <div class="col-auto d-flex align-items-center mb-2">
                        <i class="bi bi-camera-video" style="width:32px;"></i>
                        <span><?= $kelas['via'] ?></span>
                    </div>
                </div>
            </div>
            <?php if (!$this->session->userdata('email')) : ?>
                <div class="joins">
                    <a id="belum" class="fs-5 fw-700 gabung bg-secondary d-flex justify-content-center align-items-center" style="height: 75px;text-decoration : none; color : white">Gabung</a>
                </div>
            <?php else : ?>
                <div class="join">
                    <a id="udah" class="disabled fs-5 fw-700 gabung bg-secondary d-flex justify-content-center align-items-center" style="height: 75px;text-decoration : none; color : white" target="_blank" aria-disabled="true">Gabung</a>
                </div>
            <?php endif; ?>
        </div>
        <?php
        $sawer = $this->db->get_where("tutor", ['nama' => $kelas['pembuat']])->row_array();

        ?>

        <input type="hidden" class="waktuMulai" value="<?= $kelas['mulai'] ?>">
        <input type="hidden" class="donasi" value="<?= $sawer['saweria'] ?>">
        <input type="hidden" class="link" value="<?= $kelas['link'] ?>">
        <input type="hidden" class="waktuSelesai" value="<?= $kelas['selesai'] ?>">
        <input type="hidden" class="tanggal" value="<?= $kelas['tanggal'] ?>">
    </div>
</div>