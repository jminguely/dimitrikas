const navigation = () => {
  (function ($) {
    $('.toggle-navigation').click(function(e) {
      var targetId = $(this).attr('href').substr(1);
      $('#'+targetId).slideToggle();
      e.preventDefault();
    });
  }(jQuery));
};

export default navigation;
