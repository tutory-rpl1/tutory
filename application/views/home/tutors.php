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
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="col-md-4 foto-tutor mb-5">
                <img src="https://source.unsplash.com/random/200x200" alt="" class="mb-1 hero img-profile rounded-circle">
                <p class="fw-bold">Budi</p>
                <span class="nim">G64190045</span>
            </div>
        <?php endfor; ?>

    </div>

</div>