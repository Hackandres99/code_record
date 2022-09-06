const form_thread_title = document.querySelector('.form_thread_title')
const form_thread_comment = document.querySelector('.form_thread_comment')
const form_thread_btn = document.querySelector('.form_thread_btn')

form_thread_title.addEventListener('focus', () => {
    form_thread_title.setAttribute('placeholder', 'Título de la publicación')
    form_thread_comment.classList.add('show')
    form_thread_btn.classList.add('show')
})