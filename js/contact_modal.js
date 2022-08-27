const send_message = document.getElementById('send_message')
const fields = document.querySelectorAll('.user_info_field')
    // Creating the modal elements
let error_modal = document.createElement('div')
let error_container = document.createElement('div')
let modal_title = document.createElement('h3')
let modal_close_btn = document.createElement('span')
let names = document.createElement('p')
let email = document.createElement('p')
let message = document.createElement('p')
    // Setting the modal classes
error_modal.className = 'error_modal'
error_container.className = 'error_container'
modal_title.className = 'modal_title'
modal_close_btn.innerHTML = 'Cerrar'
modal_close_btn.className = 'modal_close_btn'

send_message.addEventListener('click', () => {

    // Cleaning errors
    error_container.querySelectorAll('.error').forEach(v => {
        error_container.removeChild(v)
    })

    // Validating every field from the contact form
    fields.forEach((v, i) => {
        if (fields[i].id !== 'phone') {
            if (v.value == '') {
                switch (fields[i].id) {
                    case 'names':
                        names.innerHTML = 'Escriba un nombre.'
                        names.className = 'error'
                        error_container.appendChild(names)
                        break;
                    case 'email':
                        email.innerHTML = 'Ingrese un correo.'
                        email.className = 'error'
                        error_container.appendChild(email)
                        break;
                    default:
                        message.innerHTML = 'Escriba un mensaje.'
                        message.className = 'error'
                        error_container.appendChild(message)
                        break;
                }
                v.style.borderBottomColor = '#F14B4B'
            } else {
                v.style.borderBottomColor = '#2196F3'
            }
        }
    })

    if (error_container.querySelectorAll('.error').length !== 0) {
        // Sending error modal
        modal_title.innerHTML = 'Errores encontrados.'
    } else {
        // Sending modal successful
        modal_title.innerHTML = 'Mensaje Enviado con exito.'
        modal_close_btn.style.background = '#4091EC'
        modal_close_btn.style.border = '2px solid #2a9dca'
    }
    // Setting the modal title
    error_modal.appendChild(error_container)
    error_container.appendChild(modal_title)

    // putting the close button in the modal
    error_container.appendChild(modal_close_btn)
    document.body.appendChild(error_modal)

    document.querySelector('.modal_close_btn').addEventListener('click', () => {
        if (error_container.querySelectorAll('.error').length !== 0) {
            //Closing error modal
            if (document.querySelector('.error_modal')) {
                document.body.removeChild(error_modal)
            }
        } else {
            // Closing modal successful
            window.location.href = "?p=inicio";
        }
    })
})