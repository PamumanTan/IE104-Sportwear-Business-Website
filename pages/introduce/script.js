// script.js

function BannerScroll() {
    var scrollPos = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;

    document.getElementById('banner').style.backgroundPosition = '50% ' + (-scrollPos / 4) + "px";
    document.getElementById('bannertext').style.marginTop = (scrollPos / 4) + "px";
    document.getElementById('bannertext').style.opacity = 1 - (scrollPos / 250);
}

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        BannerScroll();
    });
});
