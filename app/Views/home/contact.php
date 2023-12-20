<?= $this->extend('/layout/templateHome'); ?>
<?= $this->section('konten'); ?>



<div class="container">
    <!-- --navbar-- -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #1D1B34;">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="/home"><img src="<?= base_url('/assets/icon.png'); ?>" alt="icon"
                        width="55" height="40"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/animeList">Anime List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/genreList">Genre List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/Contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <div class="navbar-icons">
                        <ul class="navbar-nav">
                            <li class="navbar-item">
                                <div class="search-box">
                                    <button class="btn-search">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25"
                                            viewBox="0 0 512 512">
                                            <path fill="#ffffff"
                                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                        </svg>
                                    </button>
                                    <input type="text" class="input-search" placeholder="Cari Judul Anime....">
                                </div>
                            </li>
                            <li class="nav-item" style="padding-top: 9px;">
                                <a class="navbar-icon text-decoration-none text-white pt-3" href="/Anime"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section style="color: #fff;">
        <h1>Kontak</h1>
        <hr class="bg-info border-2 border-top border-white" />
    </section>
    <h4 style="margin-top: 9rem;">Email : 5NIME@Gmail.com</h4>
    <h4>Untuk Pertanyaan Seputar Premium Aplikasi :</h4>

    <h2 style="margin-top: 9rem;">Chat WhatsApp</h2>
</div>
<?= $this->endSection(); ?>