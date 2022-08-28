import { lightbox, lightbox_main_video, carrousel, close_lightbox, before_image, next_image } from './index.js'

close_lightbox.addEventListener('click', () => {
    lightbox.classList.toggle('move')
    lightbox_main_video.classList.toggle('appear')
});


// Moving through videos
before_image.addEventListener('click', e => {
    // let before = {},
    //     last = {}
    // let before_video_src = '',
    //     last_video_src = ''
    // try {
    //     // Moving to the before video
    //     before = carrousel.querySelector('.selected').previousElementSibling
    //     before_video_src = before.firstElementChild.getAttribute('alt') + '?autoplay=true'
    //     lightbox_main_video.setAttribute('src', before_video_src);
    //     // Adding border to the before video
    //     before.nextElementSibling.classList.toggle('selected')
    //     before.classList.toggle('selected')
    // } catch (error) {
    //     // Moving to the last video
    //     carrousel.scrollTo(carrousel.clientWidth, 0)
    //     last = carrousel.lastElementChild
    //     last_video_src = last.firstElementChild.getAttribute('alt') + '?autoplay=true'
    //     lightbox_main_video.setAttribute('src', last_video_src);
    //     // Adding border to the last video
    //     carrousel.firstElementChild.classList.toggle('selected')
    //     last.classList.toggle('selected')
    // }
})

next_image.addEventListener('click', e => {
    // let next = {},
    //     first = {}
    // let next_video_src = '',
    //     first_video_src = ''
    // try {
    //     // Moving to the next video
    //     next = carrousel.querySelector('.selected').nextElementSibling
    //     next_video_src = next.firstElementChild.getAttribute('alt') + '?autoplay=true'
    //     lightbox_main_video.setAttribute('src', next_video_src);
    //     // Adding border to the next video
    //     next.previousElementSibling.classList.toggle('selected')
    //     next.classList.toggle('selected')
    // } catch (error) {
    //     // Moving to the first video
    //     carrousel.scrollTo(0, 0)
    //     first = carrousel.firstElementChild
    //     first_video_src = first.firstElementChild.getAttribute('alt') + '?autoplay=true'
    //     lightbox_main_video.setAttribute('src', first_video_src);
    //     // Adding border to the first video
    //     carrousel.lastElementChild.classList.remove('selected')
    //     first.classList.toggle('selected')
    // }
})