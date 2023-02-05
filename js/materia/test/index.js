const section_test = document.querySelectorAll('.section_test')
const test_box = document.querySelectorAll('.test_box')
const test_option = document.querySelectorAll('.test_option')
const current_question = document.querySelectorAll('.current_question')
const continue_test = document.querySelectorAll('.start_test_btn')
const restart_test = document.querySelectorAll('.restart_test_btn')
const next_question_btn = document.querySelectorAll('.next_question_btn')

const test_timer_sec = document.querySelectorAll('.test_timer_sec')
const test_time_line = document.querySelectorAll('.test_time_line')

let results = []
let questions = []

section_test.forEach((e, i) => {
    results[i] = 0
    questions[i] = 1
})

test_box.forEach(e => {
    if (e.getAttribute('data-id-question') == 1) {
        e.style.display = 'block'
    } else {
        e.style.display = 'none'
    }
})

current_question.forEach(e => {
    e.innerHTML = 1
})

test_option.forEach(e => {
    e.addEventListener('click', () => {

        let test_box = e.parentElement.parentElement
        let id_test = Number(test_box.parentElement.getAttribute('data-id-test'))
        let section_test = test_box.parentElement

        let current_q_element = test_box.parentElement.nextElementSibling.firstElementChild.firstElementChild
        let total_q = Number(test_box.parentElement.nextElementSibling.firstElementChild.lastElementChild.innerHTML.trim())
        let result_test_box = test_box.parentElement.lastElementChild
        let reproved_message = result_test_box.querySelector('.reproved_test')
        let aproved_message = result_test_box.firstElementChild
        let score_element = result_test_box.querySelector('.score_text')
        let score_input = result_test_box.parentElement.nextElementSibling.querySelector('.score')
        let send_test_btn = result_test_box.parentElement.nextElementSibling.querySelector('.send_test_btn')
        let next_question_btn = result_test_box.parentElement.nextElementSibling.querySelector('.next_question_btn')
        let test_time_line = test_box.parentElement.parentElement.querySelector('.test_time_line')

        nextQuestion(id_test, section_test)

        // Adding points to the current test result
        if (e.lastElementChild.className === 'far fa-check-circle') {
            results[id_test - 1] = results[id_test - 1] + 1
        }

        updateCurrentQuestion(id_test)
        showResult(id_test, current_q_element,
            total_q, result_test_box,
            reproved_message, aproved_message,
            score_element, null, score_input,
            send_test_btn, next_question_btn)

        // Showing the previous test result
        if (score_element.getAttribute('data-score') !== '') {
            let average = Math.round(total_q / 2)
            if (Number(score_element.getAttribute('data-score')) <= average) {
                reproved_message.style.display = 'block'
                aproved_message.style.display = 'none'
            } else {
                aproved_message.style.display = 'block'
                reproved_message.style.display = 'none'
            }
            score_element.innerHTML = score_element.getAttribute('data-score')
        }
    })
})

continue_test.forEach(e => {
    e.addEventListener('click', () => {
        // Hiding rules and showing test
        e.parentElement.classList.add('hide')
        e.parentElement.nextElementSibling.classList.add('show')

        // Adjusting test hight
        let body = e.parentElement.parentElement.parentElement
        body.style.maxHeight = 0
        body.style.maxHeight = body.scrollHeight + 'px'

        // Starting timer 
        let time_line = e.parentElement.nextElementSibling.querySelector('.test_time_line')
        let conunter_time_line = 0
        let timer = 25

        // Add transition

        let footer_quizz = e.parentElement.nextElementSibling.lastElementChild

        let id_test = Number(footer_quizz.previousElementSibling.getAttribute('data-id-test'))
        let section_test = footer_quizz.previousElementSibling

        let current_q_element = footer_quizz.firstElementChild.firstElementChild
        let total_q = Number(footer_quizz.firstElementChild.lastElementChild.innerHTML.trim())
        let result_test_box = footer_quizz.previousElementSibling.lastElementChild
        let reproved_message = result_test_box.querySelector('.reproved_test')
        let aproved_message = result_test_box.firstElementChild
        let score_element = result_test_box.querySelector('.score_text')
        let score_input = result_test_box.parentElement.nextElementSibling.querySelector('.score')
        let send_test_btn = result_test_box.parentElement.nextElementSibling.querySelector('.send_test_btn')
        let restart_test_btn = result_test_box.lastElementChild

        let questionTimer = setInterval(() => {

            if (timer === 0) {
                timer = 26
                conunter_time_line = -4
                time_line.style.width = conunter_time_line + '%'
                nextQuestion(id_test, section_test)
                updateCurrentQuestion(id_test)
                showResult(id_test, current_q_element,
                    total_q, result_test_box,
                    reproved_message, aproved_message,
                    score_element, questionTimer, score_input,
                    send_test_btn, null)
            } else {
                // Restarting timer after choose an option
                test_option.forEach(el => {
                    el.addEventListener('click', () => {
                        timer = 26
                        conunter_time_line = -4
                        time_line.style.width = conunter_time_line + '%'
                    })
                })

                // Keeping the timer active
                timer -= 1
                conunter_time_line += 4
                time_line.style.width = conunter_time_line + '%'
                let timer_element = e.parentElement.nextElementSibling.firstElementChild.lastElementChild
                timer_element.innerHTML = timer

                // Stop timer after showing results
                if (result_test_box.style.display === 'flex') {
                    timer = 1
                    conunter_time_line = 0
                    time_line.style.width = conunter_time_line + '%'
                }

                // Showing the previous test
                if (result_test_box.querySelector('.score_text').getAttribute('data-score') !== '') {
                    conunter_time_line = 0
                    time_line.style.width = conunter_time_line + '%'
                    section_test.firstElementChild.style.display = 'none'
                    result_test_box.style.display = 'flex'
                    send_test_btn.style.display = 'none'
                    footer_quizz.lastElementChild.style.display = 'flex'

                    let average = Math.round(total_q / 2)
                    if (Number(result_test_box.querySelector('.score_text').getAttribute('data-score')) <= average) {
                        reproved_message.style.display = 'block'
                        aproved_message.style.display = 'none'
                    } else {
                        aproved_message.style.display = 'block'
                        reproved_message.style.display = 'none'
                    }

                    timer_element.innerHTML = 0
                    clearInterval(questionTimer)
                } else {
                    restart_test_btn.disabled = true
                }
            }
        }, 1000)

    })
})

restart_test.forEach(e => {
    e.addEventListener('click', () => {
        let id_test = Number(e.parentElement.parentElement.getAttribute('data-id-test'))

        // Reseting test
        results[id_test - 1] = 0
        questions[id_test - 1] = 1

        // Changing question from the current test
        e.parentElement.parentElement.parentElement.querySelectorAll('.test_box').forEach(e => {
            if (e.getAttribute('data-id-question') == questions[id_test - 1]) {
                e.style.display = 'block'
            } else {
                e.style.display = 'none'
            }
            // Showing anwsers
            e.querySelectorAll('.test_option').forEach(el => {
                if (el.lastElementChild.classList.contains('fa-check-circle')) {
                    el.classList.add('correct')
                } else {
                    el.classList.add('incorrect')
                }
                el.lastElementChild.style.display = 'block'
            })
        })

        // Activing next question button
        e.parentElement.parentElement.parentElement.lastElementChild.lastElementChild.disabled = false

        // Showing current question number
        current_question.forEach((e, i) => {
            if (i + 1 == id_test) {
                e.innerHTML = 1
            }
        })

        // Hiding score
        e.parentElement.style.display = 'none'
    })
})

next_question_btn.forEach(e => {
    e.addEventListener('click', () => {

        let test_box = e.parentElement.parentElement
        let id_test = Number(test_box.querySelector('.section_test').getAttribute('data-id-test'))
        let section_test = test_box.querySelector('.section_test')

        nextQuestion(id_test, section_test)
        updateCurrentQuestion(id_test)

        // Showing result
        let current_q = test_box.querySelector('.current_question')
        let total_q = test_box.querySelector('.total_questions').innerHTML.trim()
        if (Number(current_q.innerHTML) > Number(total_q)) {
            current_q.innerHTML = total_q
            result_test_box = e.parentElement.previousElementSibling.lastElementChild
            result_test_box.style.display = 'flex'
            e.disabled = true
        }

    })
})

const nextQuestion = (id_test, section_test) => {

    questions[id_test - 1] = questions[id_test - 1] + 1


    // Changing question from the current test
    section_test.querySelectorAll('.test_box').forEach(e => {
        if (e.getAttribute('data-id-question') == questions[id_test - 1]) {
            e.style.display = 'block'
        } else {
            e.style.display = 'none'
        }
    })
}

const updateCurrentQuestion = (id_test) => {
    // Showing current question number
    current_question.forEach((e, i) => {
        if (i + 1 == id_test) {
            e.innerHTML = questions[id_test - 1]
        }
    })
}

const showResult = (id_test, current_q_element, total_q,
    result_test_box, reproved_message, aproved_message,
    score_element, questionTimer, score_input, send_test_btn,
    next_question_btn) => {

    if (Number(current_q_element.innerHTML) > total_q) {
        let average = Math.round(total_q / 2)

        current_q_element.innerHTML = total_q
        result_test_box.style.display = 'flex'

        if (results[id_test - 1] <= average) {
            reproved_message.style.display = 'block'
            aproved_message.style.display = 'none'
        } else {
            aproved_message.style.display = 'block'
            reproved_message.style.display = 'none'
        }

        score_element.innerHTML = results[id_test - 1]
        score_input.setAttribute('value', results[id_test - 1])
        send_test_btn.disabled = false
        next_question_btn.disabled = true
        clearInterval(questionTimer)
    }

}