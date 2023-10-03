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
    

    //========================= menu mobile =============================================
    btn_menu_mobile.addEventListener('click', () =>{
        nav_menu.classList.add('open_menu_mobile');
        //link_logo.classList.add('link_logo_fixed');
    });

    btn_close_menu.addEventListener('click', () =>{
        nav_menu.classList.remove('open_menu_mobile');
        //link_logo.classList.remove('link_logo_fixed');
    });
    //========================= menu mobile =============================================


    //========================= scroll header ==================================================
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
        }else{
            m_header.style.top = "0";
            m_header.classList.remove('header_fixed');
        }

    });
    //========================= scroll header ==================================================

    
    //========================= carousel =======================================================
    if(document.querySelector('.carousel_hero')){
        if(window.matchMedia('(max-width: 500px)').matches){

            let title_hero_slide = document.querySelector('.title_hero_slide');
            let height_title_hero_slide = title_hero_slide.getBoundingClientRect().height;
            document.querySelector('.carousel_hero .owl-dots').style.top = (280+height_title_hero_slide)+"px";
    
        }else{
    
            let title_hero_slide = document.querySelector('.title_hero_slide');
            let height_title_hero_slide = title_hero_slide.getBoundingClientRect().height;
            document.querySelector('.carousel_hero .owl-dots').style.top = (340+height_title_hero_slide)+"px";
    
        }
    
        window.addEventListener('resize', () => {
          
            if(window.matchMedia('(max-width: 500px)').matches){
    
                setTimeout(function(){
                    let title_hero_slide = document.querySelector('.title_hero_slide');
                    let height_title_hero_slide = title_hero_slide.getBoundingClientRect().height;
                    document.querySelector('.carousel_hero .owl-dots').style.top = (280+height_title_hero_slide)+"px";
                }, 500);
        
            }else{
                
                setTimeout(function(){
                    let title_hero_slide = document.querySelector('.title_hero_slide');
                    let height_title_hero_slide = title_hero_slide.getBoundingClientRect().height;
                    document.querySelector('.carousel_hero .owl-dots').style.top = (340+height_title_hero_slide)+"px";
                }, 500)
        
            }
    
        })
    }
    

    //========================= carousel =======================================================


});






//===================== cookies ===========================================================
  // Fun&#231;&#227;o para exibir a pop-up de cookies
  function exibirPopupCookies() {
    var popup = document.getElementById("popupCookies");
    popup.style.display = "flex";
  }

  // Fun&#231;&#227;o para definir um cookie
  function definirCookie(nome, valor, expiracao) {
    var dataExpiracao = new Date();
    dataExpiracao.setTime(dataExpiracao.getTime() + (expiracao * 24 * 60 * 60 * 1000));
    var expires = "expires=" + dataExpiracao.toUTCString();
    document.cookie = nome + "=" + valor + "; " + expires + "; path=/";
  }

  // Fun&#231;&#227;o para aceitar cookies
  function aceitarCookies() {
    definirCookie("aceitou_cookies", "true", 30); // Exemplo: O cookie expira em 30 dias
    console.log("Cookies aceitos!");
    var popup = document.getElementById("popupCookies");
    popup.style.display = "none";
  }

  // Fun&#231;&#227;o para negar cookies
  function negarCookies() {
    definirCookie("aceitou_cookies", "false", 1)
    console.log("Cookies negados!");
    var popup = document.getElementById("popupCookies");
    popup.style.display = "none";
  }

  function verificarCookie(nome) {
      var cookies = document.cookie.split(";");

      for (var i = 0; i < cookies.length; i++) {
          var cookie = cookies[i].trim();
          if (cookie.indexOf(nome + "=") === 0) {
          // O cookie foi encontrado
          return true;
          }
      }

      // O cookie n&#227;o foi encontrado
      return false;
  }

// Event listener para quando o documento estiver pronto
document.addEventListener("DOMContentLoaded", function() {
      
      if(!verificarCookie('aceitou_cookies')){
          exibirPopupCookies();
      }

    // Event listener para o clique no bot&#227;o "Aceitar"
    document.getElementById("btnAceitar").addEventListener("click", function(e) {
        e.preventDefault();
        aceitarCookies();
    });

});

if(!verificarCookie('aceitou_cookies')){
    var popup = document.getElementById("popupCookies");
    popup.style.display = "flex";
}
//===================== cookies ===========================================================
