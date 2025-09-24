/* Navbar Menu */
let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};


/* Theme Toggler */
let themetoggler = document.querySelector('.theme-toggler');
let togglebtn = document.querySelector('.toggle-btn');

togglebtn.onclick = () => {
  themetoggler.classList.toggle('active');
};

document.querySelectorAll('.theme-toggler .theme-btn').forEach(btn => {
  btn.onclick = () => {
    let color = btn.style.backgroundColor;
    document.querySelector(':root').style.setProperty('--main-color', color);
  };
});


/* Reset on Scroll */
window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
  themetoggler.classList.remove('active');
};


/* Swiper Sliders */
var swiper = new Swiper(".home-slider", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2,
    slideShadows: true,
  },
  loop: true,
  autoplay: { delay: 1000, disableOnInteraction: false },
  speed: 1000,
});

var swiper1 = new Swiper(".review-slider", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  spaceBetween: 10,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    700: {
      slidesPerView: 2,
    },
    1050: {
      slidesPerView: 3,
    },
  },
});


/* Video Modal */
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("videoModal");
  const btn = document.getElementById("openVideo");
  const closeBtn = modal.querySelector(".close");
  const video = modal.querySelector("video");

  btn.addEventListener("click", function (e) {
    e.preventDefault();
    modal.classList.add("open");
    video.currentTime = 0;
    video.play().catch(() => {});
  });

  if (closeBtn) {
    closeBtn.addEventListener("click", function () {
      modal.classList.remove("open");
      video.pause();
    });
  }

  modal.addEventListener("click", function (e) {
    if (e.target === modal) {
      modal.classList.remove("open");
      video.pause();
    }
  });
});

/* Filter Buttons */
document.addEventListener("DOMContentLoaded", function() {
  const buttons = document.querySelectorAll(".filter-btn");
  const items = document.querySelectorAll(".box-container .box");

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      buttons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      const filter = btn.getAttribute("data-filter");

      items.forEach(item => {
        if (filter === "all" || item.classList.contains(filter)) {
          item.style.display = "block"; 
        } else {
          item.style.display = "none"; 
        }
      });
    });
  });
});




