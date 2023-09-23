<?php
get_header();
//Template Name: Page Quem Somos
?>

    <main>
        <section class="bg-black hero2">
            <div class="container content_hero2 h-100 d-flex">
                <header class="bread-crumb d-flex">
                    <a href="">
                        <img src="assets/img/icon-home.png" alt="">
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
            <img class="img_float" src="assets/img/manifesto.png" alt="">
            <div class="container content_video_play">
                <img class="video_play_img" src="assets/img/video-play.png" alt="">
            </div>

            <div class="iframe_play_video">
                <div id="player"></div>
            </div>

            <script src="https://www.youtube.com/iframe_api"></script>
            <script>
                var player;
                // Função chamada quando a API do YouTube está pronta
                function onYouTubeIframeAPIReady() {
                  // Crie um objeto de player de vídeo
                  player = new YT.Player('player', {
                    height: '360',
                    width: '640',
                    videoId: 'ZQPO1UjxR6s', // Substitua 'VIDEO_ID' pelo ID do vídeo que deseja reproduzir
                    playerVars: {
                        autoplay: 0, // O vídeo não inicia automaticamente
                        controls: 1, // Mostrar controles do player
                    },
                  });
                }
            
                // Função chamada quando o player de vídeo do YouTube estiver pronto
                function onPlayerReady(event) {
                  // Reproduza o vídeo quando estiver pronto
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
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Lançamento de 3 unidades RED Burger</p>
                        </a>
                    </div>
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Prêmio Veja Comer e Beber 2020 para RED Burger</p>
                        </a>
                    </div>
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Lançamento de 5 unidades da Sorveteria da Ribeira</p>
                        </a>
                    </div>
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Prêmio Top of Mind 2019/2020 na Ribeira</p>
                        </a>
                    </div>
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Lançamento de 2 unidades da Bem Sorriso Odontologia e Estética</p>
                        </a>
                    </div>
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Conquista do TOP 1  da Supreme em vendas pelo Ifood na Bahia</p>
                        </a>
                    </div>
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Mais de 1 milhão de views com o clipe “Quero meu BB de volta” do artista Kart Love</p>
                        </a>
                    </div>
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Conquista do TOP 1 e TOP2 em vendas no Ifood com o Otta Sushi</p>
                        </a>
                    </div>
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Campanha Odissea One na CasaCor SP 2023</p>
                        </a>
                    </div>
                    <div class="card_simple">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <p>Prêmio Caymmi de melhor videoclipe em 2016 com Bonecas Pretas, da artista Larissa Luz</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="space-border-gray"></div>
        
    </main>

    
<?php get_footer(); ?>