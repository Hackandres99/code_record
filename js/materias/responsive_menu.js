const menu_icon_materias = document.getElementById('menu_icon_materias')

// Toggling selected menu unity
const select_materia = 'menu_link materia_selected'
const deselect_materia = 'menu_link'

materias_menu.querySelectorAll('.menu_link').forEach((e, i) => {
    // Getting the current position of materia_category_container
    if (e.classList.contains('materia_selected')) {
        current_unity = i
    }
    // Setting the new position of materia_category_container
    e.addEventListener('click', () => {
        materias_menu.querySelectorAll('.menu_link').forEach(v => {
            v.className = deselect_materia
        })

        // Removing selected lateral menu items
        RSMI();
        current_unity = i
        e.className = select_materia

        // filtering materias 
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
        materias_menu.classList.remove('show-lateral')
    });
    // Setting the temporal position of materia_category_container
    materias_menu.addEventListener('mouseover', m => {
        if (e.className === select_materia) {
            e.className = deselect_materia
        }
        if (m.target.className === materias_menu.className) {
            if (current_unity === i) {
                e.className = select_materia
            }
        }
    });
    // Returning the position of materia_category_container
    materias_menu.addEventListener('mouseout', () => {
        if (current_unity === i) {
            e.className = select_materia
        }
    })
})

// Showing menu
menu_icon_materias.addEventListener("click", () => {
    console.log('click')
    menu.classList.remove('show-lateral')
    materias_menu.classList.toggle('show-lateral')

})

// Hiding menu 
container.addEventListener("click", () => {
    if (materias_menu.classList.contains('show-lateral')) {
        materias_menu.classList.remove('show-lateral')
    }
})

if (document.body.contains(icon_search)) {
    input_search.addEventListener("focus", () => {
        if (materias_menu.classList.contains('show-lateral')) {
            materias_menu.classList.remove('show-lateral')
        }
    })
}

if (document.body.contains(search_container)) {
    search_container.addEventListener("click", () => {
        if (materias_menu.classList.contains('show-lateral')) {
            materias_menu.classList.remove('show-lateral')
        }
    })
}