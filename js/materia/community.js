const form_thread_title = document.querySelectorAll('.form_thread_title')
const form_comment = document.querySelectorAll('.form_comment')
const thread_icon = document.querySelectorAll('.thread_icon')

// Showing thread textarea
form_thread_title.forEach(el => {
    el.addEventListener('focus', () => {
        el.setAttribute('placeholder', 'Título de la publicación')
        el.parentElement.parentElement.nextElementSibling.classList.add('show')
        el.parentElement.parentElement.nextElementSibling.nextElementSibling.classList.add('show')

    })
})

// Expandind comment textareas
form_comment.forEach(e => {
    e.addEventListener('focus', () => {
        e.classList.add('expand')
    })
})

// Showing comment Sub-sections
thread_icon.forEach(e => {
    e.addEventListener('click', () => {
        e.nextElementSibling.classList.add('show')
    })
})