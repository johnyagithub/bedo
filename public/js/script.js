$(function () {
  // hamburger icon
  document.querySelector('.hamburger').addEventListener('click', (e) => {
    e.currentTarget.classList.toggle('is-active');
  })

  $("#content").on("click", function () {
    $('.hamburger.is-active[data-target="#navbarMenu"]').click();
  });

  $("#form-search .box-Tag-search .btn:not(#btn-show,#btn-hide)").on("click", function () {
    $('#form-search .group-search .form-control').val($(this).text());
  });

  $("#form-search .box-Tag-search #btn-show").on("click", function () {
    $("#btn-show").hide();
    $("#btn-hide").show();
    $("#form-search span.b-toggle").nextUntil().show();
  });
  $("#form-search .box-Tag-search #btn-hide").on("click", function () {
    $("#btn-show").show();
    $("#btn-hide").hide();
    $("#form-search span.b-toggle").nextUntil().hide();
  });

  $(".box-header .b-fontsize > img").on("click", function () {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    $('body').css('font-size', $(this).data('font-size') || '');
  });

  $("[data-src='#download']").on("click", function () {
    $('#url-download').val($(this).data('url'));
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
  if (screen.width < 500 ||
    navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPod/i)) {
    sliderGallery();
  }

  $('[data-toggle="tooltip"]').tooltip()
  aos();
});

let sliderBanner = () => {
  $(".box-banner .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
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

let sliderGallery = () => {
  $(".box-gallery.owl-carousel").each(function () {
    $(this).owlCarousel({
      items: 1,
      margin: 0,
      nav: false,
      dots: false,
      lazyLoad: true
    });
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


let clickDownload = (This) => {
  var Form = This.closest("#download");
  var Select1 = Form.find('#exampleFormControlSelect1 option:selected');
  var Select2 = Form.find('#exampleFormControlSelect2 option:selected');
  var Input1 = Form.find('#exampleFormControlInput1');
  var Download = Form.find('#url-download');

  if (Select1.val() == "" || Select2.val() == "" || Input1.val() == "") {
    if (Select1.val() == "") {
      Form.find('#exampleFormControlSelect1').addClass('is-invalid');
    } else {
      Form.find('#exampleFormControlSelect1').removeClass('is-invalid');
    }
    if (Select2.val() == "") {
      Form.find('#exampleFormControlSelect2').addClass('is-invalid');
    } else {
      Form.find('#exampleFormControlSelect2').removeClass('is-invalid');
    }
    if (Input1.val() == "") {
      Form.find('#exampleFormControlInput1').addClass('is-invalid');
    } else {
      Form.find('#exampleFormControlInput1').removeClass('is-invalid');
    }
  } else {
    // เอาไปใช้
    console.log('วัตถุประสงค์: ' + Select1.val() + '\nหน่วยงาน/บริษัท: ' + Select2.val() + '\nอีเมล: ' + Input1.val() + '\nลิงค์ดาวน์โหลด: ' + Download.val());

    window.open(Download.val(), '_blank');

    setTimeout(function () {
      $('[type="reset"]').click()
    }, 500);

    $.fancybox.close();
  }
}
let changeThis = (This, t) => {
  if (t == 'select') {
    if (This.find('option:selected').val() != "") {
      This.removeClass('is-invalid');
    }
  } else {
    if (This.val() != "") {
      This.removeClass('is-invalid');
    }
  }
}

function aos() {
  AOS.init({
    once: true,
    duration: 800,
    easing: 'ease-in-sine',
  });
}