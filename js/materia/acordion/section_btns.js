const syllabus_btn = document.getElementById('syllabus_btn')
const community_btn = document.getElementById('community_btn')
const resources_btn = document.getElementById('resources_btn')
const tests_btn = document.getElementById('tests_btn')

const syllabus_section = document.getElementById('syllabus_section')
const community_section = document.getElementById('community_section')
const resources_section = document.getElementById('resources_section')
const tests_section = document.getElementById('tests_section')

const section_container = document.querySelectorAll('.acordion_section_container')

// Start section
syllabus_btn.classList.add('selected_syllabus')
syllabus_section.classList.add('selected')

syllabus_btn.addEventListener('click', () => {
    // Deselecting button sections
    community_btn.classList.remove('selected')
    resources_btn.classList.remove('selected')
    tests_btn.classList.remove('selected_tests');
    // Selecting current button section
    syllabus_btn.classList.add('selected_syllabus');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    syllabus_section.classList.add('selected')
})

community_btn.addEventListener('click', () => {
    // Deselecting button sections
    syllabus_btn.classList.remove('selected_syllabus')
    resources_btn.classList.remove('selected')
    tests_btn.classList.remove('selected_tests');
    // Selecting current button section
    community_btn.classList.add('selected');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    community_section.classList.add('selected')
})

resources_btn.addEventListener('click', () => {
    // Deselecting button sections
    syllabus_btn.classList.remove('selected_syllabus')
    community_btn.classList.remove('selected')
    tests_btn.classList.remove('selected_tests');
    // Selecting current button section
    resources_btn.classList.add('selected');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    resources_section.classList.add('selected')
})

tests_btn.addEventListener('click', () => {
    // Deselecting button sections
    syllabus_btn.classList.remove('selected_syllabus')
    community_btn.classList.remove('selected')
    resources_btn.classList.remove('selected');
    // Selecting current button section
    tests_btn.classList.add('selected_tests');
    // Deselecting container sections
    section_container.forEach((e, i) => {
        e.classList.remove('selected')
    });
    // Selecting current container section
    tests_section.classList.add('selected')
})