const button_up = document.getElementById("button-up")

// Scrolling to the top
button_up.addEventListener("click", scrollUp)

function scrollUp() {
    let currentScroll = document.documentElement.scrollTop;
    if (currentScroll > 0) {
        window.requestAnimationFrame(scrollUp);
        window.scrollTo(0, currentScroll - (currentScroll / 10));
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
}

// Toggling button-up scale
window.onscroll = function() {
    let scroll = document.documentElement.scrollTop;
    if (scroll > 500) {
        button_up.style.transform = "scale(1)";
    } else if (scroll < 500) {
        button_up.style.transform = "scale(0)";
    }
}