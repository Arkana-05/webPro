$(document).ready(function () {
  $(".hero-layout").slick({
    dots: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
  });

  $(".slider-testimoni").slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});


window.addEventListener("scroll", function () {
  const scrollBtn = document.querySelector(".scrollToTop");
  if (window.scrollY > 200) {
    scrollBtn.classList.add("show");
  } else {
    scrollBtn.classList.remove("show");
  }
});

document.querySelector(".scrollToTop").addEventListener("click", function (e) {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: "smooth" });
});
