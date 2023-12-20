<?= $this->extend('/layout/templateHome'); ?>
<?= $this->section('konten'); ?>


<div class="container">
    <section>
        <!-- testing -->
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="<?= base_url('assets/MV5BOGNjNzFhMGQtODc2MS00OGU0LThkN2UtODY1NmJmYWY0NmFiXkEyXkFqcGdeQXVyMTA1OTEwNjE@._V1_.jpg') ?>" alt="" style="width: 100%;">
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('assets/akira1.jpg') ?>" alt="" style="width: 100%; ">
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('assets/hero.jpg') ?>" alt="" style="width: 100%;">
                </div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <span>|Recently Added</span>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    <div class="col">
                                        <div class="card">
                                            <img src="<?= base_url('assets/download.jpg') ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div id="searchResults">
                                                    <!-- Search results will be displayed here -->
                                                </div>
                                                <h5 class="card-title"></h5>
                                                <div class="more"><a href="">Click here</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="<?= base_url('assets/black.jpg') ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="more"><a href="/streaming/Black_Butler">Click here</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="<?= base_url('assets/MV5BOGNjNzFhMGQtODc2MS00OGU0LThkN2UtODY1NmJmYWY0NmFiXkEyXkFqcGdeQXVyMTA1OTEwNjE@._V1_.jpg') ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="more"><a href="">Click here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="<?= base_url('assets/gintaman.jpg') ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="more"><a href="#">Click here</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="<?= base_url('assets/hero.jpg') ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="more"><a href="#">Click here</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="<?= base_url('assets/queen.jpg') ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="more"><a href="#">Click here</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="<?= base_url('assets/dou.jpg') ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="more"><a href="#">Click here</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="<?= base_url('assets/akira1.jpg') ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="more"><a href="/streaming/Akira">Click here</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <span>|Anime 2023</span>
                    <div class="col">
                        <div class="card">
                            <img src="<?= base_url('assets/MV5BOGNjNzFhMGQtODc2MS00OGU0LThkN2UtODY1NmJmYWY0NmFiXkEyXkFqcGdeQXVyMTA1OTEwNjE@._V1_.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="more"><a href="#"></a></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="card">
                            <img src="<?= base_url('assets/black.jpg') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="more"><a href="#"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?= $this->endSection(); ?>