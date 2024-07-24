var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nav-bar").style.top = "0";
  } else {
    document.getElementById("nav-bar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}




const translate = document.querySelectorAll(".translate");

window.addEventListener('scroll', () => {
    let scroll = window.pageYOffset;
    
    translate.forEach(element => {
        let speed = element.dataset.speed;
        element.style.transform = `translateY(${scroll * speed}px)`;
    })
})




const icon = document.querySelector(".nav-menu-btn");
const menu = document.querySelector(".nav-menu");

icon.addEventListener("click", () => {
    menu.classList.add("showMenu");
    /*icon.classList.toggle("cross");*/
});

const nav_close = document.querySelector(".nav-menu-close");
const menu_close = document.querySelector(".nav-menu");

nav_close.addEventListener("click", () => {    
    menu.classList.remove("showMenu");
    icon.classList.remove("cross");
})



$('.content-album-slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: "unslick"
    }
  ]
});

$(document).ready(function(){
    $(".slick-next").html('<i class="fas fa-chevron-right"></i>');
    $(".slick-prev").html('<i class="fas fa-chevron-left"></i>');
});