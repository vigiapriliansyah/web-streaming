<?= $this->extend('/layout/templateHome'); ?>
<?= $this->section('konten'); ?>

<div class="container">
    <section>
        <div class="d-flex container">
            <div class="row column-gap-5">
                <?php foreach ($searchResults as $result) : ?>
                    <div class="p-2 col-5">
                        <div class="col">
                            <li>
                                <a class="text-decoration-none text-white fs-5" href="<?= base_url('streaming/' . $result['id_anime']) ?>">
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