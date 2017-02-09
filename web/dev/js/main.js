$(document).ready(function(){

    //side navbar
    // Initialize collapse button
    $('.button-collapse').sideNav({
        menuWidth: 300,
        edge:'left',
        closeOnClick: true,
        draggable: true
    });

    //accordion
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });

    $(document).on('click', '[data-lightbox]', lity);

    //smooth-scrolling
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

});




