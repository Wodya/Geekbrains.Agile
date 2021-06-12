$(document).ready (function () {
    let pathes = window.location.href;
    $.each($('.main-nav li a'), function (){
        if($(this).attr('href') == pathes) {
           $(this).addClass('active-page');
           $(this).addClass('disabled-link');
        }
    })
});
