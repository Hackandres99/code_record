const main_video = document.getElementById('main_video')
const main_video_id = document.querySelectorAll('.main_video_id')
const thumbnail_title = document.querySelector('.thumbnail_title')
const thumbnail_text = document.querySelector('.thumbnail_text')
const thread_container = document.querySelectorAll('.thread_container')

const acordion_item_video_container = document.querySelectorAll('.acordion_item_video_container')
const width = screen.width

// Showing threads from introductory video 
thread_container.forEach(e => {
    if (e.getAttribute('data-id-video') == 1) {
        e.classList.remove('hide')
    } else {
        e.classList.add('hide')
    }
})

// Changing main video
acordion_item_video_container.forEach((e, i) => {
    if (i == 0) {
        let first_video_src = e.lastElementChild.previousElementSibling.innerHTML.trim()
        let first_video_title = e.firstElementChild.innerHTML.trim()
        let first_video_uploaded_date = e.lastElementChild.innerHTML.trim()
        let first_video_id = e.nextElementSibling.innerHTML.trim()

        let no_autoplay_video = first_video_src.substring(0, first_video_src.length - 14)
        let embed_video = no_autoplay_video.replace('watch?v=', 'embed/')

        main_video.setAttribute('src', embed_video)
        main_video_id.forEach(e => {
            e.setAttribute('value', first_video_id)
        })
        thumbnail_title.innerHTML = first_video_title
        thumbnail_text.innerHTML = first_video_uploaded_date
    }

    e.addEventListener('click', () => {
        let video_src = e.lastElementChild.previousElementSibling.innerHTML
        let video_title = e.firstElementChild.innerHTML
        let upload_date = e.lastElementChild.innerHTML
        let video_id = e.nextElementSibling.innerHTML
        let embed_video = video_src.replace('watch?v=', 'embed/')

        main_video.setAttribute('src', embed_video)
        main_video_id.forEach(e => {
            e.setAttribute('value', video_id)
        })
        thumbnail_title.innerHTML = video_title
        thumbnail_text.innerHTML = upload_date

        // Hidding threads dependding on the video selected
        thread_container.forEach(e => {
            if (e.getAttribute('data-id-video') == video_id) {
                e.classList.remove('hide')
            } else {
                e.classList.add('hide')
            }
        })
    })
})