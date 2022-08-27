const menu_icon_resources = document.getElementById('menu_icon_resources')

// Toggling selected menu unity
const select_resource = 'menu_link resource_selected'
const deselect_resource = 'menu_link'

resources_menu.querySelectorAll('.menu_link').forEach((e, i) => {
    // Getting the current position of unidad_category_container
    if (e.classList.contains('resource_selected')) {
        current_unity = i
    }
    // Setting the new position of unidad_category_container
    e.addEventListener('click', () => {
        resources_menu.querySelectorAll('.menu_link').forEach(v => {
            v.className = deselect_resource
        })

        // Removing selected lateral menu items
        RSMI();
        current_unity = i
        e.className = select_resource

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
        resources_menu.classList.remove('show-lateral')
    });
    // Setting the temporal position of unidad_category_container
    resources_menu.addEventListener('mouseover', m => {
        if (e.className === select_resource) {
            e.className = deselect_resource
        }
        if (m.target.className === resources_menu.className) {
            if (current_unity === i) {
                e.className = select_resource
            }
        }
    });
    // Returning the position of unidad_category_container
    resources_menu.addEventListener('mouseout', () => {
        if (current_unity === i) {
            e.className = select_resource
        }
    })
})

// Showing menu
menu_icon_resources.addEventListener("click", () => {
    menu.classList.remove('show-lateral')
    unidades_menu.classList.remove('show-lateral')
    resources_menu.classList.toggle('show-lateral')

})

// Hiding menu 
container.addEventListener("click", () => {
    if (resources_menu.classList.contains('show-lateral')) {
        resources_menu.classList.remove('show-lateral')
    }
})

if (document.body.contains(icon_search)) {
    input_search.addEventListener("focus", () => {
        if (resources_menu.classList.contains('show-lateral')) {
            resources_menu.classList.remove('show-lateral')
        }
    })
}

if (document.body.contains(search_container)) {
    search_container.addEventListener("click", () => {
        if (resources_menu.classList.contains('show-lateral')) {
            resources_menu.classList.remove('show-lateral')
        }
    })
}