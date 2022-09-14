$(function () {
    $(document).scroll(function () {
      var $nav = $(".navbar");
      $nav.toggleClass('fixed-top', $(this).scrollTop() > $nav.height());
    });
});