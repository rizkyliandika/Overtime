(function ($) {
  "use strict";

  // NAVBAR
  $(".navbar-nav .nav-item .nav-link").click(function () {
    $("#navbarNav").collapse("hide");
  });

  // CUSTOM TOGGLE PASSWORD
  $("#eye-icon").click(function () {
    var x =document.getElementById('password-input');
    var sp = document.getElementById('eye-icon');
    if (x.type == 'password') {
      x.type = 'text';
      sp.classList.remove('bi-eye-slash');
      sp.classList.add('bi-eye');
    } else {
      x.type = 'password';
      sp.classList.add('bi-eye-slash');
      sp.classList.remove('bi-eye');
    }
  });

  // // CUSTOM SCROLL PRICING

  window.addEventListener("scroll", pricingDesc);

  function pricingDesc() {
    var pd = document.querySelectorAll(".pricing-description");
    for (let i = 0; i < pd.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = pd[i].getBoundingClientRect().top;
      var elementVisible = 150;
      if (elementTop < windowHeight - elementVisible) {
        pd[i].classList.add("active");
      } else {
        pd[i].classList.remove("active");
      }
    }
  }

  // CUSTOM LINK
  $(".custom-link").click(function () {
    var el = $(this).attr("href");
    var elWrapped = $(el);
    var header_height = $(".navbar").height() + 10;

    scrollToDiv(elWrapped, header_height);
    return false;

    function scrollToDiv(element, navheight) {
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop - navheight;

      $("body,html").animate(
        {
          scrollTop: totalScroll,
        },
        300
      );
    }
  });
})(window.jQuery);
