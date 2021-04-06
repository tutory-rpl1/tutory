<div class="container">
    <section class="heroku">
        
        <div class="row banner mt-5 d-flex flex-lg-row">
            <div class="col-lg-6 main d-flex flex-column justify-content-center">
                <h1>Tutor  sesuai,<br>nilai baik tercapai</h1>
                <span>Tutory membantu kamu menemukan tutor yang sesuai <br>
                    dengan metode pembelajaran yang tepat dengan <br>sesama 
                    mahasiswa iPB University</span>
                <a><button class="btn btn-primary cari">Cari tutor</button></a>
            </div>
            <div class="col-lg-6">
                <img src="<?= BASEURL ?>/img/banner.png" alt="" width="100%" class="hero">
            </div>
        </div>

    </section>

    <section class="event mt-5">

        <div class="row mt-5">
            <div class="col mt-5 pt-5">
                <ul class="panel" id="">
                    <li class="panels"><a href="#">All</a></li>
                    <li class="panels"><a href="#">Kom205</a></li>
                    <li class="panels"><a href="#">Kom325</a></li>
                    <li class="panels"><a href="#">Kom207</a></li>
                </ul>
            </div>
        </div>

        <div class="row mt-5 d-flex justify-content-center">

        <?php for($i=0;$i<5;$i++): ?>

            <div class="col-lg-4 mb-4">
                <div class="acara">
                    <div class="thumb">
                        <h1>Budi</h1>
                        <p>Tutor Kom205</p>
                    </div>
                    <div class="pict"></div><hr class="line">
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
                    <div class="tombol mt-3">
                        <a class="join">Check</a>

                    </div>
                </div>
            </div>
            
        <?php endfor ; ?>
            
        </div>

    </section>

    <section class="tutors">
        
        <div class="row part2">
            <div class="col-12">
                <h1>Dengan tutor yang hebat </h1>
            </div>
        </div>
    
        <div class="row mt-5 d-flex justify-content-center text-center">
            <?php for($i=0;$i<5;$i++): ?>
            <div class="col-md-4 foto-tutor mb-5">
                <img src="<?= BASEURL ?>/img/kristofer.png" alt=""  class="mb-1 hero">
                <p>Budi</p>
                <span class="nim">G64190045</span>
            </div>
            <?php endfor ; ?>

        </div>

    </section>

    <section class="row testimoni d-flex justify-content-center mt-5">
        <div class="judul col-md-6 mt-auto mb-auto text-center">

            <h1>Apa Kata Mereka</h1>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide col-md-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= BASEURL ?>/img/gilang.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= BASEURL ?>/img/kristofer.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= BASEURL ?>/img/sakura.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= BASEURL ?>/img/sakura.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>
<section class="last mt-5">
        <div class="container">
            <div class="row text-center ">
                <div class="col mt-5 pt-4">
                    <p>Build With ❤ from tutory team</p>
                </div>
            </div>
        </div>
</section>
