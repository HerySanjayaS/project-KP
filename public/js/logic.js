$(document).ready(function() {

    $('.navbar-light .navbar-nav .nav-item .nav-link').click(function() {
        $('.navbar-light .navbar-nav .nav-item .nav-link.active').removeClass('active');
        $(this).addClass('active');
      });
});