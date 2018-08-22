//Get and play video

var video = document.querySelector('#myVideo'),
    playBtn = document.querySelector('#playBtn');
    
    function playBgVideo() {
        if(video.paused) {
            video.play();
            playBtn.innerHTML = "<i class='flaticon-music-player'></i>";
            document.querySelector(".content h2").style.opacity = "0";
            document.querySelector(".content p").style.opacity = "0";
            document.querySelector("#playBtn").classList.add("plaingVideo");
            
            
            
        } else {
            video.pause();
            playBtn.innerHTML = "<i class='flaticon-play'></i>";
            document.querySelector(".content h2").style.opacity = "1";
            document.querySelector(".content p").style.opacity = "1";
            document.querySelector("#playBtn").classList.remove("plaingVideo");
        }
    }
    
    playBtn.addEventListener("click" , function() {
        playBgVideo();
    }, false);
    
    
// slick slider comments-slider

$(document).ready(function(){
   $('.slider-about-us').slick({
       dots: true,
       prevArrow: '<i class="flaticon-back"></i>',
       nextArrow: '<i class="flaticon-next"></i>'
   }); 
});


$(document).scroll(function (e)
{
    var scrollTop = $(document).scrollTop();

    if (scrollTop > 0)
    {
        $('header').addClass('scrolled');
    } else
    {
        $('header').removeClass('scrolled');
    }


});

$(document).ready(function(){
    $('.gallery-masonry').lightGallery();
});