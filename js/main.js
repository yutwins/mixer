"use strict";

// スライドショーの実装
window.addEventListener("DOMContentLoaded", () => {
    const fvSlider = new Swiper(".fv-slider", {
      loop: true,
      slidesPerView: "auto",
      speed: 8000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
    });
    fvSlider.init()
});
