// 
// import './node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js';
// import './node_modules/lightbox2/dist/lightbox.js';
// 
$(document).ready(function () {
    videoBackgroundSize();
});

// adiciona efeito ao dar scroll
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $("#menu-site").addClass("menu-scroll");
    } else {
        $("#menu-site").removeClass("menu-scroll");
    }
});

// ajusta BG do video para banner
function videoBackgroundSize() {
    var aspectRatio = 56.25;
    var bleedValue = 25;    

    if($('.video-bg').length > 0){
        $('.video-bg').each(function() {
            var elementAspectRatio = ($(this).height()*100)/$(this).width();
            if(elementAspectRatio >= aspectRatio) {
                var elementWidth = (($(this).height()*100)/aspectRatio)+(bleedValue*2);
                var elementHeight = $(this).height()+(bleedValue*2);
                $(this).find('.video-container').height(elementHeight);
                $(this).find('.video-container').width(elementWidth);

                
            }else{
                var elementWidth = $(this).width()+(bleedValue*2);
                var elementHeight = (($(this).width()*aspectRatio)/100)+(bleedValue*2);
                $(this).find('.video-container').width(elementWidth);
                $(this).find('.video-container').height(elementHeight);
                console.log(elementHeight);
            }
        });
    }
}

//slide equipe
var equipe = new Swiper('.swiper-equipe', {
    slidesPerView: 2.5,
    spaceBetween: 15,
    speed: 1000,    
    // centeredSlides: true,    
    breakpoints: {
      360: {
        slidesPerView: 1.5,
      },
      576: {
        slidesPerView: 2.5,
      },
      640: {
        slidesPerView: 2.5,
      },
      768: {
        slidesPerView: 2.5,
      },

      992: {
        slidesPerView: 1.8,
      },
      1024: {
        slidesPerView: 1,
      },
      1200: {
        slidesPerView: 2.5,
      },
      1366: {
        slidesPerView: 2.5,
      },
    },
    
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

//slide atuação
var swiper = new Swiper(".area-atuacao__slider", {
    spaceBetween: 15,
    slidesPerView: 1.5,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});

// var swiper2 = new Swiper(".swiper-action2", {
//     spaceBetween: 10,
//     slidesPerView: 1,
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
//     thumbs: {
//         swiper: swiper,
//     },
// });

var swiper = new Swiper(".swiper-blog", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
      370: {
        slidesPerView: 1.5,
      },
      576: {
        slidesPerView: 2.5,
      },
      640: {
        slidesPerView: 2.5,
      },
      768: {
        slidesPerView: 2.5,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 2.5,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });

$(document).on('click', '.btn-menu-responsive', function (event) {
    $(this).addClass('openMenu');
    $('.body-menu-responsive').addClass('open');
    $('body').addClass('menu-ativo');
    // $('html').css('overflow-x', 'unset')
    //alert('teste');
});
//
$(document).on('click', '.openMenu', function (event) {
    $(this).removeClass('openMenu');
    $('.body-menu-responsive').removeClass('open');
    $('body').removeClass('menu-ativo');
    // $('html').css('overflow-x', 'hidden')
});

$('.navbar-site__link').on('click', function (event) {
    $('.body-menu-responsive').removeClass('open');
    $('.btn-menu-responsive').removeClass('openMenu');
    $('body').removeClass('menu-ativo');
});

$("a#videoBanner").fancybox();

$('[data-fancybox]').fancybox({
    youtube : {
        controls : 0,
        showinfo : 0
    },
    vimeo : {
        color : 'f00'
    }
});

$('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            // $("#menu-menu-principal .active").removeClass('active');
            // navbar-collapse collapse in
            $('html, body').animate({
                scrollTop: target.offset().top - 0
            }, 1000);
            return false;
        }
    }
});
//
let atuacaoMenu = document.querySelectorAll('.area-atuacao__js');
let atuacaoContent = document.querySelectorAll('.area-atuacao__content');
//
function displayContent(idContent){
    atuacaoContent.forEach(function (element, index) {
        // remove active class
        let id = element.dataset.idcontent;
        if( element.classList.contains('area-atuacao__content--active') ){
            element.classList.remove('area-atuacao__content--active');
        }
        // add active class
        if(idContent == id){
            document.getElementById(idContent).classList.add('area-atuacao__content--active');
        }
    });
}
//
atuacaoMenu.forEach(function(element, index){
    element.addEventListener('click', function(e){
        let target = this.dataset.target;
        displayContent(target);
        e.preventDefault();
    })
});
