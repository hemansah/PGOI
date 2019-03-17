$(document).ready(function(){


/*scroll view*/
$('.scroll').wrap('<div class="scroll-group"></div>');
$('.scroll').css({'overflow':'hidden',height:'auto'});
$('.scroll-group').append($('.scroll').clone());
$('.scroll-group').wrap('<div class="scroll-wrap card"></div>');
$('.scroll-wrap').css({'overflow':'hidden'});

/*animate*/
var targetY = $('.scroll').eq(0).outerHeight();

var scroll = function(resetY){
  
     $('.scroll-group').animate({top:targetY*-1+'px'},6000,"linear", function(){
          $('.scroll-group').css({top:0});
          scroll();
     });
     
     $('.scroll-group').hover(function() { //mouseenter
        $('.scroll-group').stop(true, false);
    });
    $(".scroll-group").mouseleave(function(){
        scroll();
    });
}

 scroll();

});