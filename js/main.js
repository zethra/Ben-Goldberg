function scroll(id) {
    $('html, body').stop().animate({
        scrollTop: $($('a[href=' + id +']').attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
}

$(document).ready(function() {

    $('#toTop').click(function() {
        scroll("#page-top");
    });
});