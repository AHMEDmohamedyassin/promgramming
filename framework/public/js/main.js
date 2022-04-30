// start language
let language = 'EN';
if(window.localStorage.getItem('language')){
    language = window.localStorage.getItem('language');
}
if(language == 'AR'){
    switchtoarabic();
}
document.querySelectorAll('.translate').forEach(e=>{
    let lang = 'lang' + language;
    e.innerHTML = e.getAttribute(lang);
});
document.getElementById("Switch").addEventListener('change' , function(){
    if(document.getElementById("Switch").checked){
        switchtoarabic();
    }
    else{
        switchtoenglish();
    }
    AdjustBodyWidth();
});
function switchtoenglish(){
    document.querySelector('body').style='direction:ltr';
    document.querySelector('.form-check-label').innerHTML = 'عربي';
    document.querySelector('.sidebar').style = 'left:0px';
    document.querySelector('.small-sidebar').style = 'left:0px';
    language = 'EN';
    document.getElementById('mainContentCol').style = 'padding-left : 186px;padding-right : 0px';
    document.getElementById('mainContentCol').style = 'padding-left : 110px;padding-right : 0px';
    document.querySelectorAll('.translate').forEach(e=>{
        e.innerHTML = e.getAttribute('langEN');
    });
    window.localStorage.setItem('language' , language);
}
function switchtoarabic() {
    document.querySelector('body').style='direction:rtl';
    document.querySelector('.form-check-label').innerHTML = 'EN';
    document.querySelector('.sidebar').style = 'right:0px';
    document.querySelector('.small-sidebar').style = 'right:0px';
    language = 'AR';
    document.getElementById('mainContentCol').style = 'padding-right: 186px;padding-left : 0px';
    document.getElementById('mainContentCol').style = 'padding-right : 110px;padding-left : 0px';
    document.querySelectorAll('.translate').forEach(e=>{
        e.innerHTML = e.getAttribute('langAR');
    });
    window.localStorage.setItem('language' , language);
}
// end language

// start color
if(document.getElementById('closeColorButton') && document.getElementById('openColorButton')){
    document.getElementById('closeColorButton').addEventListener('click' , function(){ // opening color panel
        document.getElementById('closeColorButton').style.display = 'none';
        document.getElementById('openColorButton').style.display = 'block';
        document.querySelector('.colorrow').style.display = 'none';
    });
    document.getElementById('openColorButton').addEventListener('click' , function(){ // close color panel
        document.getElementById('closeColorButton').style.display = 'block';
        document.getElementById('openColorButton').style.display = 'none';
        document.querySelector('.colorrow').style.display = 'flex';
    });
}

document.querySelectorAll('input[type=color]').forEach(e =>{
    e.addEventListener('change' , function(){
        document.documentElement.style.setProperty('--'+e.getAttribute('id') , this.value);
        window.localStorage.setItem('--' + e.getAttribute('id') , this.value );
    });
    if(window.localStorage.getItem('--'+e.getAttribute('id')) ){
    e.value = window.localStorage.getItem('--'+e.getAttribute('id'));
    }
});
let cssVar = [
    '--navBackgroundColor',
    '--navFontColor',
    '--sidebarBackgroundColor',
    '--sidebarFontColor',
    '--smallsidebarBackgroundColor',
    '--smallsidebarFontColor',
    '--theExamBackgroudColor',
    '--examCollectionBackgroundcolor',
    '--elementViewbody',
    '--elementViewbodyFontColor',
    '--elementViewFooter',
    '--elementViewFooterButtonFont',
    '--elementViewFooterFont',
    '--spanColor',
    '--footerBackgroundColor',
    '--sitebackground'
];
cssVar.forEach(e => {
    if(window.localStorage.getItem(e) ){
        document.documentElement.style.setProperty(e , window.localStorage.getItem(e));
    }
});

if(document.getElementById('setcolordefault')){
    document.getElementById('setcolordefault').addEventListener('click' , function(){
        cssVar.forEach(e => {
            window.localStorage.removeItem(e);
        });
        window.location.reload();
    });
}


// end color

// start sidebar
let sidebar = document.querySelector('.sidebar');


document.getElementById('openMenuButton').addEventListener('click' , function(){ // open button
    sidebar.style.display = "block";
    document.querySelector('.small-sidebar').style.display = 'none';

    if(language == 'AR'){
        document.getElementById('mainContentCol').style = 'padding-right: 186px;padding-left : 0px';
    }else{
        document.getElementById('mainContentCol').style = 'padding-left : 186px;padding-right : 0px';
    }
});
document.querySelector('.sidebar .close').onclick = function(){  // close button
    sidebar.style.display = 'none';
    document.querySelector('.small-sidebar').style.display = 'block';

    if(language == 'AR'){
        document.getElementById('mainContentCol').style = 'padding-right : 110px;padding-left : 0px';
    }else{
        document.getElementById('mainContentCol').style = 'padding-left : 110px;padding-right : 0px';
    }
    AdjustBodyWidth();
}
document.getElementById('secondmenuicon').addEventListener('click' , function(){ // open top menu
    document.querySelector('.sidebar').style = 'display:block; height: fit-content; width: 100%;z-index:4;';
    document.querySelector('.sidebar ul').style = 'align-items: flex-start;';
    document.querySelectorAll('.sidebar ul li').forEach(e=>{e.style = 'margin:10px 10px;';});
    let integerssss = document.querySelector('.sidebar').clientHeight + 20;
    document.getElementById('mainContentCol').style = `margin-top: ${integerssss}px; padding : 0;`;
    document.querySelector('.small-sidebar').style.display = 'none';
    document.getElementById('secondmenuicon').style.display = 'none';
});

AdjustBodyWidth();

function AdjustBodyWidth (){
    if(document.querySelector('body').clientWidth < '767'){
        document.querySelector('.small-sidebar').style.display = 'none';
        document.getElementById('mainContentCol').style = 'padding : 0';
        document.getElementById('secondmenuicon').style.display = 'block';
    }
}


// end sidebar

// loading animation
window.onload = function(){
    document.querySelector('.animation').style.display = 'none';
}
// loading animation

// start exam
let theexam = document.querySelector('.theexam');
let add_question = document.querySelectorAll('.question-button');
let add_answer = document.querySelectorAll('.answer-add-button');



add_question.forEach(e=> {    // create collection
    e.addEventListener('click' , function(){
        let theexam = document.querySelector('.theexam');
        theexam.append(document.createElement('div'));
        theexam.lastChild.setAttribute('class' , 'collection');
        theexam.lastChild.append(document.createElement('div') , document.createElement('ul') , document.createElement('button'));

        theexam.lastChild.lastChild.setAttribute('class' , 'btn btn-primary answer answer-add-button');
        theexam.lastChild.lastChild.innerHTML = 'add answer';


        let question_part = theexam.lastChild.firstChild;
        let answer_part = theexam.lastChild.children[1];

        question_part.setAttribute('class' , 'row');
        answer_part.setAttribute('class' , 'list-group');

        question_part.append(document.createElement('label') , document.createElement('div') , document.createElement('div'));
        question_part.firstChild.setAttribute('class' , 'form-label');
        question_part.firstChild.setAttribute('for' , 'question');
        question_part.firstChild.innerHTML = 'the question';
        question_part.children[1].setAttribute('class' , 'col-md-10');
        question_part.children[1].append(document.createElement('textarea'));
        question_part.children[1].firstChild.setAttribute('class' , 'form-control');
        // question_part.children[1].firstChild.setAttribute('id' , 'question');
        question_part.children[1].firstChild.setAttribute('rows' , 3);
        question_part.children[1].firstChild.innerHTML = "enter question here";
        question_part.lastChild.setAttribute('class' , 'col-md-2');
        question_part.lastChild.append(document.createElement('button'));
        question_part.lastChild.firstChild.setAttribute('class' , 'btn btn-danger question-delete-button');
        question_part.lastChild.firstChild.innerHTML = "delete";

        answer_part.setAttribute('class' , 'list-group');
        // answer_part.setAttribute('id' , 'answer');
        answer_part.append(document.createElement('label') , document.createElement('li'));
        answer_part.firstChild.setAttribute('class' , 'form-label');
        answer_part.firstChild.setAttribute('for' , 'answer');
        answer_part.firstChild.innerHTML = 'the answers';
        answer_part.lastChild.append(document.createElement('div'));
        answer_part.lastChild.firstChild.setAttribute('class' , 'row');
        answer_part.lastChild.firstChild.append(document.createElement('div') , document.createElement('div') , document.createElement('div'));
        answer_part.lastChild.firstChild.children[0].setAttribute('class' , 'col-md-1');
        answer_part.lastChild.firstChild.children[0].append(document.createElement('input'));
        answer_part.lastChild.firstChild.children[0].firstChild.setAttribute('type' , 'checkbox');
        answer_part.lastChild.firstChild.children[1].setAttribute('class' , 'col-md-9');
        answer_part.lastChild.firstChild.children[1].append(document.createElement('input'));
        answer_part.lastChild.firstChild.children[1].firstChild.setAttribute('class' , 'form-control');
        answer_part.lastChild.firstChild.children[1].firstChild.setAttribute('type' , 'text');
        answer_part.lastChild.firstChild.children[2].setAttribute('class' , 'col-md-2');
        answer_part.lastChild.firstChild.children[2].append(document.createElement('button'));
        answer_part.lastChild.firstChild.children[2].firstChild.setAttribute('class' , 'btn btn-danger answer-delete-button');
        answer_part.lastChild.firstChild.children[2].firstChild.innerHTML = 'delete';



        let add_answer = document.querySelectorAll('.answer-add-button');
        add_answer.forEach(e => {   // create and delete answer
            e.onclick= function(){
                let ul = e.parentElement.children[1];
                ul.append(document.createElement('li'));
                let li = ul.lastChild;
                li.append(document.createElement('div'));
                li.firstChild.setAttribute('class' , 'row');
                li.firstChild.append(document.createElement('div') , document.createElement('div') , document.createElement('div'));
                li.firstChild.children[0].setAttribute('class' , 'col-md-1');
                li.firstChild.children[0].append(document.createElement('input'));
                li.firstChild.children[0].firstChild.setAttribute('type' , 'checkbox');
                li.firstChild.children[1].setAttribute('class' , 'col-md-9');
                li.firstChild.children[2].setAttribute('class' , 'col-md-2');
                li.firstChild.children[1].appendChild(document.createElement('input'));
                li.firstChild.children[2].appendChild(document.createElement('button'));
                li.firstChild.children[1].firstChild.setAttribute('class' , 'form-control');
                li.firstChild.children[2].firstChild.setAttribute('class' , 'btn btn-danger answer-delete-button');
                li.firstChild.children[2].firstChild.textContent = 'delete';

                let delete_answer = document.querySelectorAll('.answer-delete-button');
                delete_answer.forEach(element => {
                    element.addEventListener('click' , function(){
                        element.parentElement.parentElement.parentElement.remove();
                    });
                });

            }
        });

        question_part.lastChild.firstChild.addEventListener('click' , function(){
            question_part.parentElement.remove();
        });
    });
});

let submit = document.querySelectorAll('.submit');
submit.forEach(e=> {    // submit button
    e.addEventListener('click' ,send_data);
});


// setInterval(send_data , 3000);


function send_data (){    // دالة رفع البيانات الي قاعدة البيانات
    let textarea = document.querySelectorAll('.theexam .collection .row textarea');
    let input = document.querySelectorAll('.theexam .collection ul li .row input');
    let exam_list = [];
    textarea.forEach(element => {
        let answer_list = [];
        let assit_list = [];
        let check_list = [];
        let ele_list = element.parentElement.parentElement.parentElement.children[1].children;
        for(let i = 1 ; i < ele_list.length ; i++){
            answer_list.push(ele_list[i].firstChild.children[1].firstChild.value);
        }
        for(let i = 1 ; i< ele_list.length ; i++){
            if(ele_list[i].firstChild.firstChild.firstChild.checked){
                check_list.push(i-1);
            }
        }
        assit_list.push(element.value , answer_list , check_list);
        exam_list.push(assit_list);
    });
    let join_list = [];
    exam_list.forEach(element => {
        join_list.push(element.join('||||'));
    });
    document.getElementById('examContent').value = join_list.join('$$$$$$');
    document.getElementById('examButton').click();
}

{/*
الشكل المنفذ أعلاه
<div class="collection">
    <div class="row">
        <label for="question" class="form-label">the question</label>
        <div class=" col-md-10">
            <textarea class="form-control" rows="3" id="question">enter question here</textarea>
        </div>
        <div class=" col-md-2">
            <button class="btn btn-danger question-delete-button">delete</button>
        </div>
    </div>
    <ul class="list-group" id="answer">
        <label for="answer" class="form-label">the answers</label>
        <li>
            <div class="row">
                <div class="col-md-1">
                    <input type="checkbox">
                </div>
                <div class=" col-md-9">
                        <input type="text" class="form-control">
                </div>
                <div class=" col-md-2">
                    <button class="btn btn-danger answer-delete-button">delete</button>
                </div>
            </div>
        </li>
    </ul>
    <button class="btn btn-primary answer answer-add-button">add answer</button>
</div> */}



// end exam

