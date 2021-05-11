<div class="container event">
    <section class="">

        <div class="row  text-center">
            <div class="col mt-5 pt-5 d-flex justify-content-around">
                <h1 class="tutory">Kelas tutor terdekat</h1>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <?php foreach ($kelas as $row) : ?>
                <?php if ($this->session->userdata('role_id') == 2) : ?>
                    <div class="col-11 col-lg-4 mb-4">
                        <div class="card border-0" onclick="window.location = '<?= base_url('kelas/index/') . $row['id']; ?>'">
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
                                <!-- <div class="row d-flex flex-lg-column justify-content-between">
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
    <hr> -->
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
                <?php else : ?>
                    <?php if (strtotime($row['tanggal']) >= time()) : ?>
                        <div class="col-11 col-lg-4 mb-4">


                            <div class="card border-0" onclick="window.location = '<?= base_url('kelas/index/') . $row['id']; ?>'">
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
                                    <!-- <div class="row d-flex flex-lg-column justify-content-between">
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
                            <hr> -->
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
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>

    </section>

</div>