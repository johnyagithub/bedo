$(function () {
  // hamburger icon
  document.querySelector('.hamburger').addEventListener('click', (e) => {
    e.currentTarget.classList.toggle('is-active');
  })

  $("#content").on("click", function () {
    $('.hamburger.is-active[data-target="#navbarMenu"]').click();
  });

  sliderBanner();
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