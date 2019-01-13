$(document).ready(function(){
    $(window).bind('scroll', checkHeight)

})

function checkHeight(){
    let height = $(window).scrollTop()
    height > 240 ? showNavbarBackground():hideNavbarBackground()
    isVisible($('#team'), teamAnimation)
    isVisible($('#about'), aboutAnimation)
}

function showNavbarBackground(){
    $('#mainNav').removeClass('bg-transparent')
    $('#mainNav').addClass('bg-white')
    $('.navbar-light .nav-item .nav-link').css('color', 'rgba(0,0,0,.5)')
    $('.navbar-light .nav-item .nav-link').hover(function(e){
        $(this).css('color', e.type === 'mouseenter'? '#2C3590': 'rgba(0,0,0,.5)')
    })
}

function hideNavbarBackground(){
    $('#mainNav').removeClass('bg-white')
    $('#mainNav').addClass('bg-transparent')
    $('.navbar-light .nav-item .nav-link').css('color', 'white')
    $('.navbar-light .nav-item .nav-link').hover(function(e){
        $(this).css('color', e.type === 'mouseenter'? '#2C3590': 'white')
    })
}

function isVisible($obj, func) {
    let top = $(window).scrollTop();
    let bottom = top + $(window).height();
    let objTop = $obj.offset().top;
    let objBottom = objTop + $obj.height();

    if(objTop < bottom && objBottom > top) {
        func()
    }
}

function teamAnimation(){
    $('#team').addClass('appearAnimation')
}

function aboutAnimation() {
    $('#about-content').addClass('contentAnimation')
    $('#about-title').addClass('titleAnimation')
}