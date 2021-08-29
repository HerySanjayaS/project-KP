$(document).ready(function() {

    $('.navbar-light .navbar-nav .nav-link').click(function() {
        $('.navbar-light .navbar-nav .nav-link.active').removeClass('active');
        $(this).addClass('active');
      });
});