// start exam

let exam_string = ExamStringFormDatabase;
let exam_list = exam_string.split('$$$$$$');
let exam_separate = [];
let exam = [];
exam_list.forEach(element => {
    exam_separate.push(element.split('||||'));
});
exam_separate.forEach(e=>{
    let exam_assist=[];
    exam_assist.push(e[0] , e[1].split(',') , e[2].split(','));
    exam.push(exam_assist);
});

console.log(exam.sort(function(a, b){return 0.5 - Math.random()}));

let main = document.querySelector('.exam-container .the-exam');
for(let i = 0 ; i < exam.length ; i++){
    main.append(document.createElement('div'));
    main.lastChild.setAttribute('class' , 'part container');
    main.lastChild.append(document.createElement('label') , document.createElement('p') , document.createElement('label') , document.createElement('ul') );
    main.lastChild.children[0].setAttribute('class' , 'form-label');
    main.lastChild.children[0].innerHTML = 'the question';
    main.lastChild.children[2].setAttribute('class' , 'form-label');
    main.lastChild.children[2].innerHTML = 'the answer';
    main.lastChild.children[1].setAttribute('class' , 'the-question');
    main.lastChild.children[1].innerHTML = exam[i][0];
    main.lastChild.children[3].setAttribute('class' , 'the-answer');

    exam[i][1].forEach(e=>{
        main.lastChild.children[3].append(document.createElement('li'));
        main.lastChild.children[3].lastChild.setAttribute('class' , 'row');
        main.lastChild.children[3].lastChild.append(document.createElement('input') , document.createElement('p') );
        main.lastChild.children[3].lastChild.children[0].setAttribute('class' , 'col-1');
        main.lastChild.children[3].lastChild.children[0].setAttribute('type' , 'checkbox');
        main.lastChild.children[3].lastChild.children[1].setAttribute('class' , 'col-11');
        main.lastChild.children[3].lastChild.children[1].innerHTML = e;
    });
}

let grad = 0 ;
document.getElementById('exam-submit').addEventListener('click' , function(){
    let part = document.querySelectorAll('.exam-container .the-exam .part');
    for(let i = 0 ; i < part.length ; i++){
        let li = part[i].children[3].children;
        for(let v = 0 ; v < li.length ; v++){
            if(li[v].firstChild.checked){
                let ans = exam[i][2];
                ans.forEach(e=>{
                    if(e == v){
                        grad++;
                    }
                });
            }
        }
    }
    document.getElementById('examgrade').value = grad;
    document.getElementById('sendgrade').click();
});


{/* <div class="part container">
<label class="form-label">the question</label>
<p class="the-question">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quisquam, vero consequatur optio ipsa dolores rerum delectus, tempore voluptatum non voluptatibus? Corporis deserunt, natus in facilis tempore voluptatum. Accusamus, dolorum?</p>
<label class="form-label">choose the answer</label>
<ul class="the-answer">
    <li class="row">
        <input type="checkbox" class="col-1">
        <p class="answer col-11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cumque assumenda amet voluptatem reiciendis impedit, voluptate aspernatur possimus quidem saepe obcaecati delectus nisi nihil similique laboriosam sed consectetur, itaque quae.</p>
    </li>
    <li class="row">
        <input type="checkbox" class="col-1">
        <p class="answer col-11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cumque assumenda amet voluptatem reiciendis impedit, voluptate aspernatur possimus quidem saepe obcaecati delectus nisi nihil similique laboriosam sed consectetur, itaque quae.</p>
    </li>
    <li class="row">
        <input type="checkbox" class="col-1">
        <p class="answer col-11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cumque assumenda amet voluptatem reiciendis impedit, voluptate aspernatur possimus quidem saepe obcaecati delectus nisi nihil similique laboriosam sed consectetur, itaque quae.</p>
    </li>
</ul>
</div> */}


// end exam
