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

        <div class="row mt-5 justify-content-center">

            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="col-11 col-lg-4 mb-4">

                    <div class="card border-0" onclick="window.location = '<?= base_url() ?>kelas'">
                        <div class="card-body ">
                            <div class="thumbanail overflow-hidden mb-3" style="height:170px;">
                                <img src="https://images.unsplash.com/photo-1560762484-813fc97650a0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80" alt="">
                            </div>
                            <h6 class="line-height-1half mb-0 mt-3">Tutor Basis data</h6>
                            <span class="text-gray">KOM 205</span>
                            <hr>
                            <div class="row d-flex flex-lg-column justify-content-between">
                                <div class="col-auto d-flex align-items-center">

                                    <i class="bi bi-alarm" style="width:32px;"></i>
                                    <span>20.00 IWB</span>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <i class="bi bi-calendar-event " style="width:32px;"></i>
                                    <span>25 April 2021</span>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <i class="bi bi-camera-video" style="width:32px;"></i>
                                    <span>Google Meet</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <div class=" overflow-hidden rounded-circle" style="width:50px; height:50px;">
                                        <img src="https://images.unsplash.com/photo-1552374196-c4e7ffc6e126?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="" width="100%">
                                    </div>
                                </div>
                                <div class="col pl-2 d-flex flex-column">
                                    <span class="">Alfariz Gilang</span>
                                    <span class="text-gray" style="font-size: 16px !important;">G64190045</span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            <?php endfor; ?>

        </div>

    </section>

</div>