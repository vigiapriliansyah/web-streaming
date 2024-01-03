<?= $this->extend('/layout/templateHome'); ?>
<?= $this->section('konten'); ?>

<!-- --section-- -->
<section>
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

<!-- --main-- -->
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 gap">
                <h3>|Recently Added</h3>
                <div class="container text-center">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <?php foreach ($recentlyAddedAnime as $anime) : ?>
                            <div class="col">
                                <div class="card">
                                    <img src="<?= base_url('uploud/images/' . $anime['file_gambar']); ?>" class="card-img-top" alt="<?= $anime['judul']; ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $anime['judul']; ?></h5>
                                        <div class="more"><a href="<?= base_url('streaming/anime/' . $anime['id_anime']); ?>">Lihat Detail</a></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- Anime Tahun 2023 Section -->
            <div class="col-md-4">
                <h3>| Anime Tahun 2023</h3>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php foreach ($animeTahun2023 as $anime) : ?>
                        <div class="col">
                            <div class="card">
                                <img src="<?= base_url('uploud/images/' . $anime['file_gambar']); ?>" class="card-img-top" alt="<?= $anime['judul']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $anime['judul']; ?></h5>
                                    <div class="more"><a href="<?= base_url('streaming/anime/' . $anime['id_anime']); ?>">Lihat Detail</a></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>