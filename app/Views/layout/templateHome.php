<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('/font/css/all.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/style/home.css'); ?>">
</head>

<body>
    <!-- --navbar-- -->
    <nav>
        <div>
            <a href="/home"><img src="<?= base_url('/assets/icon.png'); ?>" alt="icon" width="55" height="40"></a>
        </div>
        <div class="sidebar" id="sidebar">
            <i class="fa fa-times" onclick="HideMenu()"></i>
            <ul>
                <li>
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
                <li class="login">
                    <a class="nav-link" href="/Anime">Login</a>
                </li>
            </ul>
        </div>
        <div>
            <div id="search-container">
                <input type="text" id="search-input" placeholder="Search..." />
                <button onclick="performSearch()">Search</button>
            </div>

            <button onclick="toggleSearch()">
                <i class="fas fa-search"></i>
            </button>

            <!-- Contact Icon (You can replace the src with the path to your contact icon) -->
            <a href="/Anime" class="contact"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg></a>
        </div>
        <i class="fa fa-bars" onclick="ShowMenu()"></i>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
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
    function toggleSearch() {
        var searchContainer = document.getElementById("search-container");
        searchContainer.style.display =
            searchContainer.style.display === "none" ? "block" : "none";
    }

    function performSearch() {
        var searchTerm = document.getElementById("search-input").value;
        // Perform your search logic here
        alert("Searching for: " + searchTerm);
    }

    function ShowMenu() {
        document.getElementById("sidebar").style.top = "0";
    }

    function HideMenu() {
        document.getElementById("sidebar").style.top = "-100vh";
    }
    </script>
</body>

</html>