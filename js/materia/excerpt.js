const acordion_titles = document.querySelectorAll('.acordion_item_title')

acordion_titles.forEach(title => {
    title.addEventListener('click', e => {
        // Toggling the actual title selected
        const current_active_title = document.querySelector('.acordion_item_title.active')
        if (current_active_title && current_active_title !== title) {
            current_active_title.classList.toggle('active')
            current_active_title.nextElementSibling.style.maxHeight = 0
        }
        // Aplaying active classes
        title.classList.toggle('active')
        const body = title.nextElementSibling
        if (title.classList.contains('active')) {
            body.style.maxHeight = 0
        } else {
            body.style.maxHeight = body.scrollHeight + 'px'
        }
    })
})