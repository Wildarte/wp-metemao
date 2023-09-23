<?php
get_header();
//Template Name: Page Método MTM
?>


    <main>
        <section class="bg-black hero-min">
            <div class="container content-hero-min">
                <header class="bread-crumb d-flex">
                    <a href="" class="">
                        <img src="assets/img/icon-home.png" alt="">
                    </a>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white">Método MTM</span>
                </header>

                <div class="d-flex body-hero-min">
                    <div class="f-50 d-flex">
                        <h1 class="title-simple color-white f-70">Atuamos na construção de valor para marcas e pessoas através do Método MTM branding.</h1>
                    </div>
                    <div class="f-50 right_hero_min">
                        <p class="text-lg color-white">Conheça o Método.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-black">
            <div class="container">
                <div class="video_play container">
                    <img class="video_play_img" src="assets/img/video-play-metodo.png" alt="">
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
            </div>
        </section>

        <section class="bg-black">
            <div class="container content_padd">
                <div class="d-flex">
                    <div class="f-40">
                        <p class="title-simple color-white">Traduz os caminhos para trazer à empresa sua proposta de valor e formas de se relacionar com o mundo.</p>
                    </div>
                </div>

                <div class="d-flex list_card_simple2">
                    <div class="card_simple2">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <h4>Estratégia: conceitual e direcionamentos</h4>
                            <p>Pesquisamos, escutamos, estudamos e conceituamos negócios para transformarem-se em marcas fortes.</p>
                        </a>
                    </div>
                    <div class="card_simple2">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <h4>Tática: planejamento e contextos</h4>
                            <p>Organizamos e criamos o plano de ação que guiará os próximos passos da marca, tendo como foco três pilares: estratégia, inteligência criativa e dados.</p>
                        </a>
                    </div>
                    <div class="card_simple2">
                        <a href="" class="color-white d-flex">
                            <i class="bi bi-arrow-up-right"></i>
                            <h4>Operação: Relacionamento e comunicação</h4>
                            <p>Ser reconhecido como autoridade no mercado e criar uma legião de fãs são alguns dos resultados obtidos com um bom trabalho de gestão de marcas.</p>
                        </a>
                    </div>
                </div>
                <div class="d-flex">
                    <h2 class="title-sm-lg color-white text-uppercase f-70">A autoridade que você busca pode tornar-se realidade.</h2>
                </div>
            </div>
            
        </section>
        
        <div class="space-border-gray"></div>
    </main>

    
<?php get_footer(); ?>