const acordion_item_header = document.querySelectorAll('.acordion_item_header')

const syllabus_btn = document.getElementById('syllabus_btn')
const community_btn = document.getElementById('community_btn')
const resources_btn = document.getElementById('resources_btn')
const tests_btn = document.getElementById('tests_btn')

const syllabus_section = document.getElementById('syllabus_section')
const community_section = document.getElementById('community_section')
const resources_section = document.getElementById('resources_section')
const tests_section = document.getElementById('tests_section')

const section_container = document.querySelectorAll('.acordion_section_container')

const acordion_videos = document.querySelectorAll('.acordion_item_video_container')

// Start section
syllabus_btn.classList.add('selected_syllabus')
syllabus_section.classList.add('selected')

syllabus_btn.addEventListener('click', () => {
    // Deselecting button sections
    community_btn.classList.remove('selected')
    resources_btn.classList.remove('selected')
    tests_btn.classList.remove('selected_tests');
    // Selecting current button section
    syllabus_btn.classList.add('selected_syllabus');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    syllabus_section.classList.add('selected')
})

community_btn.addEventListener('click', () => {
    // Deselecting button sections
    syllabus_btn.classList.remove('selected_syllabus')
    resources_btn.classList.remove('selected')
    tests_btn.classList.remove('selected_tests');
    // Selecting current button section
    community_btn.classList.add('selected');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    community_section.classList.add('selected')
})

resources_btn.addEventListener('click', () => {
    // Deselecting button sections
    syllabus_btn.classList.remove('selected_syllabus')
    community_btn.classList.remove('selected')
    tests_btn.classList.remove('selected_tests');
    // Selecting current button section
    resources_btn.classList.add('selected');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    resources_section.classList.add('selected')
})

tests_btn.addEventListener('click', () => {
    // Deselecting button sections
    syllabus_btn.classList.remove('selected_syllabus')
    community_btn.classList.remove('selected')
    resources_btn.classList.remove('selected');
    // Selecting current button section
    tests_btn.classList.add('selected_tests');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    tests_section.classList.add('selected')
})


// Acordion effect
acordion_item_header.forEach((title, ind) => {
    // Aplaying default active acordion item
    if (ind == 0) {
        title.classList.toggle('active')
        const body = title.nextElementSibling
        if (title.classList.contains('active')) {
            body.style.maxHeight = body.scrollHeight + 'px'
        } else {
            body.style.maxHeight = 0
        }
    }
    title.addEventListener('click', e => {
        // Toggling the actual title selected
        const current_active_title = document.querySelector('.acordion_item_header.active')
        if (current_active_title && current_active_title !== title) {
            current_active_title.classList.toggle('active')
            current_active_title.nextElementSibling.style.maxHeight = 0
        }
        // Aplaying active classes
        title.classList.toggle('active')
        const body = title.nextElementSibling
        if (title.classList.contains('active')) {
            body.style.maxHeight = body.scrollHeight + 'px'
        } else {
            body.style.maxHeight = 0
        }
    })
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
acordion_videos.forEach(e => e.addEventListener('click', () => {
    let src = e.lastElementChild.getAttribute('src')
    let src_video = src + '?autoplay=true'

    play_main_video(src_video)

    clean__carrousel(carrousel);
}))