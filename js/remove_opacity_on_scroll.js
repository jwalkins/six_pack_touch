var header = $('section');
$(window).scroll(function() {
    header.addClass('lower-opacity');
    if($(this).scrollTop() === 0) {
        header.removeClass('lower-opacity');
    }
});