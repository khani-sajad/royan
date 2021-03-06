$(document).ready(function(){

    $('[data-toggle="tooltip"]').tooltip();
    $('[data-tooltip="tooltip"]').tooltip();
    $('[data-calendar="persian"]').persianDatepicker();



    $('.owl-carousel').owlCarousel({
        rtl:true,
        loop:false,
        margin:10,
        nav:true,
        navText : ["",""],
        autoWidth:true,
        items:2,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});
