import { carrousel, lightbox_main_video, scroll__limit } from './index.js'
carrousel.addEventListener('click', e => {
    let video_src = '',
        selectedClass = e.target.className
    if (selectedClass === 'carrousel__img' || selectedClass === 'fas fa-play-circle') {
        // Adding border to selected video
        e.target.parentNode.parentNode.querySelector('.selected').classList.remove('selected')
        e.target.parentNode.classList.toggle('selected');
        //Changing the main video of the lightbox
        video_src = e.target.parentNode.parentNode.querySelector('.selected').firstElementChild.getAttribute('alt')
        lightbox_main_video.setAttribute('src', video_src + '?autoplay=true')

    } else if (selectedClass === 'container__img') {
        // Adding border to selected video
        e.target.parentNode.querySelector('.selected').classList.remove('selected')
        e.target.classList.toggle('selected');
        // Changing the main video of the lightbox
        video_src = e.target.parentNode.querySelector('.selected').firstElementChild.getAttribute('alt')
        lightbox_main_video.setAttribute('src', video_src + '?autoplay=true')
    }
    scroll__limit(e.target, "")
})