<?= $this->extend('/layout/templateHome'); ?>
<?= $this->section('konten'); ?>

<div class="container">
    <section>

        <div class="d-flex justify-content-center container">
            <div class="row gap-0 row-gap-3 column-gap-5">

                <?php foreach ($genre as $key) { ?>
                    <div class="p-2 col-5">
                        <div class="col">
                            <h1 style="color: white;"><?= $key['genre']; ?></h1>
                            <hr class="bg-danger border-2 border-top border-white" />
                            <?php foreach ($anime as $judul) {
                                if ($key['genre'] == $judul['genre']) { ?>
                                    <li>
                                        <a class="text-decoration-none text-white" href="<?= base_url('streaming/' . $judul['id_anime']); ?>">
                                            <?= $judul['judul']; ?>
                                        </a>
                                    </li> <?php }
                                    } ?>
                        </div>
                    </div>
                <?php  }; ?>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>