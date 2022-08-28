const lightbox = document.getElementById('lightbox')

// Video selected
const lightbox_main_video = document.getElementById('lightbox_main_video')
const carrousel = document.getElementById('carrousel')

// Arrows
const before_image = document.getElementById('before_image')
const next_image = document.getElementById('next_image')
const close_lightbox = document.getElementById('close_lightbox')

// Extract resources
const thumbnails = document.querySelectorAll('.thumbnail')
const thumbnail_images = document.querySelectorAll('.thumbnail_img')

// Close lightBox from any unaffiliated element
lightbox.addEventListener("click", e => {
    let targetElement = e.target // clicked element
    do {
        if (targetElement === lightbox_main_video || targetElement === carrousel ||
            targetElement === before_image || targetElement === next_image) {
            // This is a click inside. Do nothing, just return.
            return;
        }
        // Go up the DOM
        targetElement = targetElement.parentNode;
    } while (targetElement)
    // This is a click outside.
    if (lightbox_main_video.src != "") {
        // Hiding lightbox
        lightbox.classList.remove('move')
        lightbox_main_video.classList.remove('appear');
        // Removing content from the lightbox
        setTimeout(() => {
            lightbox_main_video.setAttribute('src', '')
            clean__carrousel(carrousel)
        }, 300)
    }
})

// play selected video
const play_main_video = (src__video) => {
    // Adding video
    lightbox_main_video.setAttribute('src', src__video);
    // Opening lightbox
    lightbox.classList.toggle('move')
    lightbox_main_video.classList.toggle('appear')
}

// clean carrousel
const clean__carrousel = (node) => {
    while (node.hasChildNodes()) {
        clear(node.firstChild)
    }
}
const clear = (node) => {
    while (node.hasChildNodes()) {
        clear(node.firstChild)
    }
    node.parentNode.removeChild(node)
}

// Lateral scroll beyond the carrousel limits
const scroll__limit = (e, side) => {
    switch (side) {
        case "left":
            if (e.getBoundingClientRect().x < carrousel.getBoundingClientRect().x) {
                carrousel.scrollBy(-e.clientWidth, 0)
            }
            break;
        case "right":
            if (e.getBoundingClientRect().x + e.clientWidth > carrousel.getBoundingClientRect().x + carrousel.clientWidth) {
                carrousel.scrollBy(e.clientWidth, 0)
            }
            break;
        default:
            if (e.getBoundingClientRect().x < carrousel.getBoundingClientRect().x) {
                carrousel.scrollBy(-e.clientWidth, 0)
            } else if (e.getBoundingClientRect().x + e.clientWidth > carrousel.getBoundingClientRect().x + carrousel.clientWidth) {
                carrousel.scrollBy(e.clientWidth, 0)
            }
            break;
    }

}

export {
    lightbox,
    lightbox_main_video,
    carrousel,
    before_image,
    next_image,
    close_lightbox,
    thumbnails,
    thumbnail_images,
    play_main_video,
    scroll__limit,
    clean__carrousel
}