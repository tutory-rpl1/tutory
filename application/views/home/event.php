<div class="container">
    <section class="event mt-5">

        <div class="row mt-5 text-center">
            <div class="col mt-5 pt-5 d-flex justify-content-around">
                <button class="btn  panel">All</button>
                <button class="btn  panel">KOM 205</button>
                <button class="btn  panel">KOM 322</button>
                <button class="btn  panel">KOM 207</button>
            </div>
        </div>

        <div class="row mt-5 d-flex justify-content-center">

            <?php for ($i = 0; $i < 5; $i++) : ?>

                <div class="col-lg-3 mb-4 card me-4 py-3 px-lg-3 px-5">
                    <div class="acara">
                        <div class="thumb">
                            <h1>Budi</h1>
                            <p>Tutor Kom205</p>
                        </div>
                        <div class="pict"></div>
                        <hr class="line">
                        <div class="info">
                            <div class="tanggal">
                                <i class="bi bi-calendar-event me-2"></i>
                                <span> Kamis, 20 Maret 2021</span>
                            </div>
                            <div class="waktu">
                                <i class="bi bi-alarm me-2"></i>
                                <span>20.00 WIB</span>
                            </div>
                            <div class="via">
                                <i class="bi bi-camera-video me-2"></i>
                                <span> Google Meet</span>
                            </div>
                        </div>

                    </div>
                </div>

            <?php endfor; ?>

        </div>

    </section>

</div>