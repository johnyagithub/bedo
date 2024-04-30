$(function () {
  // hamburger icon
  document.querySelector('.hamburger').addEventListener('click', (e) => {
    e.currentTarget.classList.toggle('is-active');
  })

  $("#content").on("click", function () {
    $('.hamburger.is-active[data-target="#navbarMenu"]').click();
  });

  $(".box-header .b-fontsize > img").on("click", function () {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    $('body').css('font-size', $(this).data('font-size') || '');
  });

  if (localStorage.getItem('cookie') != 'allow') {
    setTimeout(function () { $('#cookie-con-head').addClass('show'); }, 5000);
  }

  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });

  sliderBanner();
  navDropdown();
  sliderItem();
  sliderMultimedia();
  arrowDefaultClick();
  if ($(window).width() > 1025) {
    Activitty();
  }

  $('[data-toggle="tooltip"]').tooltip()
  aos();
});

let sliderBanner = () => {
  $(".box-banner .owl-carousel").owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    lazyLoad: true,
    navText: ["<span class='material-symbols-outlined'>chevron_left</span>", "<span class='material-symbols-outlined'>chevron_right</span>"],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
    },
    afterAction: (current) => {
      current.find('video').get(0).play();
    }
  });
}

let navDropdown = () => {
  // Add slideDown animation to Bootstrap dropdown when expanding.
  $('.dropdown').on('show.bs.dropdown', function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // Add slideUp animation to Bootstrap dropdown when collapsing.
  $('.dropdown').on('hide.bs.dropdown', function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });
}

let iconSearch = (This) => {
  if (This.attr('aria-expanded') == 'true') {
    This.find('span').text('search');
  } else {
    This.find('span').text('close');
    setTimeout(() => {
      $("header #form-search form .form-control").focus();
    }, "1000");
  }
}

let setcookieuser = (x) => {
  $("#cookie-con-head").removeClass('show');
  if (x == 'allow') {
    localStorage.setItem('cookie', 'allow');
  }
}

let sliderItem = () => {
  $(".box-slide .owl-carousel").each(function () {
    $(this).owlCarousel({
      margin: 0,
      nav: false,
      dots: true,
      lazyLoad: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: $(this).attr('data-itemSlide-mobile') || 2
        },
        667: {
          items: $(this).attr('data-itemSlide-Tablet') || 3
        },
        900: {
          items: $(this).attr('data-itemSlide-pc') || 4
        }
      }
    }).on('changed.owl.carousel', function (event) {
      arrowDefault($(this));
    });
    arrowDefault($(this));
  });
  $('.box-slide .o-prev').click(function () {
    $(this).closest(".box-slide").find(".owl-prev").click();
  });
  $('.box-slide .o-next').click(function () {
    $(this).closest(".box-slide").find(".owl-next").click();
  });
}

let sliderMultimedia = () => {
  $(".box-multimedia .owl-carousel").each(function () {
    $(this).owlCarousel({
      items: 1,
      margin: 0,
      nav: true,
      dots: true,
      loop: true,
      lazyLoad: true,
      onTranslate: function (event) {
        var currentSlide, type, player, command;
        currentSlide = $('.box-multimedia .owl-item.active');
        type = currentSlide.find("iframe,video").data('type');
        player = currentSlide.find("iframe,video").get(0);
        command = {
          "event": "command",
          "func": "pauseVideo"
        };
        if (player != undefined) {
          if (type == 'youtube') {
            player.contentWindow.postMessage(JSON.stringify(command), "*");
          } else if (type == 'video') {
            player.pause();
          }
        }
      }
    }).on('changed.owl.carousel', function (event) {
      arrowDefault($(this));
    });
    arrowDefault($(this));
  });
  $('.box-multimedia .o-prev').click(function () {
    $(this).closest(".box-multimedia").find(".owl-prev").click();
  });
  $('.box-multimedia .o-next').click(function () {
    $(this).closest(".box-multimedia").find(".owl-next").click();
  });
}

let arrowDefault = (This) => {
  var div = This.closest('.box-slide,.box-multimedia').find('.arrow-default .owl-dots');

  div.html(This.find('.owl-dots').html());

  $(div.find('.owl-dot')).each(function (key) {
    $(this).attr('data-id', key);
  });
}

let arrowDefaultClick = () => {
  $(document).on("click", ".box-slide .owl-dots .owl-dot,.box-multimedia .owl-dots .owl-dot", function () {
    $(this).closest('.box-slide,.box-multimedia').find('.owl-carousel .owl-dot').eq($(this).data('id')).click();
  });
}

let Activitty = () => {
  $(".box-slide").mousemove(function (event) {
    var h = $(this).height();
    var w = $(this).width();
    var t = (event.clientY - (h / 2)) * -1;
    var l = (event.clientX - (w / 2)) * -1;
    $(".box-list-activity .owl-item.active .card-body > a").css("transform", "translate(" + l / 100 + "px, " + t / 100 + "px)");
    $(".box-list-activity .owl-item.active .b-text").css("transform", "translate(" + l / 40 + "px, " + t / 40 + "px)");
  });
}

function aos() {
  AOS.init({
    once: true,
    duration: 800,
    easing: 'ease-in-sine',
  });
}