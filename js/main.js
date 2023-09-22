let photoSwiper = new Swiper(".swiper.is-photo", {
  effect: "flip",
  loop: true,
  grabCursor: true,
  speed: 1000,
  slidesPerView: 1, // 콘텐츠 슬라이더도 1개씩 보이도록 설정
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

let contentSwiper = new Swiper(".swiper.is-content", {
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  loop: true,
  grabCursor: true,
  speed: 1000,
  slidesPerView: 1, // 콘텐츠 슬라이더도 1개씩 보이도록 설정
  navigation: {
    nextEl: ".swiper-main-next",
    prevEl: ".swiper-main-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

photoSwiper.controller.control = contentSwiper;
contentSwiper.controller.control = photoSwiper;

var preSwiper = new Swiper(".swiper.is-preimg", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  grabCursor: true,
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: true,
  },
  navigation: {
    nextEl: ".swiper-arrow-next",
    prevEl: ".swiper-arrow-prev",
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
      spaceBetween: 50,
    },
    429: {
      // centeredSlides: true,
      slidesPerView: 2,
      // slidesPerView: "auto",
      // centeredSlides: true,
      spaceBetween: 50,
    },
    769: {
      centeredSlides: false,
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1023: {
      // centeredSlides: false,
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1399: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1599: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1999: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});

let brandSwiper = new Swiper(".swiper.is-brand", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  grabCursor: true,
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: true,
  },
  breakpoints: {
    767: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1023: {
      slidesPerView: 5,
      spaceBetween: 40,
    },
    1279: {
      slidesPerView: 6,
      spaceBetween: 57,
    },
  },
});

const nav = document.querySelector(".js-sticky-widget");
const navTop = nav.clientTop;

function stickyNavigation() {
  console.log("navTop = " + navTop);
  console.log("scrollY = " + window.scrollY);

  if (window.scrollY >= navTop) {
    // nav offsetHeight = height of nav
    document.body.style.paddingTop = nav.offsetHeight + "px";
    document.body.classList.add("fixed-nav");
  } else {
    document.body.style.paddingTop = 0;
    document.body.classList.remove("fixed-nav");
  }
}

window.addEventListener("scroll", stickyNavigation);
