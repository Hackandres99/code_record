const unidad_menu_container = document.getElementById("unidad_menu_container")
const unidad_category_container = document.querySelectorAll(".unidad_category_container")
const thumbnail_container = document.querySelectorAll(".thumbnail_container")
const icon_menus = document.getElementById('icon_menus')

const show_all_unities = () => thumbnail_container.forEach(a => {
    a.classList.add('show')
})
show_all_unities()

// Toggling selected menu item
let current_menu_item = null
const LMI_select = 'menu_icon lateral_menu_selected'
const LMI_deselect = 'menu_icon'

unidad_menu_container.querySelectorAll('.menu_icon').forEach((v, i) => {
    if (v.id.includes('menu_icon_')) {
        v.addEventListener('click', () => {
            // Removing selected lateral menu items
            RSMI();
            // Getting the position of menu item selected
            current_menu_item = i;
            // Selecting lateral menu item
            v.classList.add('lateral_menu_selected')
        });
        // Setting menu item temporal position 
        icon_menus.addEventListener('mouseover', () => {
            if (v.className === LMI_select) {
                v.className = LMI_deselect
            }
        });
        // Returning the position of menu item selected
        icon_menus.addEventListener('mouseout', () => {
            if (current_menu_item === i) {
                v.className = LMI_select
            }
        })
    }
})

// Toggling selected menu unity
let current_unity = 0
const select = 'unidad_category_container selected'
const deselect = 'unidad_category_container'

unidad_category_container.forEach((e, i) => {
    // Getting the current position of unidad_category_container
    if (e.className === select) {
        current_unity = i
    }
    // Setting the new position of unidad_category_container
    e.addEventListener('click', () => {
        // Removing selected unidad_category_containers
        unidad_category_container.forEach(v => {
            v.className = deselect
        })
        current_unity = i
        e.className = select

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
    });
    // Setting the temporal position of unidad_category_container
    unidad_menu_container.addEventListener('mouseover', m => {
        if (e.className === select) {
            e.className = deselect
        }
        if (m.target.className === unidad_menu_container.className) {
            if (current_unity === i) {
                e.className = select
            }
        }
    });
    // Returning the position of unidad_category_container
    unidad_menu_container.addEventListener('mouseout', () => {
        if (current_unity === i) {
            e.className = select
        }
    })
})