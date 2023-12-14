<?= $this->extend('/layout/Streaming'); ?>
<?= $this->section('konten'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <style>
    body {
        background-color: #302C5B;
    }

    .search-box {
        width: fit-content;
        height: fit-content;
        position: relative;
        margin-right: 20px;
    }

    .input-search {
        height: 50px;
        width: 50px;
        border-style: none;
        padding: 10px;
        font-size: 18px;
        letter-spacing: 2px;
        outline: none;
        border-radius: 25px;
        transition: all .5s ease-in-out;
        background-color: #1D1B34;
        padding-right: 40px;
        color: #fff;
    }

    .input-search::placeholder {
        color: rgba(255, 255, 255, .5);
        font-size: 18px;
        letter-spacing: 2px;
        font-weight: 100;
    }

    .btn-search {
        width: 50px;
        height: 50px;
        border-style: none;
        font-size: 20px;
        font-weight: bold;
        outline: none;
        cursor: pointer;
        border-radius: 50%;
        position: absolute;
        right: 0px;
        color: #ffffff;
        background-color: transparent;
        pointer-events: painted;
    }

    .btn-search:focus~.input-search {
        width: 250px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom: 1px solid rgba(255, 255, 255, .5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }

    .input-search:focus {
        width: 250px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom: 1px solid rgba(255, 255, 255, .5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }

    /* section */
    section {
        margin-top: 6rem;
        color: #fff;
        display: flex;
    }

    section .single h2 {
        margin: 0;
        font-family: Cuprum;
        font-size: 18px;
        padding: 5px;
        border: #dfdfdf 1px solid;
        background: #83848E;
        margin-bottom: 10px;
    }


    section .recomen {
        flex-direction: column;
        margin-left: 15px;
    }

    section .recomen h2 {
        text-align: center;
        margin-top: 5px;
    }

    .center {
        float: left;
        width: 800px;
        margin: auto;
    }

    .content {
        padding: 10px;
        background: #051527;
        float: left;
        margin-top: 10px;
        margin-bottom: 10px;
        border-radius: 10px;
    }

    .content .single h2 {
        text-align: left;
    }

    .content p {
        text-align: justify;
    }

    .content .flex .text .text-right {
        margin-left: 10px;
    }



    /* --img-- */
    .flex {
        display: flex;
    }


    .recommend ul li a {
        color: #fff;
        text-decoration: none;
    }

    /* video */
    .video {
        margin-top: 6rem;
    }

    /* ---comment-- */
    .comment {
        margin-top: 7rem;
    }

    .comment h1 {
        float: left;
        font-size: 30px;
    }

    .btn {
        float: left;
    }

    @media (max-width:900px) {
        section {
            flex-direction: column;
            align-items: center;
        }

        .center {
            width: 100%;
        }

        .recomen {
            margin: 15px 0;
            display: none;
        }
    }
    </style>
</head>

<body>
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
                                            xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                            fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
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

        <!-- section -->
        <section>
            <div class="center">
                <div class="content">
                    <div class="row g-0 text-center">
                        <div class="col-sm-6 col-md-12 single">
                            <h2>Streaming Black Butler Sub Indo</h2>
                            <div class="flex">
                                <img src="<?= base_url("assets/black.jpg")?>" alt="">
                                <div class="text">
                                    <div class="text-right">
                                        <p>Judul : Black Butler: Book of the Atlantic</p>
                                        <p>Genre : Action, Fantasy, Mystery</p>
                                        <p>Rating : 8.25</p>
                                        <p>Status : Finished Airing</p>
                                        <p>Tahun : 2017</p>
                                    </div>
                                </div>
                            </div>
                            <p>Sinopsis : Semua siap untuk petualangan besar berikutnya untuk Ciel dan kepala pelayan
                                iblisnya, Sebastian! Setelah mendengar desas-desus tentang masyarakat aneh yang membawa
                                orang kembali dari kematian, keduanya menaiki kapal mewah Campania dalam perjalanan
                                perdananya untuk menyelidiki. Penyamaran di antara Masyarakat Aurora yang misterius,
                                mereka
                                menemukan wajah-wajah yang mereka kenal dan pemandangan yang tidak dapat mereka percayai
                                —
                                seorang wanita yang bangkit dari kematian! Tapi kejutan dengan cepat berubah menjadi
                                ketakutan ketika mayat yang berantakan itu menyerang. Dengan lebih banyak pertanyaan
                                daripada jawaban, Ciel dan Sebastian melawan bukan hanya satu mayat yang haus daging,
                                tetapi
                                ratusan. Lebih buruk lagi, penuai flamboyan Grell dan rekan barunya, Ronald Knox,
                                menghalangi jalan mereka. Waktu hampir habis untuk memecahkan misteri ini, dan jika duo
                                iblis tidak bertindak cepat, mereka akan menginjak perairan yang sangat kasar. Siapa
                                yang
                                berada di balik necromancy yang berani ini — dan apakah mereka siap untuk mengetahuinya?
                            </p>
                            <div class="video">
                                <video src="<?= base_url('assets/')?>" controls width="100%"></video>
                            </div>
                            <div class="comment">
                            </div>
                            <div class="com">
                                <div id="disqus_thread"></div>
                                <script>
                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document,
                                        s = d.createElement('script');
                                    s.src = 'https://website-streaming-anime.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a
                                        href="https://disqus.com/?ref_noscript">comments powered by
                                        Disqus.</a></noscript>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 recomen"
                style="background-color: #051527; height: 100vh; margin-top: 10px; border-radius: 10px;">
                <h2>Rekomendasi</h2>
                <hr>
                <div class="recommend">
                    <ul>
                        <li><a href="#">Akira</a></li>
                        <li><a href="#">Gintama: The Final</a></li>
                        <li><a href="#">Date A Bullet: Nightmare or Queen</a></li>
                        <li><a href="#">Ansatsu Kyoushitsu: 365-nIchi no Jikan</a></li>
                        <li><a href="#">Chuunibyou demo Koi ga Shitai! Movie</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <?= $this->endSection('konten'); ?>
</body>

</html>