//import Carousel from '../../common-sass/bootstrap/js/dist/carousel';
//import owlCarousel from '../../common-sass/owl.carousel/dist/owl.carousel';

let homeFunctions = new(function() {
    //Carrousel Home Owl
    this.carouselHomeOwl = function(){
        let owlCarouselHome = $('.owl-carousel-slider');
        $(owlCarouselHome).owlCarousel({
            items:1,
            dots:false,
            //navText:['<i class="fa-solid fa-arrow-left fa-fw fa-2xl"></i>','<i class="fa-solid fa-arrow-right fa-fw fa-2xl"></i>'],
            autoplay:true,
            autoplayTimeout:1600,
            autoplayHoverPause:true
        });
    };
    //función de arranque
    this.init = function() {
        //homeFunctions.carouselHomeOwl();
    }
});

$(document).ready(function() {
    homeFunctions.init();
});