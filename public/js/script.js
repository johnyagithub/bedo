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

  sliderBanner();
  navDropdown();
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