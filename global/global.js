$(document).ready(function(){
    $(".slick-next").html('<i class="fas fa-chevron-right"></i>');
    $(".slick-prev").html('<i class="fas fa-chevron-left"></i>');
});

// scroll

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

// menu

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

// slider

$('.content-album-slider').slick({
    dots: false,
    infinite: true,
    speed: 200,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2
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
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

