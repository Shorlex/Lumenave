/*********Menu */
const navLink = document.querySelectorAll(".nav-link");
const menu = document.querySelectorAll(".menu");

for (let x = 0; x < navLink.length; x++) {
  navLink[x].addEventListener("click", () => {
    const active = document.querySelector(".active");
    if (active && active !== navLink[x]) {
      active.classList.remove("active");
    }
    navLink[x].classList.toggle("active");

    for (let y = 0; y < menu.length; y++) {
      if (
        navLink[x].classList.contains("active") &&
        menu[y].getAttribute("data-number") ===
          navLink[x].getAttribute("data-number")
      ) {
        menu[y].style.display = "block";
      } else {
        menu[y].style.display = "none";
      }
    }
  });
}

/*******Sub-Menu */
const menuLink = document.querySelectorAll(".menu-link");
const product = document.querySelectorAll(".product");
const solution = document.querySelectorAll(".solution");
const support = document.querySelectorAll(".support");
const solutionLink = document.querySelectorAll(".solution-link");
const supportLink = document.querySelectorAll(".support-link");
const moreCard = document.querySelector(".more-card");
const moreLink = document.querySelector(".more-link");

for (let i = 0; i < menuLink.length; i++) {
  menuLink[i].addEventListener("click", () => {
    const activelink = document.querySelector(".active-menu");
    if (activelink) {
      activelink.classList.remove("active-menu");
    }
    menuLink[i].classList.add("active-menu");

    for (let j = 0; j < product.length; j++) {
      if (
        product[j].getAttribute("data-number") ===
        menuLink[i].getAttribute("data-number")
      ) {
        product[j].style.display = "block";
      } else {
        product[j].style.display = "none";
      }
    }
  });
}

for (let k = 0; k < supportLink.length; k++) {
  supportLink[k].addEventListener("click", () => {
    const activelink = document.querySelector(".active-support");
    if (activelink) {
      activelink.classList.remove("active-support");
    }
    supportLink[k].classList.add("active-support");

    for (let l = 0; l < support.length; l++) {
      if (
        support[l].getAttribute("data-number") ===
        supportLink[k].getAttribute("data-number")
      ) {
        support[l].style.display = "block";
      } else {
        support[l].style.display = "none";
      }
    }
  });
}

for (let m = 0; m < solutionLink.length; m++) {
  solutionLink[m].addEventListener("click", () => {
    const activelink = document.querySelector(".active-solution");
    if (activelink) {
      activelink.classList.remove("active-solution");
    }
    solutionLink[m].classList.add("active-solution");

    for (let n = 0; n < solution.length; n++) {
      if (
        solution[n].getAttribute("data-number") ===
        solutionLink[m].getAttribute("data-number")
      ) {
        solution[n].style.display = "block";
      } else {
        solution[n].style.display = "none";
      }
    }
  });
}

moreLink.addEventListener("click", () => {
  moreCard.classList.toggle("show");
  if (moreCard.classList.contains("show")) {
    moreCard.style.maxHeight = "400px";
    moreLink.innerHTML = 'Show Less <i class="fa-solid fa-angle-up"></i>';
  } else {
    moreCard.style.maxHeight = "0";
    moreLink.innerHTML = 'Show More <i class="fa-solid fa-angle-down"></i>';
  }
});

/*****************End*********** */

/*****Solution/Services Selection********/
const solutionBtn = document.querySelectorAll(".solution");
const solutionDetails = document.querySelectorAll(".details");

for (let x = 0; x < solutionBtn.length; x++) {
  solutionBtn[x].addEventListener("click", (e) => {
    const et = e.target;
    const activeBtn = document.querySelector(".active-btn");
    if (activeBtn) {
      activeBtn.classList.remove("active-btn");
    }
    et.classList.add("active-btn");

    for (let y = 0; y < solutionDetails.length; y++) {
      if (
        solutionDetails[y].getAttribute("data-number") ===
        solutionBtn[x].getAttribute("data-number")
      ) {
        solutionDetails[y].style.maxHeight = "100vh";
      } else {
        solutionDetails[y].style.maxHeight = "0";
      }
    }
  });
}

/**************Swiper JS****************/
const swiper = new Swiper(".swiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  autoplay: {
    delay: 2000,
  },
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2,
    slideShadows: true,
  },
  spaceBetween: 50,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

/**************Swipper JS End*********** */

/**********Circular Progress Bar**********/
$(document).ready(function ($) {
  function animateElements() {
    $(".progressbar").each(function () {
      var elementPos = $(this).offset().top;
      var topOfWindow = $(window).scrollTop();
      var percent = $(this).find(".circle").attr("data-percent");
      var percentage = parseInt(percent, 10) / parseInt(100, 10);
      var animate = $(this).data("animate");
      if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
        $(this).data("animate", true);
        $(this)
          .find(".circle")
          .circleProgress({
            startAngle: -Math.PI / 2,
            value: percent / 100,
            thickness: 8,
            fill: {
              color: "#0095FC",
            },
          })
          .on(
            "circle-animation-progress",
            function (event, progress, stepValue) {
              $(this)
                .find("div")
                .text((stepValue * 100).toFixed(1) + "%");
            }
          )
          .stop();
      }
    });
  }

  // Show animated elements
  animateElements();
  $(window).scroll(animateElements);
});

/***********End***********/

/***************Infomation Security Navigation ************/

// const infoLink = document.querySelectorAll(".info-link");
// for (let x = 0; x <= infoLink.length; x++) {
//   infoLink[x].addEventListener("click", (e) => {
//     const et = e.target;
//     const activeInfo = document.querySelector(".active-nav");
//     if (activeInfo) {
//       activeInfo.classList.remove("active-nav");
//     }
//     et.classList.add("active-nav");
//   });
// }

const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll(".info-link");
window.onscroll = () => {
  var current = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (pageYOffset >= sectionTop - 60) {
      current = section.getAttribute("id");
    }
  });

  navLi.forEach((li) => {
    li.classList.remove("active-nav");
    if (li.classList.contains(current)) {
      li.classList.add("active-nav");
    }
  });
};


/*****End************** */
