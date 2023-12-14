<?= $this->extend('/layout/templateHome'); ?>
<?= $this->section('konten'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

</head>

<body style="color: #fff;">
    <div class="container">

        <section style="color: #fff;">
            <h1>Kontak</h1>
            <hr class="bg-info border-2 border-top border-white" />
        </section>
        <h4 style="margin-top: 9rem;">Email : 5NIME@Gmail.com</h4>
        <h4>Untuk Pertanyaan Seputar Premium Aplikasi :</h4>

        <h2 style="margin-top: 9rem;">Chat WhatsApp</h2>
    </div>
    <?= $this->endSection(); ?>
</body>

</html>