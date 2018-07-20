$(document).ready(function(){
    $('#sobre-inicio').addClass('animated slideInRightBig')
    $("#testemunho-slider").owlCarousel({
        animateOut: 'fadeOutLeft',
        animateIn: 'lightSpeedIn',
        items:2,
        margin:30,
        stagePadding:30,
        smartSpeed:450,
        rewind:true,
        autoplay:true,
        responsive:{
            0:{
                items:1,
                stagePadding:0,
                margin:250,
                mergeFit:true,
                animateOut: 'fadeOutUp',
                animateIn: 'fadeInUp'
            },
            600:{
                items:1,
                center:true
            },
            1360:{
                items:2,
                loop:false
            }
        }
    });

    var slider = $('#slider-ensaio');
    slider.owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items:1,
        smartSpeed:500,
        loop:true,
        autoplay:true,
        autoplayTimeout:3500,
        dots:true,
    });

    var sliderProdutos = $('#carousel-produto-parceiro');
    sliderProdutos.owlCarousel({
        animateOut: 'slideOutRight',
        animateIn: 'slideInLeft',
        items:1,
        autoHeight:true,
        autoHeightClass: 'owl-height',
        loop:true,
        autoplay:true,
        autoplayTimeout:5500,
        dots:true,
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
    
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
})