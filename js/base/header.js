const container = document.getElementById("container")
const menu = document.getElementById("default_menu")
const unidades_menu = document.getElementById("unidades_menu")
const resources_menu = document.getElementById("resources_menu")
const menu_link = document.querySelectorAll(".menu_link")
const menu_button = document.getElementById("menu_icon_header")

// navigator
const icon_search = document.getElementById("icon_search")
const search_container = document.getElementById("search_container")

const RSMI = () => {
    if (document.getElementById('unidad_menu_container')) {
        unidad_menu_container.querySelectorAll('.menu_icon').forEach(e => {
            if (e.id.includes('menu_icon_')) {
                e.className = 'menu_icon'
            }
        });
    }
}

// Getting the current page
let current_page = 0
menu_link.forEach((v, i) => {
    if (v.classList.contains('selected')) {
        current_page = i
    }
})

// Toggling selected menu item
menu.addEventListener('mouseover', e => {
    menu_link.forEach(v => {
        if (v.classList.contains('selected')) {
            v.classList.remove('selected')
            v.lastElementChild.classList.remove('menu_selected')
        }
    })
    if (e.target.classList.contains('show-lateral')) {
        menu_link.forEach((v, i) => {
            if (current_page === i) {
                v.classList.add('selected')
                v.lastElementChild.classList.add('menu_selected')
            }
        })
    }
})
menu.addEventListener('mouseout', () => {
    menu_link.forEach((v, i) => {
        if (current_page === i) {
            v.classList.add('selected')
            v.lastElementChild.classList.add('menu_selected')
        }
    })
})

// Showing menu
menu_button.addEventListener("click", () => {
    unidades_menu.classList.remove('show-lateral')
    resources_menu.classList.remove('show-lateral')
    menu.classList.toggle('show-lateral')

})

// Hiding menu 
container.addEventListener("click", () => {
    if (menu.classList.contains('show-lateral')) {
        menu.classList.remove('show-lateral')
    }
    // Removing selected lateral menu items
    RSMI();
})