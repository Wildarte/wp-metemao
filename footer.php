<?php

$address = get_theme_mod('address');
$phone = get_theme_mod('phone');
$email = get_theme_mod('email');
$politicas = get_theme_mod('politica');

$instagram = get_theme_mod('instagram');
$youtube = get_theme_mod('youtube');
$linkedin = get_theme_mod('linkedin');
$tiktok = get_theme_mod('tiktok');
$twitter = get_theme_mod('twitter');

?>


<footer class="footer bg-black">

<div class="container d-flex content_footer">
    <div class="f-40 field_logo_footer">
        <p class="color-white">O propósito se dá com verdade! Acesse nossas redes.</p>

        <ul class="list_social">
            <li><a href="<?= $instagram ?>"><i class="bi bi-instagram"></i></a></li>
            <li><a href="<?= $youtube ?>"><i class="bi bi-youtube"></i></a></li>
            <li><a href="<?= $linkedin ?>"><i class="bi bi-linkedin"></i></a></li>
            <li><a href="<?= $tiktok ?>"><i class="bi bi-tiktok"></i></a></li>
            <li><a href="<?= $twitter ?>"><i class="bi bi-twitter"></i></a></li>
        </ul>
    </div>
    <div class="f-60 d-flex">
        <div class="f-33 col_footer">
            <div class="head_footer text-left">
                <h3 class="b-bottom-red color-white text-uppercase">endereço</h3>
            </div>
           

            <ul class="color-white">
                <li><?= $address != "" ? esc_html(get_theme_mod('address')) : "" ?></li>
            </ul>
        </div>
        <div class="f-33 col_footer">
            <div class="head_footer">
                <h3 class="b-bottom-red color-white text-uppercase">E-MAIL</h3>
            </div>

            <a href="mailto:<?= $email != "" ? $email : "" ?>"><?= $email != "" ? $email : "" ?></a>
        </div>
        <div class="f-33 col_footer">
            <div class="head_footer">
                <h3 class="color-white b-bottom-red text-uppercase">telefone / WHATSAPP</h3>
            </div>

            <a class="color-white" href="tel:<?= $phone != "" ? $phone : "" ?>"><?= $phone != "" ? $phone : "" ?></a>
        </div>
    </div>

    <div class="w-100 d-flex bottom_footer">
        <p class="color-white">© 2023 MTM Agência. Todos os direitos reservados.</p>
        <p><a href="<?= $politicas ?>" class="color-white b-bottom-red">Política de privacidade</a></p>
    </div>
</div>
</footer>

<a href="#" class="btn_whatsapp_float">
    <img src="<?= get_template_directory_uri() ?>/assets/img/whatsapp-fill.png" alt="">
    <p>Mande um Zap</p>
</a>

<div class="popup_show" id="popupCookies">
    <p>Nós usamos cookies e outras tecnologias semelhantes para melhorar a sua experiência em nossos serviços. Ao utilizar nossos serviços, você está ciente dessa funcionalidade. Conheça nosso <a href="#">Portal da Privacidade</a> e consulte nossa <a href="#">Política de Privacidade.</a></p>

    <a class="link_popup_show" href="#" id="btnAceitar">ACEITAR</a>
</div>

    <?php wp_footer(); ?>



</body>
</html>