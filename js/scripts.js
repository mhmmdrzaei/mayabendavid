$(function(){
    $(".tagcloud").append($(".tagcloud a").get().reverse());

	console.log("It's working");
        //bxslider 
    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        auto: true,
        adaptiveHeight: true,
        slideWidth: 700,
        
      
    });

//active Links 

    $(".tagcloud a").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("active");
        }
    });

    // $(".eachPost:nth-child(1)").css("background", "url(<?php the_post_thumbnail( 'large' ) ?> )")
    //dropdown menu 

        $('.fa-bars').click(function(){
                $('#nav-icon4').toggleClass('open');

                    $(".headerMenu").toggleClass('dropdown');

                    // $('.borderWhite').toggle();
                    // $(".fa-bars").toggleClass('fa-borderss');
                    $(".headerMenu a").on("click", function(){
                    // console.log('fuckyou');
                    $(".headerMenu").hide();


                    $("hamburger").hover(function() {
                        $(this).css("cursor", "pointer");
                    }, function() {
                        $(this).css("", "");
                    });

                }); 

            });
//Menu toggle
        $('.menuToggle').on('click', function(event) {
            event.preventDefault();
            $('.menuContent').toggleClass('away');
            $('#menuToggle').toggleClass('strikeMenu');



            

        });
        $('.fuckyou').on('click', function(event) {
            event.preventDefault();
            $('.menuContent').toggleClass('away');
            $('.Menuflex').toggleClass('menuFlexOpen');
            // $('#menuToggle').toggleClass('strikeMenu');



            

        });


});

function lightbox(idx) {
    //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
    var ninjaSldr = document.getElementById("ninja-slider");
    ninjaSldr.parentNode.style.display = "block";

    nslider.init(idx);

    var fsBtn = document.getElementById("fsBtn");
    fsBtn.click();
}

function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
    if (isFullscreen) {
        var ninjaSldr = document.getElementById("ninja-slider");
        ninjaSldr.parentNode.style.display = "none";
    }
}



