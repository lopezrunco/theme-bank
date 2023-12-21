// Menu show & Hidden

const navMenu = document.getElementById('nav-menu'),
    toggleMenu = document.getElementById('nav-toggle'),
    closeMenu = document.getElementById('nav-close')

// Show
toggleMenu.addEventListener('click', () => {
    navMenu.classList.toggle('show')
})

// Hidden
closeMenu.addEventListener('click', () => {
    navMenu.classList.remove('show')
})

// Active & remove menu

const navLink = document.querySelectorAll('.navigation-bar-item')

function linkAction() {
    navLink.forEach(n => n.classList.remove('active-navigation'))
    this.classList.add('active-navigation')
    navMenu.classList.remove('show')
}

navLink.forEach(n => n.addEventListener('click', linkAction))

document.addEventListener('scroll', () => {
    document.querySelector('header').classList.add('scrolled')
})
navMenu.addEventListener('click', () => {
    document.querySelector('header').classList.add('scrolled')
})