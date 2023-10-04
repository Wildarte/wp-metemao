<?php
get_header();
//Template Name: Page Quem Somos
?>
    <main>
        <section class="bg-black hero2">
            <div class="container content_hero2 h-100 d-flex">
                <header class="bread-crumb d-flex">
                    <a href="<?= home_url() ?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-home.png" alt="">
                    </a>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white">Quem Somos</span>
                </header>

                <div class="d-flex h-100">
                    <div class="f-50 left_hero2">
                        <h1 class="title-md color-white">Da mente vem a ideia, da mão a criação.</h1>
                    </div>
                    <div class="f-50 right_hero2">
                        <p class="text-lg color-white">Somos de Salvador e desde 2017 conectando marcas e pessoas com propósito.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="video_play bg-black">
        <?php
                    $video_youtube = get_field('id_video_youtube');
                ?>
            <img class="img_float" src="<?= get_template_directory_uri() ?>/assets/img/manifesto.png" alt="">
            <div class="container video_play content_video_play">
                <!-- <img class="video_play_img" src="<?= get_template_directory_uri() ?>/assets/img/video-play.png" alt=""> -->
                <img class="video_play_img" src="https://img.youtube.com/vi/<?= $video_youtube ?>/maxresdefault.jpg" alt="">

                <img class="btn_play_img" src="<?= get_template_directory_uri() ?>/assets/img/play.png" alt="">
            </div>

            <div class="iframe_play_video">
                <div id="player"></div>
            </div>

            <script src="https://www.youtube.com/iframe_api"></script>
            <script>

                var player;

                <?php
                    $video_youtube = get_field('id_video_youtube');
                ?>

                let id_video = '<?= $video_youtube; ?>';
                
                function onYouTubeIframeAPIReady() {
                  
                  player = new YT.Player('player', {
                    height: '360',
                    width: '640',
                    videoId: id_video,
                    playerVars: {
                        autoplay: 0, 
                        controls: 1, 
                    },
                  });
                }
            
                function onPlayerReady(event) {
                  event.target.playVideo();

                }

                function playVideo() {
                    player.playVideo();
                    
                }

                function pauseVideo(){
                    player.pauseVideo();
                }

                document.querySelector('.video_play_img').addEventListener('click', () => {
                    document.querySelector('.iframe_play_video').classList.add('open_iframe_play');
                    playVideo();
                });
                document.querySelector('.btn_play_img').addEventListener('click', () => {
                    document.querySelector('.iframe_play_video').classList.add('open_iframe_play');
                    playVideo();
                });
                document.querySelector('.iframe_play_video').addEventListener('click', () => {
                    document.querySelector('.iframe_play_video').classList.remove('open_iframe_play');
                    pauseVideo();
                });
              </script>
        </section>

        <section class="bg-black section_conq">
            <div class="content_conq">
                <header class="d-flex">
                    <h2 class="title-sm color-white f-20">nossas conquistas</h2>

                    <div class="row-red f-80"></div>
                </header>

                <div class="d-flex">
                    <?php

                        $conqs = get_field('conquistas');

                        foreach($conqs as $conq):

                    ?>
                    <div class="card_simple">
                            <div class="icon_card_simple">
                                <img class="" src="<?= get_template_directory_uri() ?>/assets/img/arrow-line.svg" alt="">
                            </div>
                            
                            <p class="color-white d-flex"><?= $conq['conquista'] ?></p>
                        
                    </div>
                    
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <div class="space-border-gray"></div>
        
    </main>

    
<?php get_footer(); ?>