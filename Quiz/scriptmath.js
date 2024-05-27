const quizData = [
    {
        question: "What is 1004 divided by 2?",
        a: "508",
        b: "602",
        c: "500",
        d: "502",
        correct: "d",
    },
    {
        question: "The sum of two irrational numbers is always",
        a: "rational",
        b: " irrational",
        c: "Both",
        d: "one",
        correct: "b",
    },
    {
        question: "Which number is divisible by 11?",
        a: "1452",
        b: "1516",
        c: "1011",
        d: "1121",
        correct: "a",
    },
    {
        question: "What is the value of Floor(8.4) + Ceil(9.9)?",
        a: "19",
        b: "18",
        c: "20",
        d: "17",
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