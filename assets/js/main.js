$(function(){
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay: 3000,
    });

    var galeria = new Swiper('.swiper-galeria', {
        slidesPerView: 3,
        slidesPerColumn: 2,
        spaceBetween: 30,
        pagination: {
            el: '.slide-pagination',
            clickable: true,
        },
    });

    $('.dropdown-form').click(function(){
        $('.tab-container').slideToggle();
        $('.tab-container').css("display","flex");
        $('.dropdown-form i').toggleClass('animate-rotate')
    });

    $('.tab-content').click(function(){
        $(this).find('.tab-info').slideToggle();
        $(this).find('.tab-info').css("display","block");
    })

    // $(".tabulous-title").click(function() {
    //     $(this).parent().children().each(function() { 
    //         $('.tabulous-title').removeClass("bullet-active");
    //     });
    //     $(this).addClass("bullet-active");
    // });    

    $('.dropdown-endereco').click(function(){
        $('.mobile-dropdown').slideToggle();
        $('.mobile-dropdown').css("display","flex");
        $('.dropdown-endereco i').toggleClass('animate-rotate');
    });

    $(".bullet").click(function() {
        $(this).parent().children().each(function() { 
            $('.bullet').removeClass("bullet-active");
        });
        $(this).addClass("bullet-active");
    });

    $(".faq-container .ui-tabs-tab").click(function() {
        $(this).parent().children().each(function() { 
            $('.faq-container .ui-tabs-tab').removeClass("bullet-active");
        });
        $(this).addClass("bullet-active");
    });

    $(".bullet-link").click(function() {
        $(this).parent().children().each(function() { 
            $('.bullet-link').removeClass("bullet-active");
        });
        $(this).addClass("bullet-active");
    });

    $(".faq-container .faq-menu li").click(function() {
        $(this).parent().children().each(function() { 
            $('.faq-container .faq-menu li').removeClass("bullet-active");
        });
        $(this).addClass("bullet-active");
    });  

    $(".home-tabs-menu .tabulous-title").click(function() {
        $(this).parent().children().each(function() { 
            $('.home-tabs-menu .tabulous-title').removeClass("bullet-active");
        });
        $(this).addClass("bullet-active");
    });      

    $('.urna-btn').on("click", function(e){        
        $(this).closest('.urna-box').addClass('urna-open active');
    });

    $('.urna-hover-close').on("click", function(e){
        $(this).closest('.urna-box').removeClass('urna-open'); 
    }); 

    //Jquery Ui Tab vertical
    $( "#cemiterio-tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#cemiterio-tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" ); 
    
    //Jquery Ui Tab vertical
    $( "#map-tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#map-tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );   
    
    //Jquery Ui Tab std
    $( "#faq-tabs" ).tabs();
    
    //Jquery Ui Tab std
    $( "#plano-tabs" ).tabs();
    
    //Jquery Ui Tab std
    $( "#plano-tabs2" ).tabs();

    //Jquery Ui Tab std
    $( "#home-tabs" ).tabs(); 

    //Jquery Ui Tab std
    $( ".novidades-container #tabs" ).tabs();
});
