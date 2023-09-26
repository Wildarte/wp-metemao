$(document).ready(function(){

    const btn_menu_mobile = document.querySelector('.btn_menu_mobile');
    const btn_close_menu = document.querySelector('.btn_close_menu');
    const nav_menu = document.querySelector('nav.menu');
    const link_logo = document.querySelector('.link_logo');
    const m_header = document.querySelector('header.header');

    $(".carousel_hero").owlCarousel({
        loop: false,
        margin:0,
        nav:true,
        autoplay:false,
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
        nav:false,
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
        //link_logo.classList.add('link_logo_fixed');
    });

    btn_close_menu.addEventListener('click', () =>{
        nav_menu.classList.remove('open_menu_mobile');
        //link_logo.classList.remove('link_logo_fixed');
    });

    document.addEventListener('scroll', () => {

        var scroll_now = window.scrollY

        if(scroll_now > 100){
            m_header.style.top = "-70px"
            /*
            if(scroll_now > 100){
                m_header.classList.add('header_fixed');
            }else{
                m_header.classList.remove('header_fixed');
            }
            */
            m_header.classList.add('header_fixed');
            console.log('in script: if')
        }else{
            m_header.style.top = "0";
            m_header.classList.remove('header_fixed');
            console.log('in script: else');
        }

        

    })

});