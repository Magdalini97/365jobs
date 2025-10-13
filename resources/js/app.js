import Swiper from "swiper";
import { Navigation} from "swiper/modules";
import "swiper/css";
import Masonry from "masonry-layout";

let positionSwiper;
let servicesSwiper;
const DESKTOP_MIN = 576;

if (window.innerWidth >= DESKTOP_MIN) {
    positionSwiper = new Swiper(".positions-swiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            576: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
    });
}

if (window.innerWidth >= DESKTOP_MIN) {
    servicesSwiper = new Swiper(".services-swiper", {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 0,

        navigation: {
            nextEl: ".veldex",
            prevEl: ".velari",
        },
    });
    servicesSwiper = new Swiper(".services-swiper", {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 0,

        navigation: {
            nextEl: ".veldex",
            prevEl: ".velari",
        },
    });

    document.querySelector(".bar .one").addEventListener("click", () => {
        servicesSwiper.slideTo(0);
    });

    document.querySelector(".bar  .two").addEventListener("click", () => {
        servicesSwiper.slideTo(1);
    });
}

document.querySelectorAll(".bar button").forEach((btn) => {
    btn.addEventListener("click", () => {
        document
            .querySelectorAll(".bar button")
            .forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");
    });
});

/*var elem = document.querySelector(".grid");
var msnry = new Masonry(elem, {
    itemSelector: ".grid-item",
    gutter: 15,
});*/

document.querySelector("#icon").addEventListener("click", toggleNav);
function toggleNav() {
    var x = document.getElementById("myNavbar");
    x.classList.toggle("responsive");
}


/*document.querySelectorAll('.scroll-to-form').forEach((item) => {
    item.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(".looking-for-applicants").style.display =
            "none";
        document.querySelector(".looking-for-applicants-2").style.display =
            "block";
        window.scrollTo({ top: 0, behavior: "smooth"
        });
    });
});



const x = document.querySelector('.looking-for-applicants');
const y = document.querySelectorAll('.looking-for-applicants-2, .looking-for-applicants-3, .looking-for-applicants-4');

let current = 0;

document.querySelector('.next-step').addEventListener('click', () => {
    if (current === 0) {
        x.style.display = 'none';
    } else {
        y[current - 1].style.display = 'none';
    }

    if (current < y.length) {
        y[current].style.display = 'block';
        current++;
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
});

document.querySelectorAll('.velos').forEach(backBtn => {
    backBtn.addEventListener('click', (e) => {
        e.preventDefault();

        if (current > 0) {
            y[current - 1].style.display = 'none';
            current--;
            if (current === 0) {
                x.style.display = 'block';
            } else {
                y[current - 1].style.display = 'block';
            }

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    });
});

document.forms["forma-step1"].addEventListener("submit", (e) => {
    console.log('rtr')
    e.preventDefault();
    e.target.reportValidity();
});
*/


