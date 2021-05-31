<div class="container">
    <div class="row text-center mb-3">
        <div class="col">
            <h1>Edit Kelas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message'); ?>
                <?php unset($_SESSION['message']) ?>
            <?php endif; ?>
            <div class="card-kelas p-4 d-flex justify-content-center align-items-center " style="background-image: url(https://images.unsplash.com/photo-1560762484-813fc97650a0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80); height : 400px; border-top-left-radius: 50px;
    border-top-right-radius: 50px;">
                <div class="img-tutor overflow-hidden rounded-circle" style="width:200px; height:200px;">
                    <img src="<?= base_url('assets/img/profile/') ?><?= $user['image']; ?>" alt="" width="100%">
                </div>
            </div>
            <div class="card-info-two p-4" style="background-color: white; width : 100%;border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;">
                <label for="">Pasang sampul kelas:</label>
                <input type="file" class="form-control rounded-pill myFile" name="sampul" value="value=" <?= set_value('sampul') ?>"">
                <script>
                    document.querySelector(".myFile").disabled = true;
                </script>

                <form action="<?= base_url('tutor/updatekelas') ?>" method="post">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-info p-4" style="background-color: white; width : 100%;">
                <div class="row d-flex flex-lg-column justify-content-between">
                    <div class="col-auto">
                        <div class="mb-3">
                            <select class="form-select rounded-pill kelas" name="kelas">
                                <option selected disabled>Pilih mata kuliah yang mau di tutor</option>
                                <?php foreach ($matkul as $row) : ?>
                                    <option <?php if ($row['matkul'] == $kelas['nama_kelas']) echo 'selected' ?> data-id="<?= $row['kode_matkul'] ?>" value="<?= $row['matkul'] ?>"><?= $row['matkul'] ?>(<?= $row['kode_matkul'] ?>)</option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kelas', '<small class="text-danger ms-3">', '</small>')  ?>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea value="<?= set_value('deskripsi') ?>" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="deskripsi"><?= $kelas['deskripsi']; ?></textarea>
                            <label for="floatingTextarea2">Deskripsi materi yang akan di tutorin</label>
                            <?= form_error('deskripsi', '<small class="text-danger ms-3">', '</small>')  ?>

                        </div>
                    </div>
                    <div class="col-auto d-flex flex-column mb-3">
                        <label for="date">Tanggal :</label>
                        <input class="form-control rounded-pill" type="date" name="tanggal" id="date" value="<?= $kelas['tanggal']; ?>">
                        <?= form_error('tanggal', '<small class="text-danger ms-3">', '</small>')  ?>

                    </div>
                    <div class="row mb-3">
                        <div class="col-6 d-flex flex-column mb-3">
                            <label for="mulai">Waktu mulai :</label>
                            <input class="form-control rounded-pill" type="time" name="mulai" id="mulai" value="<?= $kelas['mulai']; ?>">
                            <?= form_error('mulai', '<small class="text-danger ms-3">', '</small>')  ?>

                        </div>
                        <div class="col-6 d-flex flex-column mb-3">
                            <label for="selesai">Waktu selesai :</label>
                            <input class="form-control rounded-pill" type="time" name="selesai" id="selesai" value="<?= $kelas['selesai']; ?>">
                            <?= form_error('selesai', '<small class="text-danger ms-3">', '</small>')  ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 d-flex flex-column mb-3">
                            <label for="via">Via :</label>
                            <select class="form-select rounded-pill mb-3" name="via">
                                <option selected>Google Meet</option>
                                <option>Zoom Meeting</option>
                            </select>
                        </div>
                        <div class="col-6 d-flex flex-column mb-3">
                            <label for="link">Link :</label>
                            <input placeholder="ex: https://meet.google.com/xak-nktb-txs" class="form-control rounded-pill" type="text" name="link" id="link" value="<?= $kelas['link']; ?>">
                            <?= form_error('link', '<small class="text-danger ms-3">', '</small>')  ?>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" value="<?= $user['nama'] ?>" name="pembuat">
            <input type="hidden" value="<?= $kelas['id'] ?>" name="id">
            <input type="hidden" value="<?= $user['image'] ?>" name="foto_pembuat">
            <button type="submit" class="fs-5 fw-700 btn gabung btn-primary" style="width : 100% ; height: 75px;text-decoration : none; color : white">Edit Kelas</button>
            </form>
        </div>
    </div>