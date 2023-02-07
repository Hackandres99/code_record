const acordion_item_header = document.querySelectorAll('.acordion_item_header')

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