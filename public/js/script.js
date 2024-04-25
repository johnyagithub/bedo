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
      $(this).closest('.box-slide').find('.arrow-default .owl-dots').html($(this).find('.owl-dots').html());
    });
    $(this).closest('.box-slide').find('.arrow-default .owl-dots').html($(this).find('.owl-dots').html());
  });
  $('.box-slide .o-prev').click(function () {
    $(this).closest(".box-slide").find(".owl-prev").click();
  });
  $('.box-slide .o-next').click(function () {
    $(this).closest(".box-slide").find(".owl-next").click();
  });
}
