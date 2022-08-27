const toggle = document.getElementById('toggle')
const resources_circle_menu = document.getElementById('resources_circle_menu')

toggle.onclick = function() {
    resources_circle_menu.classList.toggle('active')
}