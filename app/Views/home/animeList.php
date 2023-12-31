<?= $this->extend('/layout/templateHome'); ?>
<?= $this->section('konten'); ?>

<div class="container">
    <section>
        <div class="d-flex justify-content-center container">
            <?php
            // Loop untuk menampilkan setiap kelompok
            foreach ($groupedAnime as $letter => $titles) { ?>
                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;"><?= $letter; ?></h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <?php foreach ($titles as $title) { ?>
                            <li style="color: white;"><?= $title['judul']; ?></li>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>