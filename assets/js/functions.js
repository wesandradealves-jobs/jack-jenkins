jQuery(document).ready(function () {
    $(window).scroll(function(event) {
        $(".pg-home section,.pg-home .section").each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("animate"); 
            }
            //  else {
            //     el.removeClass("animate"); 
            // }
        });
    });  
    $('.owl-carousel').owlCarousel({
        loop: $('.owl-carousel .item').size() > 1 ? true:false,
        margin:100,
        dots:false,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            1200:{
                items:2
            }
        }     
    });
    $( ".owl-prev").html('<svg class="svg-icon" viewBox="0 0 20 20"><path fill="none" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788S18.707,9.212,18.271,9.212z"></path></svg>');
    $( ".owl-next").html('<svg class="svg-icon" viewBox="0 0 20 20"><path fill="none" d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788S1.293,9.212,1.729,9.212z"></path></svg>'); 
    $( ".pg-home nav a" ).each(function() {
        if($(this).attr("href")=="#"){
            $(this).attr("href","javascript:void(0)");
            $(this).attr("id",$(this).find("strong").text().replace(/ /g,'-').toLowerCase());
            $(this).on("click", function() {
                $("html, body").stop(true, false).animate({scrollTop: $("section#"+$(this).attr("id")).offset().top}, 500); 
            }); 
        }
    });    
    $( ".pg-interna nav a" ).each(function() {
        if($(this).attr("href")=="#"){
            $(this).attr("id",$(this).find("strong").text().replace(/ /g,'-').toLowerCase());
            $(this).attr("href","http://gabrieldegennaro.com.br/projects/jack_jenkins/#"+$(this).attr("id"));
        }
    });   
});

function mobileNavigation() {
    $("#mobileNavigation").toggleClass("toggle");
}

$(window).resize(function(){
    $(".toggle").removeClass("toggle");
    $(".tcon-transform").removeClass("tcon-transform");
});

if(window.location.hash) {
    if(window.location.hash=="#work-with-me"){
        $("html, body").stop(true, false).animate({scrollTop: $("section"+window.location.hash).offset().top+500}, 500); 
    } else {
        $("html, body").stop(true, false).animate({scrollTop: $("section"+window.location.hash).offset().top}, 500); 
    }
}  

transformicons.add('.tcon');
