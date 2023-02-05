const form_thread_title = document.querySelector('.form_thread_title')
const form_thread_comment = document.querySelector('.form_thread_comment')
const form_thread_btn = document.querySelector('.form_thread_btn')

const form_comment = document.querySelectorAll('.form_comment')
const thread_icon = document.querySelectorAll('.thread_icon')
const form_comment_container = document.querySelectorAll('.form_comment_container')

// Showing thread textarea
form_thread_title.addEventListener('focus', () => {
    form_thread_title.setAttribute('placeholder', 'Título de la publicación')
    form_thread_comment.classList.add('show')
    form_thread_btn.classList.add('show')
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