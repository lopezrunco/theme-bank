// Scroll to top
goToTopBtn = document.getElementById("goToTop")
window.onscroll = function() {scrollFunction()}

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    goToTopBtn.style.display = "flex"
  } else {
    goToTopBtn.style.display = "none"
  }
}

function topFunction() {
  document.body.scrollTop = 0; // Safari
  document.documentElement.scrollTop = 0 // Chrome, Firefox, IE & Opera
}  