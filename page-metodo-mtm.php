<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Mete Mão</title>
</head>
<body>
    
    <header class="header">
        <div class="content_header container">
            <div class="left_header d-flex">
                <a href="" class="link_logo">
                    <img src="assets/img/logo-red.png" alt="">
                </a>
    
                <nav class="menu menu_white">
                    <ul>
                        <li><a href="">Quem Somos</a></li>
                        <li><a href="">Método MTM</a></li>
                        <li><a href="">Serviços</a></li>
                        <li><a href="">Projetos</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav>
            </div>

            <a href="" class="btn-white text-uppercase">
                Orçamento
            </a>
        </div>
    </header>

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

    

    <footer class="footer bg-black">

        <div class="container d-flex content_footer">
            <div class="f-40">
                <p class="color-white">O propósito se dá com verdade! Acesse nossas redes.</p>

                <ul class="list_social">
                    <li><a href=""><i class="bi bi-instagram"></i></a></li>
                    <li><a href=""><i class="bi bi-youtube"></i></a></li>
                    <li><a href=""><i class="bi bi-linkedin"></i></a></li>
                    <li><a href=""><i class="bi bi-tiktok"></i></a></li>
                    <li><a href=""><i class="bi bi-twitter"></i></a></li>
                </ul>
            </div>
            <div class="f-60 d-flex">
                <div class="f-33 col_footer">
                    <div class="head_footer text-left">
                        <h3 class="b-bottom-red color-white text-uppercase">endereço</h3>
                    </div>
                   

                    <ul class="color-white">
                        <li>Rua Francisco Gonçalves, 1. Edf. Reitor Miguel - Sala 203 - Comércio Salvador / BA
                            40015-090</li>
                    </ul>
                </div>
                <div class="f-33 col_footer">
                    <div class="head_footer">
                        <h3 class="b-bottom-red color-white text-uppercase">E-MAIL</h3>
                    </div>

                    <a href="">contato@metemaoconteudo.com.br</a>
                </div>
                <div class="f-33 col_footer">
                    <div class="head_footer">
                        <h3 class="color-white b-bottom-red text-uppercase">telefone / WHATSAPP</h3>
                    </div>

                    <a class="color-white" href="(71) 99373-5002">(71) 99373-5002</a>
                </div>
            </div>

            <div class="w-100 d-flex bottom_footer">
                <p class="color-white">© 2023 MTM Agência. Todos os direitos reservados.</p>
                <p><a href="" class="color-white b-bottom-red">Política de privacidade</a></p>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>