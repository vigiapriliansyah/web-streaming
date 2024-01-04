<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('/font/css/all.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/style/home.css'); ?>">
    <script src="<?= base_url('player/playerjs.js'); ?>" type="text/javascript"></script>
</head>

<body>
    <!-- --navbar-- -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #1D1B34;">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="/home"><img src="<?= base_url('/assets/icon.png'); ?>" alt="icon" width="55" height="40"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/home">Home</a>
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
                                <form action="<?= base_url('home/search') ?>" method="post">
                                    <div class="search-box">
                                        <button type="submit" class="btn-search">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">
                                                <path fill="#ffffff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                            </svg>
                                        </button>
                                        <input type="text" name="search_keyword" class="input-search" placeholder="Cari Judul Anime....">
                                    </div>
                                </form>
                            </li>
                            <li class="nav-item" style="padding-top: 9px;">
                                <a class="navbar-icon text-decoration-none text-white pt-3" href="/Anime"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    <?= $this->renderSection('konten'); ?>


    <footer class="footer-distributed footer" style="background-color: #1D1B34;">
        <div class="footer-left">
            <im">
                <h3>About<span>5NIME</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    |
                    <a href="#">Anime List</a>
                    |
                    <a href="#">Genre List</a>
                    |
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">© 2023 5NIME Web Streaming Anime</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p>Subang</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+62 85-657-055-143</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="">5NIME@Gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Tentang 5NIME</span>
                Kami menawarkan beberapa movie anime yang dapat kalian akses dengan mudah.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script id="dsq-count-scr" src="//website-streaming-anime.disqus.com/count.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
    <script>
        $(document).ready(function() {
            // Intercept form submission
            $('form').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Get the search keyword from the input field
                var keyword = $('input[name="search_keyword"]').val();

                // Perform AJAX request to the search endpoint
                $.post('/home/search', {
                    search_keyword: keyword
                }, function(data) {
                    // Replace the current content with the search results
                    $('body').html(data);
                });
            });
        });
    </script>


</body>

</html>