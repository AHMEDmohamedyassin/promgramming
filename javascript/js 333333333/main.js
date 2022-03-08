let div = document.querySelector("div");


// alert('hello');

// document.write(`<h1>  ${   prompt('enter your name')   }  </h1>`);

// if(confirm('are you')){
//     document.write(`<h1>confirmed</h1>`);
// }
// else document.write(`<h1>canceled</h1>`);


// settimeout ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// let variable = '3';

// setTimeout(() => {
//     document.write(`<h2>${variable}seconds</h2>`);
// }, 3000 , variable);

// let handle =  setTimeout(settimefunction , 3000 , variable );   لازم تتعرف في متغير حتي يمكن استخدام cleartimeout

// function settimefunction (variable){
//     document.write(variable);
// }

// clearTimeout(handle);  توقف التوقيت

// setinterval ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


// function MyFunctino (){
//     div.innerHTML -= 1 ;
//     if (div.innerHTML === "0"){
//         clearInterval(counter);
//     }
// }

// let counter = setInterval(MyFunctino , 1000);

// location object ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// --location
// -----href 
// -----host
// -----hash
// -----protocol                     // its able to make set and get form all
// -----reload()
// -----replace()                    // remove current page form history  =>    location.replace("https://www.google.com")
// -----assign()                     // as replace but doesnot replace page from history

// console.log(location);
// console.log(location.href);
// // location.href = 'https://www.google.com/';
// // location.href = '#ahmed';
// console.log(location);
// console.log(location.host);
// console.log(location.hostname);
// // location.host = "google.com";
// console.log(location.protocol);  // http or https
// document.write(`<button>reload</button>`);
// document.querySelector('button').addEventListener('click' , function(){location.reload()});


// window open and close ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// window.scrollX     ,    window.scrollY                          // يعظي قيمة الحركة في الصفحة
// window.onscroll                       gives boolian value
// window.scrollTo( x , y || options)
// window.scrollBy( x , y || options)
// or 
// window.scrollTo({
//     left : 100 , 
//     top: 200 , 
//     behavior: "smooth"
// });

// window.close()             // يغلق الصفح المفتوحة من ال js
// window.open("https://www.google.com" , "_blank" , "width=400 , height=300 , top=50 , left=800");

// history ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// history.length 
// history.forward()
// history.back()
// history.go(-1)                   // أكتب رقم الصفحة المراده

// scrolling ~print~~stop loading~~  printing~~~focus()~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// window.stop()
// window.print()

// let new_window = window.open("https://www.google.com" , "_blank" , "width=400 , height=300 , top=50 , left=800");
// new_window.focus();
// document.write(`<button>close new window </button>`);
// document.querySelector('button').addEventListener('click' , function(){new_window.close();
// });


// localStorage ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// window.localStorage.setItem('color' , '#f00');                    // set item
// div.innerHTML = window.localStorage.getItem('color');             // get item
// window.localStorage.removeItem('color');                        // remove item
// window.localStorage.clear();                                    // remove all items
// div.innerHTML = window.localStorage;                              // show all items


///////// مثال مثال مهم ////////// document.write(`<input class="name">`);
///////// مثال مثال مهم ////////// document.querySelector('.name').onblur = function(){
///////// مثال مثال مهم //////////     div.innerHTML = this.value;
///////// مثال مثال مهم //////////     window.localStorage.setItem('name' , this.value);
///////// مثال مثال مهم ////////// }



// sessionStorage ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// window.sessionStorage.setItem('color' , '#f00');                    // set item
// div.innerHTML = window.sessionStorage.getItem('color');             // get item
// window.sessionStorage.removeItem('color');                        // remove item
// window.sessionStorage.clear();                                    // remove all items
// div.innerHTML = window.sessionStorage;                              // show all items


// مثال  // مثال  // مثال  // مثال  // مثال  // مثال  // مثال  // مثال  // مثال  // مثال  // مثال  

// document.write(`<input class="form-control" id='input' type="text"> <button> add </button>`);
// let text = document.getElementById('input');
// let btn  = document.querySelector('button');

// btn.onclick = function(){
//     if(localStorage.value){
//         localStorage.value = localStorage.value + ',' + text.value;
//     }
//     else { 
//         localStorage.value = text.value; 
//     }
//     text.value = '';
//     location.reload();
// }

// let arr = localStorage.value.split(",");

// for(let i = 0 ; i<arr.length ;i++){
//     document.write(`<div>${arr[i]}<button id='delete${i}'>delete</button></div>`);
//     document.getElementById('delete' + i).addEventListener('click' , function(){
//         console.log(arr.splice(i,1));
//         localStorage.value = arr.join(",");
//         location.reload();
//     });
// };

// destructuring ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// let names = ['html' , [ 'bootstrap' , ['sass' , 'angular' ] ], 'css' , 'js' , ['php' , ['laravel' , 'vue' ] ] ];

// let [a = 'can not be edited' , [ , [ , z ]] , , b , c , d , e = 'not found' ] = names ;     // إذا تم إضافة قيمة هنا و يوجد قيمة في 
// // المصفوفة فسيسجل القيمة التي في المصفوفة أما إذا لم يكن هناك قيمة في المصفوفة فستسجل القيمة هنا

// console.log(a);          // html
// console.log(b);          // js 
// console.log(c);          // [php , [laravel , vue]]
// console.log(d);          // undefined
// console.log(e);          // not found
// console.log(c[1][0]);    // laravel
// console.log(z)           // angular


// // used in swapping variables

// let book = 'video';
// let video = 'book';

// [book , video] = [video , book];

// console.log(book);      // book
// console.log(video);     // video

// // disturcture objects

// let user = {
//     name : 'ahmed',
//     age : 20,
//     country : 'eg',
//     skills : {
//         html : 70 , 
//         css  : 30 ,
//     }
// };
// console.log(user.name);
// console.log(user.age);
// console.log(user.country);

// let { name : n , country , color : co = "red" , skills : { html : skillone , css } } = user ;   //لو حبيت أفوت واحد مش لازم أسيب مكان فاضي لأنه يتم استدعاء العنصر باسمه و يمكن إعطاع اسم مختلف كعنصر الاسم
// // ({ name , age , country } = user );  //// في حالة تم تعريفهم من قبل 

// console.log(n);
// console.log(country);
// console.log(co);
// console.log(skillone);
// console.log(css);



// showdetails(user);

// // function showdetails ( obj ){
// //     console.log(`your name is ${obj.name}`);
// //     console.log(`your age is ${obj.age}`);
// //     console.log(`your country is ${obj.country}`);
// //     console.log(`your first skill is ${obj.skills.html}`);
// // }

// function showdetails ({name , age , country , skills : { html } } = obj ){
//     console.log(`your name is ${name}`);
//     console.log(`your age is ${age}`);
//     console.log(`your country is ${country}`);
//     console.log(`your first skill is ${html}`);
// }

// test test test test test test test test test test test test test test test test
// let choose = 0;
// let friends = [
//     {title : "first"  , age : 20  , available : true  , skills : ['html' , 'css'] }         ,
//     {title : "second" , age : 21 , available : false  , skills : ['js' , 'python'] }        , 
//     {title : "third"  , age : 22  , available : false , skills : ['django' , 'laravel'] }
// ];

// test(friends[choose]);

// function test ( {title , age , available , skills : [ , a ] } = array[index] ){
//     console.log(`the title is ${title}`);
//     console.log(`the age is ${age}`);
//     console.log(`the availability is ${available}`);
//     console.log(`the skill is ${a}`);
// }

// set data type ~in objects~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// delete
// set 
// add
// clear
// has

// let object = new Set(['1' , '2' , '3']);
// object.add(4).add(5);
// object.delete(4);
// console.log(object.has('2'));
// console.log(object);

// object.clear();
// console.log(object);

// set data type in maps ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// set 
// get
// delete
// clear
// has
// .size          // this is property

// let my_map = new Map([
//     ['name' , 'ahmed'],
//     ['age' , 19],
//     ['10' , 'string'],
//     [10 , 'number'],
//     [false , 'boolean'],
// ]);

// my_map.set('country' , 'eg');

// console.log(my_map.get('name'));        // ahmed
// console.log(my_map.get(10));            // number
// console.log(my_map.get('10'));          // string
// console.log(my_map.get(false));         // boolean
// console.log(my_map.get('country'));     // eg

// console.log(my_map.delete('age'));      // true
// console.log(my_map.get('age'));         // undefined
// console.log(my_map.has('age'));         // false

// console.log(my_map.clear());            // undefined
// console.log(my_map.size);               // 0

// array form ~~~~~function arguments~~~~~~~~array some~~~~~~~~~~~~~~~~~~~~~~~~
// let arra = Array.from("12345678");
// console.log(arra);

// console.log(
//     Array.from("12345" , function(n){
//         return +n + +n;                        // علامة الزائد قبل الأحرف لتحويله لرقم
//     })
// );

// let arr = [10 , 20 , 30 , 40 , 50 , 'a' , 'b'];
// console.log(arr.copyWithin(3,1));  //  [10, 20, 30, 20, 30, 40 , 50]
// console.log(arr.copyWithin(4,6));     // [10, 20, 30, 40, 'b', 'a', 'b']
// console.log(arr.copyWithin(1,-2));   // [10, 'a', 'b', 40, 50, 'a', 'b']


// let arr = [1,2,3,4,5,6,7,9];
// let check = arr.some(function(e){
//     return e > 5 ;                            //  هنا يعطني إشارة إن كان موجود أم لا فقط
// });
// console.log(check);


// let this_number = 20;

// check = arr.some(function(e){
//     return e > this;
// }, this_number );

// console.log(check);

// let rang = {
//     min : 5 , 
//     max : 20,
// }

// check = arr.some((e) => e <= this.max && e >= this.min , rang);
// console.log(check);

// function fu (){
//     return arguments;
// }

// console.log(fu("ahmed" ,"mohamed"));
