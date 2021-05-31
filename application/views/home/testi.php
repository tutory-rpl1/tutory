<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-around">

            <h1 class="tutory">Apa Kata Mereka</h1>
        </div>
    </div>

    <section class="row d-flex justify-content-center mt-5">
        <!-- Set up your HTML -->

        <div class="col-6 owl-carousel owl-theme">
            <?php foreach ($testimoni as $row) : ?>
                <?php if ($row['is_active'] == 1) : ?>
                    <div class="row bg-white shadow-sm p-3 mb-5 ms-4 bg-body rounded d-flex flex-column align-items-strech" style="min-height: 50vh;">
                        <div class="d-flex justify-content-center">
                            <div class="image  rounded-circle overflow-hidden" style="width: 120px; height : 120px;">
                                <img src="<?= base_url('assets/img/profile/') . $row['image']  ?>" alt="" class="mb-1 hero img-profile" style="width: 100%;">
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="fw-bold text-center"><?= $row['nama']  ?></p>
                            <div class=" text-center "><small class="fw-300 text-gray">G64190045</small></div>
                            <p class="fs-5"><i>"<?= $row['ulasan'] ?>"</i></p>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

</div>