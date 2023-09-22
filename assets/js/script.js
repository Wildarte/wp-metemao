$(document).ready(function(){

    const btn_menu_mobile = document.querySelector('.btn_menu_mobile');
    const btn_close_menu = document.querySelector('.btn_close_menu');
    const nav_menu = document.querySelector('nav.menu');
    const link_logo = document.querySelector('.link_logo');

    $(".carousel_hero").owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $(".carousel_project").owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $(".list_posts").owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    
    btn_menu_mobile.addEventListener('click', () =>{
        nav_menu.classList.add('open_menu_mobile');
        link_logo.classList.add('link_logo_fixed');
    });

    btn_close_menu.addEventListener('click', () =>{
        nav_menu.classList.remove('open_menu_mobile');
        link_logo.classList.remove('link_logo_fixed');
    });

});