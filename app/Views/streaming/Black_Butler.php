<?= $this->extend('/layout/Streaming'); ?>
<?= $this->section('konten'); ?>

<!-- section -->
<section>
    <div class="center">
        <div class="content">
            <div class="row g-0 text-center">
                <div class="col-sm-6 col-md-12 single">
                    <h2>Streaming Black Butler Sub Indo</h2>
                    <div class="flex">
                        <img src="<?= base_url("assets/black.jpg") ?>" alt="">
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
                        <video src="<?= base_url('assets/black_butler.mp4') ?>" controls width="100%"></video>
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
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
                                Disqus.</a></noscript>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-4 recomen" style="background-color: #051527; height: 100vh; margin-top: 10px; border-radius: 10px;">
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
<?= $this->endSection(); ?>