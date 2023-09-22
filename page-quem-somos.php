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
    
                <nav class="menu">
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

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>