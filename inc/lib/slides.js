currentSlide = 0;
function slide(x){
    var totalSlides = $('.s-ach-box').length - 1;
    if(currentSlide == totalSlides && x == 1){
        x = 0;
    }else if(currentSlide == 0 && x == -1){
        x = 0;
    }
    currentSlide += x;
    var vw = $(window).width();
    var sw = $('.s-ach-box').width();
    var slide = $('.s-ach-box-wrap');
    var currentLeft_ = slide.css('left');
    var currentLeft = parseFloat(currentLeft_.split('px')[0]);
    var newLeft = currentLeft - (((sw)+300)*x);
    slide.css('left',newLeft);
    
    
    if(currentSlide == totalSlides){
        $('.s-slide-control-button[onclick="slide(1)"]').css('color','grey');
        $('.s-slide-control-button[onclick="slide(-1)"]').css('color','#e2e2e2');
    }else if(currentSlide == 0){
        $('.s-slide-control-button[onclick="slide(-1)"]').css('color','grey');
        $('.s-slide-control-button[onclick="slide(1)"]').css('color','#e2e2e2');
    }else{
        $('.s-slide-control-button[onclick="slide(1)"]').css('color','#e2e2e2');
        $('.s-slide-control-button[onclick="slide(-1)"]').css('color','#e2e2e2');
    }
    
}