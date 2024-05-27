const quizData = [
    {
        question: "Her thinking leans ____ democracy.",
        a: "relate",
        b: "with",
        c: "for",
        d: "towards",
        correct: "d",
    },
    {
        question: "He got too tired _____ over work.",
        a: "because off",
        b: "because of",
        c: "On",
        d: "for",
        correct: "b",
    },
    {
        question: "The train ____ as fast as the bus.",
        a: "moves",
        b: "went",
        c: "running",
        d: "going",
        correct: "a",
    },
    {
        question: "He was seen _____ to the school.",
        a: "gone",
        b: "going",
        c: "go",
        d: "went",
        correct: "b",
    },


];

const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')


let currentQuiz = 0
let score = 0

loadQuiz()

function loadQuiz() {

    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]

    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }

       currentQuiz++

       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2><br/><br/>You answered ${score}/${quizData.length}<br/> questions correctly<br/><br/></h2>

           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})