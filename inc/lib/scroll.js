currentPage = $(window).scrollTop() / $(window).height();
currentScroll = $(window).scrollTop();
/*$(window).scroll(function(){
    console.log('nigga');
    if($(window).scrollTop() > currentScroll){
        $("body, html").animate({scrollTop:100}, 500, 'swing');
    }
    
});

if(currentPage == 0){
    goTo(0);
}else if(currentPage == 1){
    goTo(1);
}else if(currentPage == 2){
    goTo(2);
}else if(currentPage == 3){
    goTo(3);
}
*/
$( window ).resize(function() {
    var winHeight = $(window).height();
    var scroll = currentPage * winHeight;
    $("body, html").animate({scrollTop:scroll}, 200, 'swing');
});

$(window).bind('mousewheel', function(e){
    if(e.originalEvent.wheelDelta /120 > 0) {
        if(currentPage > 0){
            goTo(currentPage-1);
        }
    }
    else{
        if(currentPage < 4){
            goTo(currentPage+1);
        }
    }
});

function goTo(toPage){
    if(currentPage != toPage){
        currentPage = toPage;
        $('.pop-animate').removeClass('pop-animate');
        $('.float').removeClass('animate');
        $('.img-move').removeClass('animate');
        var winHeight = $(window).height();
        var scroll = toPage * winHeight;
        $("body, html").animate({scrollTop:scroll}, 200, 'swing');
        $('.s-progress-point').removeClass('sel');
        $(`.s-progress-point[toPage = "${toPage}"]`).addClass('sel');
        var time = 100;
        $( '[ap = "'+toPage+'"] .s-code-block' ).each(function( index ) {
            var block = $(this); 
            setTimeout( function(){ block.addClass('pop-animate'); }, time);
            time += 100;
        });
        var time = 100;
        $( '[ap = "'+toPage+'"] .float' ).each(function( index ) {
            var block = $(this); 
            setTimeout( function(){ block.addClass('animate'); }, time);
            time += 100;
        });
        var time = 100;
        $( '[ap = "'+toPage+'"] .img-move' ).each(function( index ) {
            var block = $(this); 
            setTimeout( function(){ block.addClass('animate'); }, time);
            time += 100;
        });
    }
}
$(window).mousemove(function(event) {
    $( '.interactive' ).each(function( index ) {
        var intensity = parseFloat($(this).attr('intensity'));
        $(this).css({
            "margin-left": -(event.pageX * intensity),
            "margin-top": -(event.pageY * intensity)
          });
    });
});
  