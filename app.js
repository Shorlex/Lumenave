
/*******Loader******/
const loader = document.querySelector(".loading-screen");
function myLoader() {
    loader.style.display = "none";
}


/*********Menu */
const navLink = document.querySelectorAll(".nav-link");
const menu = document.querySelectorAll(".menu");

for(let x = 0; x < navLink.length; x++){
    navLink[x].addEventListener("click", () => {
        const active = document.querySelector(".active");
        if(active && active !== navLink[x]){
            active.classList.remove("active");
        }
        navLink[x].classList.toggle("active");

        for(let y = 0; y < menu.length; y++){
            if(navLink[x].classList.contains("active") && menu[y].getAttribute("data-number") === navLink[x].getAttribute("data-number")){
                menu[y].style.display = "block";
            } else {
                menu[y].style.display = "none";
            }
        }
    })
}


/*******Sub-Menu */
 const menuLink = document.querySelectorAll(".menu-link");
 const service = document.querySelectorAll(".service");
 const solution = document.querySelectorAll(".solution");
 const support = document.querySelectorAll(".support");
 const solutionLink = document.querySelectorAll(".solution-link");
const supportLink = document.querySelectorAll(".support-link");
const moreCard = document.querySelector('.more-card');
const moreLink = document.querySelector('.more-link');
const productLink = document.querySelectorAll('.product-link');
const product = document.querySelectorAll('.product');
const learn = document.querySelectorAll('.learn');
const learnLink = document.querySelectorAll('.learn-link');

 for(let i = 0; i < menuLink.length; i++){
    menuLink[i].addEventListener("click", () => {
        const activelink = document.querySelector(".active-menu");
        if(activelink){
            activelink.classList.remove("active-menu");
        }
        menuLink[i].classList.add("active-menu");

        for(let j = 0; j < service.length; j++){
            if (service[j].getAttribute("data-number") === menuLink[i].getAttribute("data-number")){
                service[j].style.display = "block";
            } else {
                service[j].style.display = "none";
            }
        }
    })
 }

 for(let k = 0; k < supportLink.length; k++){
    supportLink[k].addEventListener("click", () => {
        const activelink = document.querySelector(".active-support");
        if(activelink){
            activelink.classList.remove("active-support");
        }
        supportLink[k].classList.add("active-support");

        for(let l = 0; l < support.length; l++){
            if (support[l].getAttribute("data-number") === supportLink[k].getAttribute("data-number")){
                support[l].style.display = "block";
            } else {
                support[l].style.display = "none";
            }
        }
    })
 }

 for(let m = 0; m < solutionLink.length; m++){
    solutionLink[m].addEventListener("click", () => {
        const activelink = document.querySelector(".active-solution");
        if(activelink){
            activelink.classList.remove("active-solution");
        }
        solutionLink[m].classList.add("active-solution");

        for(let n = 0; n < solution.length; n++){
            if (solution[n].getAttribute("data-number") === solutionLink[m].getAttribute("data-number")){
                solution[n].style.display = "block";
            } else {
                solution[n].style.display = "none";
            }
        }
    })
}

for (let k = 0; k < productLink.length; k++) {
  productLink[k].addEventListener("click", () => {
    const activelink = document.querySelector(".active-product");
    if (activelink) {
      activelink.classList.remove("active-product");
    }
    productLink[k].classList.add("active-product");

    for (let l = 0; l < product.length; l++) {
      if (
        product[l].getAttribute("data-number") ===
        productLink[k].getAttribute("data-number")
      ) {
        product[l].style.display = "block";
      } else {
        product[l].style.display = "none";
      }
    }
  });
}
for (let k = 0; k < learnLink.length; k++) {
  learnLink[k].addEventListener("click", () => {
    const activelink = document.querySelector(".active-learn");
    if (activelink) {
      activelink.classList.remove("active-learn");
    }
    learnLink[k].classList.add("active-learn");

    for (let l = 0; l < learn.length; l++) {
      if (
        learn[l].getAttribute("data-number") ===
        learnLink[k].getAttribute("data-number")
      ) {
        learn[l].style.display = "block";
      } else {
        learn[l].style.display = "none";
      }
    }
  });
}
 
moreLink.addEventListener('click', () => {
    moreCard.classList.toggle('show');
    if (moreCard.classList.contains('show')) {
        moreCard.style.maxHeight = ('400px');
        moreLink.innerHTML = 'Show Less <i class="fa-solid fa-angle-up"></i>';
    } else {
        moreCard.style.maxHeight = ('0');
        moreLink.innerHTML = 'Show More <i class="fa-solid fa-angle-down"></i>';
    }
});

 /***********Testimonial******/
 var swiper = new Swiper('.swiper-container.swiper-testimonial', {
    slidesPerView: 3,
    spaceBetween: 30,
    autoplay: true,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next-test',
        prevEl: '.swiper-button-prev-test',
    },
	breakpoints: {
		1100: {
			slidesPerView: 2,
		},

		740: {
			slidesPerView: 1,
		}
	}
});
