var EnPointe = EnPointe || {};

EnPointe.script = (function ($) {
  var _contactValidation = function (param) {
    var contactForm = $(param.form),
      reqField = "This field is required.";

    contactForm.validate({
      rules: {
        cemail: {
          required: true,
          email: true,
        },
        cname1: "required",
        cmsg: "required",
      },
      messages: {
        cemail: {
          required: reqField,
          email: "Invalid Email Address.",
        },
        cname1: reqField,
        cmsg: reqField,
      },
      focusInvalid: false,
      errorElement: "span",
      errorPlacement: function (error, element) {
        error.addClass("err-block");
        error.insertAfter(element);
        if (!element.attr("placeholder").val) {
          element.removeAttr("placeholder");
        }
      },
      highlight: function (element, errorClass, validClass) {
        $(element)
          .parents(".input-group")
          .addClass("has-error")
          .removeClass("has-primary");
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element)
          .parents(".input-group")
          .addClass("has-primary")
          .removeClass("has-error");
      },
      submitHandler: function (form) {
        $(form).append(
          '<div class="loading"><img src="images/ajax-loader.gif" alt="Please wait..."></div>'
        );
        $.ajax({
          type: "POST",
          url: "send.php",
          data: $(form).serialize(),
          success: function () {
            $(".loading").remove();
            $(form).append(
              '<div id="form-msg">Your message has been sent successfully. Thank you!</div>'
            );
            $(form)[0].reset();
            setTimeout(function () {
              $("#form-msg").slideToggle(function () {
                $(this).remove();
              });
            }, 10000);
          },
        });
        return false; // required to block normal submit since we used ajax
      },
    });
  };

  var _init = function (param) {
    var animateToTop = function () {
      $("html,body").animate(
        {
          scrollTop: 0,
        },
        700
      );
    };

    var checkScroll = function () {
      var yOffset = $(window).scrollTop();
      var breakpoint = 50;

      if (yOffset >= breakpoint) {
        $(".navbar").addClass("active");
        $(".back-to-top").addClass("active");
      } else {
        $(".navbar").removeClass("active");
        $(".back-to-top").removeClass("active");
      }
    };

    $(document).ready(function () {
      // $(".enpointe-con").smoothWheel();

      checkScroll();
      $(window).scroll(checkScroll);

      $(".back-to-top").on("click", function (e) {
        e.preventDefault();
        animateToTop();
      });

      $(".navbar-toggle").click(function () {
        $(".navbar-toggle").toggleClass("active");
      });
    });
  };
  return {
    contactValidation: _contactValidation,
    init: _init,
  };
})(jQuery);

jQuery(document).ready(function ($) {
  EnPointe.script.init({});
});
