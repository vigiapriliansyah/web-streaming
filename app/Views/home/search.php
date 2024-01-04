<?= $this->extend('/layout/templateHome'); ?>
<?= $this->section('konten'); ?>

<div class="container">
    <section>
        <div class="d-flex justify-content-center container">
            <div class="row gap-0 row-gap-3 column-gap-5">
                <?php foreach ($searchResults as $result) : ?>
                    <div class="p-2 col-5">
                        <div class="col">
                            <li>
                                <a class="text-decoration-none text-white" href="<?= base_url('anime/detail/' . $result['id_anime']) ?>">
                                    <?= $result['judul']; ?>
                                </a>
                            </li>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>