// loading page

// loading page
window.addEventListener("load", function () {
    $(window).ready(function () {
        $(".loader").fadeOut(1200, function () {
            $("body").css("overflow", "auto");
            $(".loading-spiner").fadeOut(1500);
        });
    });
});

// animation
wow = new WOW({
    boxClass: "animate__animated", // default
    animateClass: "animated", // default
    offset: 0, // default
    mobile: true, // default
    live: true, // default
});
wow.init();

// owl carousel
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,

    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});

// AOS ANIMATION
AOS.init({
    duration: 800,
    anchorPlacement: "center-bottom",
});

// smoth header
header = document.querySelector(".header")
window.addEventListener('scroll', function () {
    if (window.scrollY > 150) {
        header.classList.add("header2")
    } else {
        header.classList.remove("header2")
    }
});

// color the header linkes

const nav_links = document.querySelectorAll(".nav-item");
const sections = document.querySelectorAll(".sec");
function updateNavigation() {
    sections.forEach(function (section, index) {
        const sectionTop = section.offsetTop - header.offsetHeight;
        const sectionBottom = sectionTop + section.offsetHeight;
        if (
            window.pageYOffset >= sectionTop &&
            window.pageYOffset <= sectionBottom
        ) {
            // Add link-bg class to the current section's navlink, and remove from others
            nav_links.forEach(function (link) {
                link.classList.remove("link-bg");
            });
            nav_links[index].classList.add("link-bg");
        }
    });
}

window.addEventListener("scroll", function () {
    updateNavigation();
});
// ## //


// image glightbox
const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true,
    preload:true
});

