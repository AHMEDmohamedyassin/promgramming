//selecting elements
// document.getElementById("the id name");
// document.getElementsByTagName("the name of tag as p or div");
// document.getElementsByClassName("class name");
// document.querySelector(".classname : as css"); //يأثر علي أول عنصر فقط
// document.querySelectorall(".classname : as css"); //يأثر علي كل العناصر
// console.log(document.title);
// console.log(document.body);
// console.log(myp.attributes);          search for all atribute
// console.log(myp.getAttribute("src")); search for selected attribute
// console.log(myp.setAttribute("title" , "newvalue")); for adding attribute or changing value of attribute
// .hasAttribute("class")
// .hasAttributes
// .removeAttribute



let myp =document.querySelector("p");
console.log(myp.innerHTML);
console.log(myp.textContent);
myp.innerHTML="this is edited by js";
document.images[0].alt= "alternate";
document.images[0].title= "image";
console.log(document.querySelector("img").getAttribute("alt"));
console.log(document.querySelector("img").attributes);
document.querySelector("img").setAttribute("title" , "picture it is added and setted by js");

if (myp.hasAttribute("class")){
    console.log("attributefound");
}else console.log("attribute not found"); 

if (myp.hasAttributes){
    console.log("there is attribute");
}else console.log("there is no attributes"); 

document.querySelector("img").removeAttribute("title");

//createElemenet
//createcomment
//createTextNode
//createAttribute
//apendChild

let myelement = document.createElement("div");
let mytext = document.createTextNode("this is the text");

myelement.className = "firstdiv";
myelement.setAttribute("title" , "this is title");

//append text to element
myelement.appendChild(mytext); // لاضافة الكلام من الآخر

//append element to body
document.body.appendChild(myelement);

//append comment to body
document.body.appendChild(document.createComment("this is comment"));

console.log(myelement);

//example on creating elements inside div with JS 100times
//for (let i =1; i<101; i++){
        //creating step
let themaindiv = document.createElement("div");
let theh2_insidediv = document.createElement("h2");
let thep_insidediv = document.createElement("p");
        //text step
let theh2text = document.createTextNode("the product title ");
let theptext = document.createTextNode("the product description");
        //adding items to step
theh2_insidediv.appendChild(theh2text);
thep_insidediv.appendChild(theptext);
themaindiv.appendChild(theh2_insidediv);
themaindiv.appendChild(thep_insidediv);
document.body.appendChild(themaindiv);
//}

//لتحديد العناصر
//.childern
//.childern[2]
//.childNodes
//.childNodes[4]
//.firstchild    ,    .lastchild
//.firstElementChild   ,  .lastElementChild

//the events : ==>

//onclick          right click
//oncontexmenu     left click
//onmouseleave     عندما تقف الفأرة علي شئ
//onmouseenter     عندما تترك الفأرة الشئ
//
//onload
//onscroll
//onresize
//
//onfocus  عند بدء الكتابة في خانة الكتابة
//onblur   عند الخروج من خانة الكتابة
//onsubmit عند الضغط علي خانة الكتابة
let thebutton = document.getElementById("button") ;
thebutton.onmouseenter = function(){console.log("the mouse passed on the button");}

document.links[0].onclick=function(event){
        console.log("the event prevented by js");
        event.preventDefault();
}

document.forms[0].onsubmit=function(event){
       let uservalid = "false";
       let agevalid  = "false";
       
       if(document.querySelector("[name='name']").value.length > 5 )uservalid = "true";
       if(document.querySelector("[name='age']").value != "") agevalid = "true";
      
       if (uservalid == "false" || agevalid == "false") 
       {
               event.preventDefault();
               console.log("submition prevented");
       }
}

window.onload=function(){
        document.querySelector("[name='name']").focus();
}
document.querySelector("[name='name']").onblur = function(){
        document.querySelector("[name='age']").focus();
}

/*finding and adding classes
   classlist
   length
   contains
   item (need the index of needed class index)
   add
   remove
   toggle
*/
let testingpara = document.getElementById("thetest");
console.log(testingpara.classList);
console.log(testingpara.classList.contains("ahmed")); //true  or false
console.log(testingpara.classList.length);
console.log(testingpara.classList.item(3));
testingpara.oncontextmenu=function(){testingpara.classList.remove("add-one" , "add-two");} //to remove class
testingpara.onclick=function(){
        testingpara.classList.toggle("thetoggleclass"); //to remove exited class and add not exited class
        testingpara.classList.add("add-one" , "add-two"); //to add class
}
testingpara.style.color="#f00";
testingpara.style.fontWeight="bold";
testingpara.style.cssText="font-size:32px; opacity:0.5; color:#00f";
testingpara.style.removeProperty("font-size");

/*التعامل مع العناصر
.append
.prepend
.after
.before
.remove
*/
let thecreatedp = document.createElement("p");
let thepctext   = document.createTextNode("this is the text in 161");
document.body.appendChild(thecreatedp);
thecreatedp.appendChild(thepctext);
thecreatedp.append("this is appended text and its able to append variable");

/*moving between elements
   .nextelementsibling
   .previouselementsibling
   .parentelement
 */
let thespan = document.getElementById("two");
thespan.onclick=function(){
        thespan.parentElement.remove();
}








// الفيديو ال99 :)
let myparagraph = document.createElement("p");
myparagraph.setAttribute("class" , "theadded"); 
document.body.appendChild(myparagraph); //إنشاء p
myparagraph.appendChild(document.createTextNode("this is the made paragraph by JS "));

myelement.appendChild(document.querySelector(".theadded")).cloneNode(true); //المفروض أنه ينسخ الparagraph ولس ينقله

for(let i = 0 ; i < 10 ; i++){
        console.log(i);
}