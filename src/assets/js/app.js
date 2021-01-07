import $ from 'jquery';
import "slick-carousel/slick/slick";
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

$('.headerslider').slick(
  {
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 300,
    dots: false,
    adaptiveHeight: true,
    fade: true,
    prevArrow:"<button type='button' class='slick-prev pull-left'></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'></button>"
  }
);
$('.serviceslider').slick(
  {
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    prevArrow:"<button type='button' class='slick-prev2 pull-left'></button>",
    nextArrow:"<button type='button' class='slick-next2 pull-right'></button>"
  }
);$('.mobile-slider').slick(
  {
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    prevArrow:"<button type='button' class='slick-prev2 pull-left'></button>",
    nextArrow:"<button type='button' class='slick-next2 pull-right'></button>"
  }
);$('.gallery-slider').slick(
  {
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    adaptiveHeight: true,
    fade: false,
    prevArrow:"<button type='button' class='slick-prev2'></button>",
    nextArrow:"<button type='button' class='slick-next2'></button>"
  }
);


$('.slider-title').hover( function() {
  $('.sliderwrapper').addClass( "hover" );
}, function() {
  $('.sliderwrapper' ).removeClass( "hover" );
} );

$('.menu-item').addClass('dropbtn')
$('.sub-menu').addClass('dropdown-content')

$('.is-accordion-submenu-item').onclick(function () {
  $('.nested').fadeOut()

})
