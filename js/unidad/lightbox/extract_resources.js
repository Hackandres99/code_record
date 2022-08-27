import { carrousel, thumbnails, thumbnail_images, play_main_video, clean__carrousel } from './index.js'
// Extracting resources from the selected unidad
thumbnails.forEach(e => e.addEventListener('click', () => {
    let alt = e.firstElementChild.getAttribute('alt')
    let src_video = alt + '?autoplay=true'

    play_main_video(src_video)

    clean__carrousel(carrousel);
    // Introducing elements to the carrousel
    // thumbnail_images.forEach(img => {
    //     let i = document.createElement('i')
    //     let image = document.createElement('img')
    //     let container__img = document.createElement('div')

    //     i.className = 'fas fa-play-circle'
    //     image.setAttribute('src', img.getAttribute('src'))
    //     image.setAttribute('alt', img.getAttribute('alt'))
    //     image.className = 'carrousel__img'

    //     if (alt === image.getAttribute('alt')) {
    //         container__img.className = 'container__img selected'
    //     } else {
    //         container__img.className = 'container__img'
    //     }
    //     container__img.appendChild(image)
    //     container__img.appendChild(i)
    //     carrousel.appendChild(container__img)

    // })

}))