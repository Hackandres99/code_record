const acordion_videos = document.querySelectorAll('.acordion_item_video_container')

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

acordion_videos.forEach(e => e.addEventListener('click', () => {
    let src = e.lastElementChild.getAttribute('src')
    let src_video = src + '?autoplay=true'

    play_main_video(src_video)

    clean__carrousel(carrousel);
}))