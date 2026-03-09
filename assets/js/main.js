let LangWsite = new(function() {
    //Detectamos en que dispositivo se navega
    this.isMobile = function() {
        var windowsCheck = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        if (windowsCheck < 768) {
            document.view = 'smart';
        } else {
            document.view = 'desk';
        }
    }
    //Header Affix
    this.scrolled = function(){
        var position = $(window).scrollTop();
        $(window).scroll(function() {
            //console.log(position);
            var scroll = $(window).scrollTop();
            if(scroll > position) {
                //ABAJO
                $('.navbar').removeClass('scrollup').css('top','-100%');
            } else {
                //ARRIBA
                if(position < 36){
                    $('.navbar').removeClass('scrollup').css('top','0');
                }else{
                    $('.navbar').addClass('scrollup').css('top','0');
                     }
            }
            position = scroll;
        });
    }
    //Menu hamburguesa
    this.navTrigger = function(){
        var navTrigger = document.querySelector('.nav-trigger');

        navTrigger.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.toggle('is-active');
        }, false);
    }
    //scroll-to-top
    this.scrollToTop = function(a) {
        a.preventDefault();

        if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
            window.scrollTo(0,0) // first value for left offset, second value for top offset
        }else{
                $("html, body").animate({ scrollTop: 0 }, 800);
             }

        return false;
    }
    //Smooth Scroll
    this.smoothScroll = function(b) {
        if (this.hash !== "") {
            b.preventDefault();
            // Store link's hash value into variable
            const hash = this.hash;
            // console.log(hash)
            // Animate html & body to the hash value position
            if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                window.scrollTo(0,$(hash).offset().top-$('.navbar').outerHeight()) // first value for left offset, second value for top offset
            }else{
                    $('html, body').stop(true,true).animate({
                        scrollTop: $(hash).offset().top-$('.navbar').outerHeight()
                    },1000);
                 }
        }
    }
    //Titulo animado en Head
    this.titleAnimatedHead = function() {
        let i = 0;
        const emojis = ["🚀", "🌕", "👨‍🚀", "🪐", "🌟"];

        setInterval(() => {
            document.title = emojis[i++ % emojis.length] + ' ' + title;

        }, 1000);
    }
    //función de arranque
    this.init = function() {
        $(window).resize(LangWsite.isMobile).trigger('resize');

        LangWsite.titleAnimatedHead();

        if($("nav").hasClass("navbar")){
            LangWsite.scrolled();
        }

        if($("button").hasClass("nav-trigger")){
            LangWsite.navTrigger();
        }
    }
});
$(document).ready(function() {

    LangWsite.init();

    $('.scroll-to-top').on('click', LangWsite.scrollToTop);
    $('a[href^="#"]').on('click', LangWsite.smoothScroll);
    $('[data-bs-toggle="tooltip"]').tooltip();

    jQuery.event.special.touchstart = {
        setup: function (_, ns, handle) {
            this.addEventListener('touchstart', handle, { passive: !ns.includes('noPreventDefault') });
        }
    };
    jQuery.event.special.touchmove = {
        setup: function (_, ns, handle) {
            this.addEventListener('touchmove', handle, { passive: !ns.includes('noPreventDefault') });
        }
    };
});

// Esperar a que el DOM esté listo
document.addEventListener('DOMContentLoaded', function () {

});

// Bloqueo vista de codigo HTML
document.addEventListener('keydown', e => {
    // Desactivar F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U
    if (e.key === 'F12' ||
        (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J')) ||
        (e.ctrlKey && (e.key === 'U' || e.key === 'u'))) {
            alert('Esta acción está deshabilitada para proteger el código fuente.');
            e.preventDefault();
    }
});