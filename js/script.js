jQuery(document).ready(function($) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut

  //Scroll events
  $(window).scroll(function() {
    // Add --scrolled modifier to .header__upper and .header__lower when user scrolls past .header__upper
    var scrollPoint = $(".header__upper").height() + 100;
    if( $(this).scrollTop() > scrollPoint) {
      //$(".header__upper").addClass("header__upper--scrolled");
      $(".header__lower").addClass("header__lower--scrolled");
      //$(".container").addClass("container--scrolled");
    //}else if ($(this).scrollTop() < scrollPoint){
    } else {
      //$(".header__upper").removeClass("header__upper--scrolled");
      $(".header__lower").removeClass("header__lower--scrolled");
      //$(".container").removeClass("container--scrolled");
    }
    // Display .back-to-top when user scrolls past a point
    if ($(this).scrollTop() > 300) {
      $('.back-to-top').fadeIn();
    } else {
      $('.back-to-top').fadeOut();
    }
  });
  //Click event to scroll to top
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });

});