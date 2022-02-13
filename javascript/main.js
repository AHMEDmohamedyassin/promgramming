window.onload=function()
{
    document.querySelector("p").style.color = "#00f";
    console.log("hello to console form %cj%cs","font-size:32px; color:red;","font-size:32px; color:blue;");
    var var_name = "ahmed";
    console.error("there is error " + var_name + " is the programer :)");
    console.table(["window" , "document" , "console"]);
    console.log(hello); 
    hello.innerHTML = "changed from js";
    //variable kinds:
    // var : can be redecrealed, scope in window
    // const: can not be redecrealed ,doesnot scope in window
    // let: can not be redecrealed,doesnot scope in window
    console.log("this is scape operator : \"example\" \
    scape opaerator let typing in the next line \n this is variable "+var_name+" \\n");
    console.log(`instead of wirting like upper style 
    we can use this style it has no double coats or \\n 
    we can write variables like that ${var_name}`);
    headding.innerHTML = "hello ahmed";
    paragraphing.innerHTML= "a h m e d    w e b";
    timing.innerHTML = "25/10";

    /*number number number number number number number number number  */

    console.log(100..toString());  /*تحول الرقم لكلمة */
    console.log(100.5564.toString());  /*تحول الرقم لكلمة */

    console.log(100.56417945.toFixed(2));

    console.log(Number("100 ahmed"));  /*لو الكلام عبارة عن رقم فقط يحول إلي رقم*/ 
    console.log(+"100ahmed");    /*لو الكلام عبارة عن رقم فقط يحول إلي رقم*/
    console.log(parseInt("100.5816 ahmed")); /*لو الكلام عبارة عن رقم فقط يحول إلي رقم صحيح*/
    console.log(parseFloat("100.524 ahmed")); /*لو الكلام عبارة عن رقم فقط يحول إلي رقم عشري*/
    console.log(parseInt("ahmed 100 ahmed")); /*لن يتم اكتشاف الرقم في وسط الكلام */

    console.log(Number.isInteger(100));
    console.log(Number.isNaN("ahmed"));

    console.log(Math.round(99.2));
    console.log(Math.ceil(100.2));
    console.log(Math.floor(100.9));
    console.log(Math.max(100 , 465 , 18 , 46 , 674));
    console.log(Math.min(100 , 465 , 18 , 46 , 674));
    console.log(Math.pow(10 , 2));
    console.log(Math.random());
    console.log(Math.trunc(99.30)); /*بزيل الكسور العشرية */
/*string string string string string string string string string string  */
    var my_name = "  Ahmed  Mohamed   Yassin ";
    console.log(my_name);
    console.log(my_name[2]);
    console.log(my_name.charAt(2));
    console.log(my_name.length);
    console.log(my_name.trim()); /*يزيل المسافات التي في البداية */
    console.log(my_name.toUpperCase());
    console.log(my_name.toLowerCase());

    console.log(my_name.indexOf("Ahmed")); /*يبحث عن الكلمة و يعطي موقعها */
    console.log(my_name.indexOf("Mohamed" , 3));  /*يبحث عن الكلمة و يعطي موقعها يمكن تحديد مكان بداية البحث */
    console.log(my_name.lastIndexOf("Yassin"));
    console.log(my_name.slice(0,15)); /*تستخدم في القطع */
    console.log(my_name.repeat(5));
    console.log(my_name.split("")); /*يقص كل حرف علي حدا */
    console.log(my_name.split(" "));/*يقص من عند المسافات */
    console.log(my_name.split("",6)); /*يمكن تحديد عدد القصاصات */

    console.log(my_name.substring(0,6)); /*قطع عن طريق تحديد البداية(اجباري) و النهاية  (اختباري)  */
    console.log(my_name.substr(9,8)); /*قطع عن طريق تحديد البداية(اجباري) و عدد الأحرف المطلوبة  (اختباري)  */
    
    console.log(my_name.includes("Mohamed")); /*يتحقق من وجود المطلوب البحث عنه ب true or false */
    console.log(my_name.includes("Mohamed" ,16)); /*   يتحقق من وجود المطلوب البحث عنه يمكن تحديد موقع بداية البحث true or false */
    console.log(my_name.startsWith("A",2));
    console.log(my_name.endsWith("d" , 7)); /* يبحث عن نهاية الحرف في الكلمات ذات الحجم المحدد */

    /*اختبار اختبار اختبار اختبار اختبار اختبار اختبار اختبار  */
    
    let a= "Elzero Web School";
    console.log(a.slice(2,6));
    console.log(a[13].toUpperCase().repeat(8));
    console.log(a.substr(0,6));
    console.log(a.substr(0,6),a.substr(-6,7));
    console.log(a[0].toLowerCase(),a.substring(1,a.length-1).toUpperCase(),a.substring(a.length-1,a.length).toLowerCase());

    /*comparison comparison comparison */
    console.log(10 == "10"); /* comparison according to value only*/
    console.log(10 === "10"); /*comparison according to value and type */
    console.log(10 !== "10"); /*نفي للمساواه */
    console.log(!(10 === "10")); /*inversing the result */
    console.log(10 == 10 && 10 > 8 || 10 <= 2);/*and , or */
/*example on if else example on if else example on if else example on if else  */
    let price = 100;
    let discount = false;
    let discountamount = 30;
    let country = "egypt";
    /*
    if (discount == true){ price -= discountamount;}
    else if (country == "egypt"){price -= 50;}
    else {price += 10;}

    console.log(price);
    */
/*another way of writting if condition */
    discount == true ? price -=discountamount : country == "egypt" ? price -= 50 : price += 10;
    console.log(price);
    /************************************************** */
/*لتجنب الخطأ  */ /*لتجنب الخطأ  */ /*لتجنب الخطأ  */ /*لتجنب الخطأ  */
    let coast = undefined;
    let zerocoast = 0;
    console.log(`the price is ${coast || "not found"}`);
    console.log(`the price is ${zerocoast ?? "not found"}`);

    /*switch case switch case switch case switch case switch case  */
    let day = 5;
    switch(day){
        case 1:
            console.log("يوم السبت");
            break;
        case 2:
            console.log("يوم الأحد");
            break;
        case 3:
            console.log("يوم الإثنين");
            break;
        case 4:
            console.log("يوم الثلاثاء");
            break;
        case 5:
            console.log("يوم الأربعاء");
            break;
        case 6:
            console.log("يوم الخميس");
            break;
        case 7:
            console.log("يوم الجمعة");
            break;        
        default:
            console.log("أيام الأسبوع سبعة :)");
            }
/*array array array array array array array array array array array array */
    let first_array = ["ahmed" , "mohamed" , "heba" , ["ahmed" , "heba"]];
    console.log(first_array);
    console.log(first_array[0]);
    console.log(first_array[0][2]);
    console.log(first_array[3][0][3]);
    first_array[0] = "أحمد";
    console.log(first_array[0]);
    console.log(first_array.length);
    first_array[first_array.length] = "nour"; /*لإضافة عنصر في آخر المصفوفة */
    console.log(first_array);
    first_array.length = 3; /*التحكم في المصفوفة تحديد حد أقصي لها*/
    console.log(first_array);

    first_array.unshift("ahmed again" , "ahmed another");/*لإضافة عناصر في البداية */
    console.log(first_array);
    first_array.push("ahmed from the end" , "it is ahmed"); /*لإضافة عناصر في النهاية */
    console.log(first_array);
    first_array.shift(); /*لحذف عناصر من البداية */
    console.log(first_array);
    first_array.pop(); /*لحذف عناصر من النهاية */
    console.log(first_array);

    let the_removed_element = first_array.pop();
    console.log(the_removed_element); /*طريقة اظهار العنصر المحذوف */
    console.log(first_array);
/* "finding items inside array" and "sorting" and "reversing" and "slice" and "splice" and "concat" */
    let arrays = ["ahmed" , "heba" , "mohamed" , 1 ,2 ,300];
    console.log(arrays.indexOf("mohamed" , 1)); /*كتابة العنصر المطلوب و بدابة البحث */
    console.log(arrays.indexOf("nour"));/*بعطني -1 يعني غير موجود */
    console.log(arrays.includes("mohamed" , 1));

    if(arrays.indexOf("nour")==-1)
    {
        console.log("not found")
    }
    
    console.log(arrays.sort());
    console.log(arrays.reverse());
    console.log(arrays.slice(1,3));
    console.log(arrays.splice(0,3,1,2,3,4));/*تم حذف من العنصر 0 و الثلاث عناصر بعده و تم اضافة الأرقام 1‘ 2 ‘ 3 ‘ 4 */
    console.log(arrays);
                         /*concat */
    let array1 = ["css" , "html" , "javascript"];
    let array2 = ["c++" , "python" , "java"];
    let concat_array = arrays.concat(array1 , array2 , "added item" , [1,2]);
    console.log(concat_array);
    console.log(concat_array.join(" | ")); /* يجعل المصفوفة عبارة واحدة و بفصل بينها ما يحدد بين الأقواس */
/* test test test test test test test test test test test test test test test */
    let my = ["ahemd" , "mazero" , "elham" , "osama" , "gamal" , "ameer"];
    let zero = 0;
    let counter = 3;
                 /* 1 */
    /*my.pop();
    my.pop();
    my.reverse();
    console.log(my);*/
                /* 2 */
    // my.shift();
    // my.reverse();
    // console.log(my.slice(counter));
                /* 3 */
    let elzero =[my[--counter][zero],my[counter][++zero],my[zero].slice(counter++)]; 
    console.log(elzero.join(""));
                /* 4 */
    // let ro = [elzero[counter+zero++],elzero[counter+zero].toUpperCase()];
    let ro = [elzero[++zero][zero],elzero[zero][counter].toUpperCase()];
    console.log(ro.join(""));
    /*end test end test end test end test end test end test end test end test end test  */
    
    /*loop loop loop loop loop loop loop loop loop loop loop loop  */
    let names_numbers =[1,2,3,"ahmed" , "css" , "html" , "javascript"];
    let only_names = [];
    // for(let i = 0; i < names_numbers.length ; i++)
    // {
    //     if(typeof names_numbers[i] ==="string")
    //     {
    //         only_names.push(names_numbers[i]);
    //     }
    // }
    // console.log(only_names);

    /* طريقة أخري باستخدام break و continue */

    for(let i = 0 ; i < names_numbers.length; i++)
    {
        if(typeof names_numbers[i] === "number")
        { continue;} //حتي يتجاوز الأرقام
        only_names.push(names_numbers[i]);
        if(names_numbers[i] == "html")
        {break;} //حتي يتوقف عند كلمة html
    }
    console.log(only_names);
    /* عرض المنتجات  عرض المنتجات  عرض المنتجات  عرض المنتجات  عرض المنتجات  */
    let product_count = 5;
    let product = ["pen" , "keyboard" , "mouse" , "screen" , "case" , "processor"];
    let product_color = ["green" , "blue" , "red"];

    document.write(`<h1>view ${product_count} products</h1>`);
    for(let i=0; i<product_count; i++)
    {
        document.write(`<h3>[${i + 1}] ${product[i]}</h3>`);
        for(let j = 0; j<product_color.length; j++)
        {
            document.write(`(${j + 1}) ${product_color[j]}</p>`);
        }
        document.write(product_color.join("  |  "));
    }
    /* challenge challenge challenge challenge challenge challenge  challenge challenge challenge */
    document.write(`<hr>`);    document.write(`<hr>`);    document.write(`<hr>`);
    let myadmins = ["ahemd" , "osama" , "sayed" , "stop" , "samera"];
    let myemployees = ["amgad" , "sameh" , "amer" , "omar" , "othman" , "ayman" , "samia"];

    document.write(`<p> we have ${myadmins.length} admins</p>`);
    document.write(`<hr>`);
    mainloop:for(let i = 0; i<myadmins.length ; i++)
    {
        if(myadmins[i] == "stop") break;
        document.write(`the admin for team ${i + 1} is ${myadmins[i]}`)
        document.write(`<h2>team members</h2>`);
        let count = 1;
        nestedloop:for(let j=0; j<myemployees.length; j++)
        {
            if(myemployees[j][0] !== myadmins[i][0]) {continue nestedloop;}
            document.write(`<p>- [${count}] ${myemployees[j]}</p>`);
            count++;
        }
        document.write(`<hr>`);
    }
    /************************************************************************************ */
    /************************************************************************************ */
    /*function DRY donot repeat your self */
    function sayhello (username ,age ="unknown")
    {
        if(username == undefined) console.log(`enter your name`);
        else if(age < 30) console.log(`you cannot use app`);
        else console.log(`hello ${username} your age is ${age}`);
    }
    sayhello("moustafa",28);
    sayhello("ahmed",50);
    sayhello("hamada");
    sayhello();

    function calc(num1 , num2)
    { return num1 + num2 ;}
    console.log(calc(2,5) + 2);

    function procalc (...num) //rest parameters ,it is array its length determined according to parameters you add
    {
        let res = 0;
        for(let i=0; i<num.length ; i++)
        {
            res += num[i];
        }
        return `you can add infinite numbers to sum , the final result is ${res}`
    }
    console.log(procalc(20,50,30,40));

    function show_person (ur="unknown" , age="unknown" , showskills="yes" , ...skills)
    {
        document.write(`<h2>hello, ${ur}</h2>`);
        document.write(`<p>the age is ${age} years</p>`);
        if(skills.length>0)
        {
            if(showskills== "yes")
            {
                document.write(`<h3>the skills</h3>`);
                for(let i=0; i<skills.length; i++)
                {document.write(`<p>[${i + 1}] ${skills[i]}`);}
            }
            else {document.write(`<h3>skills hidden</h3>`);}
        }
        else {document.write(`<h3>no skills</h3>`);}
    }
    show_person("ahmed" , 19.3 , "yes" , "html" , "css" , "JS" , "php"); 

/*function challenge function challenge function challenge function challenge  */ 
function challengefunction (item1 , item2 , item3) 
{
        challengearray=[item1 , item2 , item3];
        for(let i=0; i<challengearray.length; i++) 
        { 
            if(typeof challengearray[i] === "string")  console.log(`the name is ${challengearray[i]}`);
            else if(typeof challengearray[i] === "number")  console.log(`the age is ${challengearray[i]}`);
            else console.log(`the boolean is ${challengearray[i]}`);
        } 
}
challengefunction(true , 40 , "ahmed");

/*challenge arrow function challenge arrow function challenge arrow function challenge arrow function  */
    function pracites (arr){return arr.join("] [");}
    // let names = function (...namesss){
    //     return `string [${pracites(...namesss)}] => Done !`;}
    
    /* arrow method arrow method */
    
    let names = (...namesss) => `string [${pracites(...namesss)}] => Done !`;
    
    console.log(names([" osama "," ahmed " , " dosoki "]));
/*highter order function highter order function highter order function  */
/*types: 
        map() */
    
    let numarr = [1,2,3,4,5,6];
    let duplicatenumarr =[];
    for(let i=0; i<numarr.length ; i++) {duplicatenumarr.push(numarr[i]+numarr[i]);}
    console.log(duplicatenumarr);
    //by using map
    let usingmap = numarr.map(function(/*element , index , array */ ele , idx , arr){
        // console.log(`تعريف بالعناصر`);
        // console.log(`the element ${ele}`);
        // console.log(`the index ${idx}`);
        // console.log(`the array ${arr}`);
        // console.log(`this arrgument ${this}`);
        return ele + ele ;
    } ,10)
    console.log(usingmap);

    /* مثال أكبر كلمة  مثال أكبر كلمة مثال أكبر كلمة */
    let stringlist = ["ahmed" , "mohamed" , "yassin" , "heba" , "salama"];
    let largeststring ="test";
    for (let i=0 ; i<stringlist.length ; i++)
    {
        if(stringlist[i].length>largeststring.length) {largeststring = stringlist[i];}
    }
    console.log(largeststring);
    /*هذا المثال يثبت عدم أهمية ال filter map reduce */
    /*مثال MAP */
    let swappingcases = "elZERo";
    let sw = swappingcases.split("").map(function (ele)
    {
        if(ele === ele.toUpperCase())
        return ele.toLowerCase();
        else return ele.toUpperCase();
    }).join("");
    console.log(sw);
    /*مثال map inverted numbers */
    let invertednumbers = [-1,5,-4,-3 ,7];
    let invn = invertednumbers.map(function (ele) 
    {
        // if(ele > 0) return -ele;
        // else return -ele;
        /*return ele > 0 ? -ele : -ele ;*/
        return -ele;
    })
    console.log(invn);
    /*map example ignore numbers  */
    let ignorenumber = "a16h586m659e3564d65";
    let ignu = ignorenumber.split("").map(function (ele){
        if (isNaN(parseInt(ele))) return ele;
        else return "";
    }).join("");
    console.log(ignu);
    /*filter filter filter بيرجع العناصر التي تجاوزت الاختبار */
    let nnames = ["ahmed" , "mohamed" , "ahm"];
    let ns = nnames.filter(function (ele) 
    {
        // return ele.startsWith("a");
        return ele[0]=="a";
    })
    console.log(ns);
    /*example on filter example on filter example on filter  */
    let oddeven = [11 ,20 ,40 ,3];
    let oe = oddeven.filter(function (ele)
    {
        return ele%2==0;
    })
    console.log(oe);
    /*filter example عدد الأحرف */
    let text ="i feel good toool ma ana mawogood";
    let tt=text.split(" ").filter(function(ele)
    {
        return ele.length<5;
    }).join(" ");
    console.log(tt);
    /*filter map example */
    let numstring ="1ah2me3d";
    let nsg=numstring.split("").filter(function(ele)
    {
        return !isNaN(parseInt(ele));
    }).map(function(ele)
    {
        return ele * ele;
    }).join("");
    console.log(nsg);
    /*reduce reduce reduce reduce reduce reduce reduce  */
    /* .reduce(accumulator, current ,index , array) */
    let sumnum = [3,8,41,8,6,3,4];
    let sn = sumnum.reduce(function (acc , curr )
    {
        return curr +acc;
    },10) // ذلك الرقم هو البداية initial value 
    console.log(sn);
    /*for each for each for each for each for each  */
    /*for each for each for each for each for each  */
    /*for each for each for each for each for each  */
    /*for each for each for each for each for each  */
    document.write(
        `
    <hr>
    <ul>
    <li class="active">one</li>
    <li>two</li>
    <li>three</li>
    </ul>
    <div>first</div>
    <div>second</div>
    <div>third</div>
        `);
    let all_list = document.querySelectorAll("ul li");
    let all_div = document.querySelectorAll("div");
    all_list.forEach(function (ele)
    {
        ele.onclick = function (){
            all_list.forEach(function(ele){
            ele.classList.remove("active");
            });
        this.classList.add("active");
        all_div.forEach(function(ele)
        {
            ele.style.display = "none";
        });
    }
    });
    /*for each example for each example for each example for each example  */
    let thestring = "1,2,3,ee,l,z,e,r,o,_,w,e,b,_,s,c,h,o,o,l,2,0,2";
    let ts = thestring.split(",").filter(function (ele) 
    {
        return isNaN(parseInt(ele));
    }).map(function (ele) 
    {
        if(ele.length >1) {
            if(ele[0] === ele[1]) return ele[0];
        }
        else return ele;
    }).join("").split("_").join(" ");
    console.log(ts);
    /******************************************************************** */
    /*object object object object object object object object object object  */
    let firstobject = {           //let firstobject = new object({.....});
        username : "ahmed",
        age : 15,
        phone : 53524 ,
        skills : ["html" , "css" , "js"] ,
        avalibility : false ,
        addresses : {
            ksa : "riyad",
            egypt : {
                one :"cairo" ,
                two :"giza" ,
            },
        },
        
        isavalible :function (){
            if(this.avalibility === false) return `is not avalible`;
            else return `is  avalible`;
        },
        say_hello : function ()
        {
            return `hello ${firstobject.username}`;
        },
    };
    firstobject.age = 60; //بمكن التعديل علي العناصر
    firstobject.country = "Egypt";  // يمكن اضافة عناصر
    console.log(firstobject.username);
    console.log(firstobject.age); //العنصر المعدل
    console.log(firstobject.phone);
    console.log(firstobject.addresses.ksa);
    console.log(firstobject.addresses.egypt.one);
    console.log(firstobject.skills[1]);//التحكم في عناصر المصفوفة
    console.log(firstobject.country); //العنصر المضاف
    console.log(firstobject.say_hello());
    console.log(firstobject.isavalible());

    let cOpYobject = Object.create(firstobject); //إنشاء object  مشابه له
    console.log(cOpYobject.phone);
    console.log(cOpYobject.addresses.ksa);
    
    let finalobject = Object.assign({} , firstobject , {property: 1 , property2 : 2,}); //يمكن اضافة خواص جديده و اضافة objects
    console.log(finalobject);


