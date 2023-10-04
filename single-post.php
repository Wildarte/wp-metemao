<?php
get_header();
?>


    <main>
        <section class="bg-black hero-min">
            <div class="container content-hero-min">
                <header class="bread-crumb d-flex">
                    <a href="<?= home_url() ?>" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/icon-home.png" alt="">
                    </a>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white">Blog</span>
                    <i class="bi bi-arrow-right color-white"></i>
                    <span class="color-white"><?= get_the_title() ?></span>
                </header>

                <div class="p-20 bg-black"></div>

            </div>
        </section>

        <section class="bg-black">

            <div class="container-sm">

                <header class="head_post">
                    <h1 class="title_post color-white"><?= get_the_title() ?></h1>

                    <img src="<?= get_the_post_thumbnail_url(null, 'head_post') ?>" alt="">
                </header>

                <div class="container-post content_post d-flex">

                    <?php
                        the_content()
                    ?>

                    <p>Fusce ultricies, ante in maximus volutpat, tortor massa accumsan tellus, a vestibulum sem odio ut dolor. Nam porta odio at maximus sagittis. Nulla a dui molestie orci interdum convallis. In iaculis rhoncus risus, non rhoncus quam fringilla vel. Duis in hendrerit justo, vitae imperdiet ipsum. Pellentesque rhoncus rhoncus justo at ultrices. Ut maximus lectus at tincidunt ornare. Proin a metus vel odio gravida posuere. Phasellus ipsum ante, maximus in dolor a, dignissim aliquet turpis. Fusce viverra justo ut mi ultrices consequat. Proin viverra augue eu ligula imperdiet elementum. In a vehicula magna, ut sollicitudin arcu. Etiam quis turpis non odio viverra posuere quis nec elit.</p>
                    
                    <p>Pellentesque tincidunt id libero sed ultrices. Phasellus sodales quam quis risus finibus consectetur. Nullam sagittis, nisl ut tincidunt blandit, est massa commodo ipsum, vitae pharetra leo sem vulputate velit. Aenean nec dolor nisi. Etiam nec est sit amet lectus auctor efficitur vel non nisl. Ut vitae odio ut eros fermentum efficitur. In vel lacus eu justo rutrum iaculis. Quisque tempor interdum molestie. Maecenas iaculis lectus eget tincidunt faucibus. Integer ac ante nec tortor cursus imperdiet eget id felis. Fusce vehicula, felis vel varius rutrum, lorem mauris egestas magna, ut interdum metus orci ut turpis. Curabitur tincidunt lobortis mi quis malesuada. Donec elementum arcu cursus, malesuada lacus ut, varius leo. Nullam non nibh ac sem vestibulum venenatis. Aenean sit amet nunc ut arcu commodo posuere.</p>
                        
                    <p>Curabitur tincidunt a mi quis gravida. In orci quam, luctus consectetur orci quis, vestibulum commodo orci. Nunc consequat libero eget lorem congue, non vestibulum orci malesuada. Aenean aliquet tincidunt felis, vitae ultricies turpis molestie in. Vivamus tincidunt augue non nisl gravida, a blandit orci pulvinar. Praesent vestibulum in tortor in pharetra. Sed blandit rhoncus lectus, eget rutrum tortor. Duis non dui euismod, tincidunt metus vel, convallis nisi. Duis congue enim eu elit consequat maximus. Nulla condimentum leo a lacus mattis elementum quis eget ante. Aenean sed mattis sapien. Suspendisse efficitur eros sit amet quam pulvinar, sit amet pretium dolor venenatis. Fusce fringilla urna sem, eu convallis turpis dictum at. Nullam lacinia mi sit amet turpis dapibus auctor.</p>

                    <blockquote>
                        <p></p>
                    </blockquote>

                    <p>Fusce ultricies, ante in maximus volutpat, tortor massa accumsan tellus, a vestibulum sem odio ut dolor. Nam porta odio at maximus sagittis. Nulla a dui molestie orci interdum convallis. In iaculis rhoncus risus, non rhoncus quam fringilla vel. Duis in hendrerit justo, vitae imperdiet ipsum. Pellentesque rhoncus rhoncus justo at ultrices. Ut maximus lectus at tincidunt ornare. Proin a metus vel odio gravida posuere. Phasellus ipsum ante, maximus in dolor a, dignissim aliquet turpis. Fusce viverra justo ut mi ultrices consequat. Proin viverra augue eu ligula imperdiet elementum. In a vehicula magna, ut sollicitudin arcu. Etiam quis turpis non odio viverra posuere quis nec elit.</p>
                    
                    <p>Pellentesque tincidunt id libero sed ultrices. Phasellus sodales quam quis risus finibus consectetur. Nullam sagittis, nisl ut tincidunt blandit, est massa commodo ipsum, vitae pharetra leo sem vulputate velit. Aenean nec dolor nisi. Etiam nec est sit amet lectus auctor efficitur vel non nisl. Ut vitae odio ut eros fermentum efficitur. In vel lacus eu justo rutrum iaculis. Quisque tempor interdum molestie. Maecenas iaculis lectus eget tincidunt faucibus. Integer ac ante nec tortor cursus imperdiet eget id felis. Fusce vehicula, felis vel varius rutrum, lorem mauris egestas magna, ut interdum metus orci ut turpis. Curabitur tincidunt lobortis mi quis malesuada. Donec elementum arcu cursus, malesuada lacus ut, varius leo. Nullam non nibh ac sem vestibulum venenatis. Aenean sit amet nunc ut arcu commodo posuere.</p>
                        
                    <p>Curabitur tincidunt a mi quis gravida. In orci quam, luctus consectetur orci quis, vestibulum commodo orci. Nunc consequat libero eget lorem congue, non vestibulum orci malesuada. Aenean aliquet tincidunt felis, vitae ultricies turpis molestie in. Vivamus tincidunt augue non nisl gravida, a blandit orci pulvinar. Praesent vestibulum in tortor in pharetra. Sed blandit rhoncus lectus, eget rutrum tortor. Duis non dui euismod, tincidunt metus vel, convallis nisi. Duis congue enim eu elit consequat maximus. Nulla condimentum leo a lacus mattis elementum quis eget ante. Aenean sed mattis sapien. Suspendisse efficitur eros sit amet quam pulvinar, sit amet pretium dolor venenatis. Fusce fringilla urna sem, eu convallis turpis dictum at. Nullam lacinia mi sit amet turpis dapibus auctor.</p>
                </div>

            </div>

        </section>
        
        <div class="space-border-gray"></div>
    </main>

    <script>
        const quote = document.querySelectorAll('.content_post blockquote');

        if(quote){

            quote.forEach((item) => {

                let first = item.firstChild;

                let img = document.createElement('img');
                img.classList.add('img_quote');
                img.src = "<?= get_template_directory_uri() ?>/assets/img/quote-left.png";

                item.insertBefore(img, first);

            });

            quote.forEach((item) => {

                let height_item = item.getBoundingClientRect().height;

                console.log('height: '+height_item);
                

            });
        }

        
    </script>
    
<?php get_footer(); ?>