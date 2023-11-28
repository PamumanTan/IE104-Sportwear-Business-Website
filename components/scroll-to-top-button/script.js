
window.addEventListener('scroll', scrollFunction);

function scrollFunction() {
    if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
        document.getElementById('scrollToTopBtn').style.display = 'block';
    } else {
        document.getElementById('scrollToTopBtn').style.display = 'none';
    }
}

document.getElementById('scrollToTopBtn').addEventListener('click', scrollToTop);

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}