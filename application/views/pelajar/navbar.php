<nav class="navbar navbar-expand-lg navbar-light bg-light position-static">

    <div class="container px-lg-0 px-5 d-flex justify-content-between">
        <h1 class="tutory">Tutory</h1>

        <div class="links d-flex align-items-center flex-lg-row flex-column-reverse justify-content-center">
            <div class="d-lg-flex text-center">
                <div class="item-link me-4 panel">
                    <button class="text-black btn
                    tutor " onclick="window.location = '<?= base_url('pelajar/viewTutor')  ?>'">Tutor</button>
                </div>
                <div class="item-link me-4 panel">
                    <button class="btn kelas " onclick="window.location = '<?= base_url('pelajar')  ?>'">Kelas</button>
                </div>
            </div>
            <div onclick="window.location = '<?= base_url('pelajar/profile')  ?>'" class="me-4 item-link img rounded-circle overflow-hidden ms-lg-4" style="width: 35px; height : 35px">
                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="100%">
            </div>
            <div>
                <a href="<?= base_url('Auth/logout')  ?>" onclick="return confirm('Mau Keluar ?')" class="btn btn-danger btn-sm">
                    <i class=" fw-bold item-link  bi bi-box-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="menu d-lg-none d-flex">
            <div class="box"></div>
        </div>
    </div>
</nav>