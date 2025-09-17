let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

let themetoggler = document.querySelector('.theme-toggler');
let togglebtn = document.querySelector('.toggle-btn');

togglebtn.onclick = () => {
  themetoggler.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    themetoggler.classList.remove('active');
}

document.querySelectorAll('.theme-toggler .theme-btn').forEach(btn => {
  btn.onclick = () => {
    let color = btn.style.backgroundColor;
    document.querySelector(':root').style.setProperty('--main-color', color);
  }
});







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
    loop:true,
    autoplay:{delay:1000,disableOnInteraction:false}
  });

var swiper1= new Swiper(".review-slider",{
    slidesPerView: 1,
    grabCursor: true,
    loop:true,
    spaceBetween: 10,
    breakpoints: {
      0: {
      slidesPerView: 1,},
      700: {  
      slidesPerView: 2,
       },
      1050: {
      slidesPerView: 3,
       },
    },
    //loop:true,
    //autoplay:{
      //delay:5000,
      //disableOnInteraction:false}   
  });