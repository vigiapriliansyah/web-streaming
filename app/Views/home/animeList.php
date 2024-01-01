<?= $this->extend('/layout/templateHome'); ?>
<?= $this->section('konten'); ?>

<div class="container">
    <section>
        <div class="d-flex justify-content-center container flex-column">
            <div class="row gap-0 row-gap-3 column-gap-5">
                <?php
            foreach ($groupedAnime as $letter => $titles) { ?>
                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;"><?= $letter; ?></h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <?php foreach ($titles as $title) { ?>
                        <li style="color: white;"><a class="text-decoration-none text-white"
                                href="<?= base_url('streaming/' . $title['id_anime']); ?>"><?= $title['judul']; ?></a>
                        </li>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </section>
</div>

<?= $this->endSection(); ?>