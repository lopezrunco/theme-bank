function fadeScroll() {
    let html = document.getElementsByTagName("html")[0]
    let fadeElement = document.getElementsByClassName("fadeElement")

    document.addEventListener("scroll", function () {
        let documentTop = html.scrollTop
        // Loops since the amount of fade elements
        for (i = 0; i < fadeElement.length; i++) {
            // Saves the pixel of the top of the elements to fade
            let topFadeElement = fadeElement[i].offsetTop
            // If the document top is greater than the element top, show the element (for more control, subtract a few seconds)
            if (documentTop > topFadeElement - 600) {
                fadeElement[i].style.opacity = 1
            }
        }
    })
}
fadeScroll()

function fadeAll() {
    let fadeElements = document.getElementsByClassName("fadeElement")
    for (let index = 0; index < fadeElements.length; index++) {
        fadeElements[index].style.opacity = 1
    }
}
