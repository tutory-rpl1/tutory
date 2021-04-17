<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-lg-5 justify-content-center">
                        <img src="<?= base_url() ?>assets/img/pilih.png" alt="">
                    </div>
                    <div class="col-lg-7 d-flex flex-column align-items-center">
                        <h1 class="tutory pt-5">Yuk pilih dulu !</h1>
                        <div class="pilih d-flex flex-column align-items-stretch mt-5 ">

                            <a href="<?= base_url() ?>Auth/regisPelajar" class="btn btn-outline-primary ">Daftar sebagai Pelajar</a>
                            <a href="<?= base_url() ?>Auth/regisTutor" class="btn btn-primary mt-3">Daftar sebagai tutor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

</html>