const menu_icon_unidades = document.getElementById('menu_icon_unidades')

// Toggling selected menu unity
const select_unidad = 'menu_link unidad_selected'
const deselect_unidad = 'menu_link'

unidades_menu.querySelectorAll('.menu_link').forEach((e, i) => {
    // Getting the current position of unidad_category_container
    if (e.classList.contains('unidad_selected')) {
        current_unity = i
    }
    // Setting the new position of unidad_category_container
    e.addEventListener('click', () => {
        unidades_menu.querySelectorAll('.menu_link').forEach(v => {
            v.className = deselect_unidad
        })

        // Removing selected lateral menu items
        RSMI();
        current_unity = i
        e.className = select_unidad

        // filtering unidades 
        thumbnail_container.forEach((x, j) => {
            if (current_unity === 0) {
                show_all_unities()
            } else {
                j++
                if (current_unity === j) {
                    x.classList.add('show')
                } else {
                    x.classList.remove('show')
                }
            }
        })
        unidades_menu.classList.remove('show-lateral')
    });
    // Setting the temporal position of unidad_category_container
    unidades_menu.addEventListener('mouseover', m => {
        if (e.className === select_unidad) {
            e.className = deselect_unidad
        }
        if (m.target.className === unidades_menu.className) {
            if (current_unity === i) {
                e.className = select_unidad
            }
        }
    });
    // Returning the position of unidad_category_container
    unidades_menu.addEventListener('mouseout', () => {
        if (current_unity === i) {
            e.className = select_unidad
        }
    })
})

// Showing menu
menu_icon_unidades.addEventListener("click", () => {
    menu.classList.remove('show-lateral')
    resources_menu.classList.remove('show-lateral')
    unidades_menu.classList.toggle('show-lateral')

})

// Hiding menu 
container.addEventListener("click", () => {
    if (unidades_menu.classList.contains('show-lateral')) {
        unidades_menu.classList.remove('show-lateral')
    }
})

if (document.body.contains(icon_search)) {
    input_search.addEventListener("focus", () => {
        if (unidades_menu.classList.contains('show-lateral')) {
            unidades_menu.classList.remove('show-lateral')
        }
    })
}

if (document.body.contains(search_container)) {
    search_container.addEventListener("click", () => {
        if (unidades_menu.classList.contains('show-lateral')) {
            unidades_menu.classList.remove('show-lateral')
        }
    })
}