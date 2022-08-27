const input_search_container = document.getElementById("input_search_container")
const suggestion_box = document.getElementById("suggestion_box")
const thumbnail_title = document.querySelectorAll(".thumbnail_title")
const input_search = document.getElementById("input_search")

//Showing search container
icon_search.addEventListener("click", () => {
    search_container.classList.toggle('show_search_container')
    input_search_container.classList.toggle('show_input_search_container')
    input_search.focus()
    if (input_search.value !== null) {
        input_search.value = ""
        suggestion_box.classList.remove("show_suggestion_box")
    }
    // Hiding menus
    if (menu.classList.contains('show-lateral')) {
        menu.classList.remove('show-lateral')
    }
    if (unidades_menu.classList.contains('show-lateral')) {
        unidades_menu.classList.remove('show-lateral')
    }
    if (resources_menu.classList.contains('show-lateral')) {
        resources_menu.classList.remove('show-lateral')
    }
    // Removing selected lateral menu items
    RSMI();
})

// Hiding search container
const hide_search_container = () => {
    search_container.classList.remove('show_search_container')
    input_search_container.classList.remove('show_input_search_container')
    input_search.value = ""
    suggestion_box.classList.remove("show_suggestion_box")

    // Removing selected lateral menu items
    unidad_menu_container.querySelectorAll('.menu_icon').forEach(e => {
        if (e.id.includes('menu_icon_')) {
            e.className = 'menu_icon'
        }
    });
}
search_container.addEventListener("click", hide_search_container)

window.onkeydown = () => {
    tecla_esc = event.keyCode
    if (tecla_esc == 27) {
        return hide_search_container()
    }
}

// Searching unidad from thumbnail_title
let module__titles = [],
    module__links = [],
    modules = []
thumbnail_title.forEach((e, i) => {
    module__titles[i] = e.innerHTML
    module__links[i] = e.parentNode.lastElementChild.getAttribute('href')
    modules[i] = { 'title': module__titles[i], 'link': module__links[i] }
})

// Removing Accents of string
const removingAccents = str => {
    let cadena = str.normalize("NFD").replace(/[\u0300-\u036f]/g, "")
    return cadena
}

const filter = () => {
    // Cleaning the suggestion box
    suggestion_box.innerHTML = '';
    // Reading the input value
    const text = input_search.value.toLowerCase();
    // touring the unidades datas
    for (let module of modules) {
        // Extrating and formating properties from unidades 
        let name = module.title,
            link = module.link,
            lower_case = name.toLowerCase(),
            upperCase = name.toUpperCase(),
            wOAccents = removingAccents(name),
            wOALC = removingAccents(name).toLowerCase()

        //  Verifiying if the search input value have match with an unidad title
        if (wOALC.indexOf(text) !== -1 || wOAccents.indexOf(text) !== -1 ||
            lower_case.indexOf(text) !== -1 || upperCase.indexOf(text) !== -1) {
            suggestion_box.innerHTML += `
            <li><a href="${link}"><i class="fas fa-search"></i>${name}</a></li>`
        }
    }
    // Adding deffault message if there's no matches
    if (suggestion_box.innerHTML === '') {
        suggestion_box.innerHTML += `
            <li><a href=""><i class="fas fa-search"></i>Modulo no encontrado...</a></li> `
    }
    // Toggling suggestion view, if there is no text at the search input
    if (text === '') {
        suggestion_box.classList.remove("show_suggestion_box")
    } else {
        suggestion_box.classList.add("show_suggestion_box")
    }
};
// Executing filter function every time a key is pressed 
if (document.body.contains(icon_search)) {
    input_search.addEventListener("keyup", filter)
}