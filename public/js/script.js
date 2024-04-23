$(function () {
  // hamburger icon
  document.querySelector('.hamburger').addEventListener('click', (e) => {
    e.currentTarget.classList.toggle('is-active');
  })

  $("#content").on("click", function () {
    $('.hamburger.is-active[data-target="#navbarMenu"]').click();
  });
});