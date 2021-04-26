<div class="container mt-5 pt-5">
    <?php if (!$this->session->userdata('email')) : ?>
        <div class="row part2">
            <div class="col-12">
                <h1 class="tutory">Dengan tutor yang hebat </h1>
            </div>
        </div>
    <?php else : ?>
        <div class="row part2 justify-content-center text-center">
            <div class="col-5">
                <h1>Temukan tutor mu</h1>
                <input type="text" placeholder="Cari tutor.." class="cari form-control rounded-pill" name="cari">
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-5 d-flex justify-content-center text-center">
        <?php foreach ($tutors as $tutor) : ?>
            <div class="col-md-4 foto-tutor mb-5 d-flex align-items-center flex-column">
                <?php if ($this->session->userdata('role_id') == 3) : ?>
                    <div class="item-link" onclick="window.location.href='<?= base_url('pelajar/detailTutor/') . $tutor['id'] ?>'">
                    <?php else : ?>
                        <div class="item-link" onclick="window.location.href='<?= base_url('home/viewTutor/') . $tutor['id'] ?>'">
                        <?php endif; ?>
                        <div class="image  rounded-circle overflow-hidden" style="width: 200px; height : 200px;">
                            <img src="<?= base_url() ?>assets/img/profile/<?= $tutor['image'] ?>" alt="" class="mb-1 hero img-profile" style="width: 100%;">
                        </div>
                        <p class="fw-bold"><?= $tutor['nama'] ?></p>
                        <span class="nim"><?= $tutor['nim'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

    </div>