$(document).ready(function(){

    //side navbar
    // Initialize collapse button
    $('.button-collapse').sideNav({
        menuWidth: 300,
        edge:'left',
        closeOnClick: true
    });

    //accordion
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });
});



