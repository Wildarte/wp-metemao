<?php get_header();
//Template Name: contato
?>

    <main>
        <section class="bg-black hero-min">
            <div class="container content-hero-min">
                <header class="bread-crumb d-flex">
                    <a href="<?= home_url() ?>" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-home.png" alt="">
                    </a>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white">Contato</span>
                </header>

                <div class="p-20 bg-black"></div>

            </div>
        </section>

        <section class="bg-black">

            <div class="container d-flex content_page_contato">
                <div class="f-50">
                    <h1 class="title-md color-white title_page_contato">Vamos fazer acontecer?</h1>

                    <p class="text-lg color-white subtitle_page_contato">Prazer, somos a Mete Mão. Sua jornada pode começar agora!</p>
                </div>

                <div class="f-50">
                    
                    <div class="over_form_contact">

                        <?= do_shortcode('[contact-form-7 id="629fc7b" title="Formulário de contato 1"]') ?>

                        <!-- 

                        <form action="" method="post">

                            <label for="">Nome</label>
                            <input type="text" name="" id="" placeholder="Nome">

                            <label for="">Telefone</label>
                            <input type="text" name="" id="" placeholder="(00) 00000-0000">

                            <label for="">E-mail</label>
                            <input type="email" name="" id="" placeholder="seuemail@gmail.com">

                            <label for="">Mensagem</label>
                            <textarea name="" id="" cols="30" rows="5" placeholder="Gostaria de..."></textarea>

                            <button type="submit">Enviar Mensagem</button>

                        </form>
                         -->
                    </div>
                    

                </div>
               
            </div>

        </section>
        
        <div class="space-border-gray"></div>
    </main>

    
<?php get_footer() ?>