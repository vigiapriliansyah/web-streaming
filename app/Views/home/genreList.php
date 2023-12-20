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
    <section>
        <div class="d-flex justify-content-center container">
            <div class="row gap-0 row-gap-3 column-gap-5">

                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;">Action</h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <li style="color: white;">Ansatsu Kyoushitsu: 365-nichi no Jikan</li>
                        <li style="color: white;">Black Butler: Book of the Atlantic</li>
                        <li style="color: white;">Date A Bullet: Nightmare or Queen</li>
                    </div>
                </div>

                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;">Comedy</h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <li style="color: white;">Black Butler: Book of the Atlantic</li>
                        <li style="color: white;">Chuunibyou demo Koi ga Shitai! Movie: Take On Me</li>
                        <li style="color: white;">Gintama: The Final</li>
                    </div>
                </div>
                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;">Drama</h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <li style="color: white;">Chuunibyou demo Koi ga Shitai! Movie: Take On Me</li>
                        <li style="color: white;">Howl no Ugoku Shiro</li>
                        <li style="color: white;">Evangelion: 3.0+1.0 Thrice Upon a Time</li>
                    </div>
                </div>
                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;">Romance</h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <li style="color: white;">Date A Bullet: Nightmare or Queen</li>
                        <li style="color: white;">Howl no Ugoku Shiro</li>
                        <li style="color: white;">Black Butler: Book of the Atlantic</li>

                    </div>
                </div>
                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;">Fantasy</h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <li style="color: white;">Howl no Ugoku Shiro</li>
                        <li style="color: white;">Evangelion: 3.0+1.0 Thrice Upon a Time</li>
                        <li style="color: white;">Gintama: The Final</li>
                    </div>
                </div>
                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;">Sci-Fi</h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <li style="color: white;">Chuunibyou demo Koi ga Shitai! Movie: Take On Me</li>
                        <li style="color: white;">Date A Bullet: Nightmare or Queen</li>
                        <li style="color: white;">Gintama: The Final</li>
                    </div>
                </div>
                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;">Shounen</h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <li style="color: white;">Ansatsu Kyoushitsu: 365-nIchi no Jikan</li>
                        <li style="color: white;">Gintama: The Final</li>
                        <li style="color: white;">Date A Bullet: Nightmare or Queen</li>
                    </div>
                </div>
                <div class="p-2 col-5">
                    <div class="col">
                        <h1 style="color: white;">School</h1>
                        <hr class="bg-danger border-2 border-top border-white" />
                        <li style="color: white;">Ansatsu Kyoushitsu: 365-nIchi no Jikan</li>
                        <li style="color: white;">Chuunibyou demo Koi ga Shitai! Movie: Take On Me</li>
                        <li style="color: white;">Howl no Ugoku Shiro</li>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>