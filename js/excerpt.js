const about_btn = document.getElementById('about_btn')
const goal_btn = document.getElementById('goal_btn')
const team_btn = document.getElementById('team_btn')

const about_section = document.getElementById('about_section')
const goal_section = document.getElementById('goal_section')
const team_section = document.getElementById('team_section')

const section_container = document.querySelectorAll('.excerpt_section_container')

// Start section
about_btn.classList.add('selected_about')
about_section.classList.add('selected')

about_btn.addEventListener('click', () => {
    // Deselecting button sections
    goal_btn.classList.remove('selected_goal')
    team_btn.classList.remove('selected_team');
    // Selecting current button section
    about_btn.classList.add('selected_about');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    about_section.classList.add('selected')
})

goal_btn.addEventListener('click', () => {
    // Deselecting button sections
    about_btn.classList.remove('selected_about')
    team_btn.classList.remove('selected_team');
    // Selecting current button section
    goal_btn.classList.add('selected_goal');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    goal_section.classList.add('selected')
})

team_btn.addEventListener('click', () => {
    // Deselecting button sections
    about_btn.classList.remove('selected_about')
    goal_btn.classList.remove('selected_goal');
    // Selecting current button section
    team_btn.classList.add('selected_team');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    team_section.classList.add('selected')
})