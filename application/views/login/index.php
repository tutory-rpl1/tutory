<div class="container pt-5 ">
    <div class="row">
        <div class="col px-lg-0 px-5 ">
            <h1 class="tutory">Tutory</h1>
        </div>
    </div>
    <div class="row align-items-center d-flex flex-lg-row flex-column-reverse justify-content-between">
        <div class="col-lg-4 px-lg-0 px-5 fadein">
            <H1>
                Login dulu ya!
            </H1>
            <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message'); ?>
                <?php unset($_SESSION['message']) ?>
            <?php endif; ?>
            <form action="<?= base_url() ?>auth" method="post">
                <div class="form-group mt-3">
                    <input type="text" placeholder="Email" name="email" class="form-control input rounded-pill" autocomplete="off" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger ms-3">', '</small>')  ?>

                </div>
                <div class="form-group mt-3">
                    <input type="password" placeholder="Password" class="form-control input rounded-pill" name="password">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" style="width : 100px; border-radius : 50rem;" class="btn btn-primary" class="form-control rounded rounded-pill" name="login">Login</button>
                </div>
            </form>
            <p class="fs-6 mt-3">Belum punya akun?<a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-primary" style="text-decoration: none;"> Buat Akun </a></p>
            <p class="fs-6"><a href="" lass="text-primary" style="text-decoration: none;"> Lupa Password </a></p>
        </div>
        <div class="col-lg-6 text-center fadein">
            <img src="<?= base_url() ?>assets/img/login.png" alt="login banner">

        </div>
    </div>
</div>