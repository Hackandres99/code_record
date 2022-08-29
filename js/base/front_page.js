const backgrounds = document.querySelectorAll('.front_page_img')
const phrases = document.querySelectorAll('.front_page_phrase')

let background_counter = 1
let phrase_counter = 1

backgrounds.forEach((e, i) => {
    // adjusting the width of background container
    if (i === backgrounds.length - 1) {
        e.parentNode.style.width = `${i + 1}00%`
    }
    // Moving the backgrounds one under the other
    if (i > 0) {
        e.style.zIndex = -1 - i
        e.style.transform = `translateX(-${i}00%)`
    }
})

// Changing the phrase every 7 seconds after 
phrases[0].style.opacity = '1'
setInterval(() => {
    if (phrase_counter === phrases.length) phrase_counter = 0
    phrases.forEach(e => e.style.opacity = '0')
    phrases[phrase_counter].style.opacity = '1'
    phrase_counter++
}, 7000);

// Changing the background every 7 seconds after 
setInterval(() => {
    if (background_counter === backgrounds.length) background_counter = 0
    backgrounds.forEach(e => e.style.opacity = '0')
    backgrounds[background_counter].style.opacity = '1'
    background_counter++
}, 7000);