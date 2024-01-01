<?= $this->extend('/layout/Streaming'); ?>
<?= $this->section('konten'); ?>

<!-- section -->
<section>
    <div class="center">
        <div class="content">
            <div class="row g-0 text-center">
                <div class="col-sm-6 col-md-12 single">
                    <h2>Streaming Black Butler Sub Indo</h2>
                    <?php foreach ($anime as $key): ?>
                    <div class="flex">
                        <img src="<?= base_url('assets/black.jpg' . $key['file_gambar']); ?>" alt="">
                        <div class="text">
                            <div class="text-right">
                                <p>Judul :<?= $key['judul']; ?></p>
                                <p>Genre :</p>
                                <p>Rating : <?= $key['rating']; ?></p>
                                <p>Status : Finished Airing</p>
                                <p>Tahun : <?= $key['tahun']; ?></p>
                            </div>
                        </div>
                    </div>
                    <p><?= $key['deskripsi']; ?>
                    </p>
                    <div class="video">
                        <video controls width="100%"
                            src="<?= base_url('assets/black_butler.mp4' . $key['file_video']); ?>"></video>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

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
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                    by
                    Disqus.</a></noscript>


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
<?= $this->endSection(); ?>