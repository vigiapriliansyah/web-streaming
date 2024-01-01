<?= $this->extend('/layout/Streaming'); ?>
<?= $this->section('konten'); ?>

<!-- section -->
<section>
    <div class="center">
        <div class="content">
            <div class="row g-0 text-center">
                <div class="col-sm-6 col-md-12 single">
                    <h2>Streaming <?= $anime[0]['judul']; ?> Sub Indo</h2>
                    <div class="flex">
                        <img src="<?= base_url('uploud/images/' . $anime[0]['file_gambar']); ?>" alt="" height="400px" width="300px">
                        <div class="text">
                            <div class="text-right">
                                <p>Judul :<?= $anime[0]['judul']; ?></p>
                                <p>Genre : <?= $anime[0]['genres']; ?></p>
                                <p>Rating : <?= $anime[0]['rating']; ?></p>
                                <p>Tahun : <?= $anime[0]['tahun']; ?></p>
                            </div>
                        </div>
                    </div>
                    <p class="pt-3"><?= $anime[0]['deskripsi']; ?></p>
                    <div class="video">
                        <video controls width="100%" src="<?= base_url('uploud/video/' . $anime[0]['file_video']); ?>"></video>
                    </div>
                </div>
            </div>




            <div class="comment">
                <div class="pt-3" id="disqus_thread"></div>
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
                        s.src = 'https://EXAMPLE.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                        powered
                        by Disqus.</a></noscript>
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