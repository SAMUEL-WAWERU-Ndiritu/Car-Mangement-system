
const quizData = [
    {
        question:'who is the first president of Kenya',
        a:"Jomo Kenyatta",
        b:"Raila Odinga",
        c:"Uhuru Kenyatta",
        d:"Julius Gichuru",
        correct:"a"
    },
    {
        question:"Which is the most used language",
        a:"HTML",
        b:"CSS",
        c:"Python",
        d:"Javascript",
        correct:"d"
    },
    {
     question:"which is the capital city of Kenya",
     a:"Nakuru",
     b:"Nyahururu",
     c:"Nairobi",
     d:"Mombasa",
     correct:"c"
    },
    {
        question:"Which county is Muranga University located",
        a:"Laikipia",
        b:"Muranga",
        c:"Nyeri",
        d:"Mombasa",
        correct:"b"
    }
]

const question = document.querySelector('#question');
const a_answer= document.querySelector('#a_answer');
const b_answer= document.querySelector('#b_answer');
const c_answer= document.querySelector('#c_answer');
const d_answer= document.querySelector('#d_answer');
const btn= document.querySelector('#submit');
const allInput= document.querySelectorAll('.answer');
const box = document.querySelector('.box');
let count= 0;


loadQuiz();

function loadQuiz(){
    deselect();   
    const totalQuiz= quizData[count];
    question.innerHTML=totalQuiz.question;
    a_answer.innerHTML= totalQuiz.a;
    b_answer.innerHTML= totalQuiz.b;
    c_answer.innerHTML= totalQuiz.c;
    d_answer.innerHTML= totalQuiz.d;
    
}
 
function getSelected(){
    let result;
    allInput.forEach((answer)=>{
       if(answer.checked){
          result=answer.id;
       }
    });
    return result;
}

function deselect(){
    allInput.forEach((answer)=>{
        answer.checked=false;
     })
}


let score= 0;


btn.addEventListener('click',()=>{
   const checkResult= getSelected();
   if(checkResult){
       if(checkResult === quizData[count].correct){
          score+=1;
       }
    count++;
    if(count < quizData.length){
        loadQuiz();
    }else{
        //To Do : Display result
        box.innerHTML= `<h3>Your score is ${score}/${quizData.length}</h3>`;
    }
   }

    
}) 
   