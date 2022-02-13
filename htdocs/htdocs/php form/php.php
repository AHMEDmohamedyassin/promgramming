<?php
    define('name' , 'ahmed'); // constants
    echo name .'<br>';

    $file = @fopen('forms.php' , 'r') ; // or die('this file is not found');  علامة ال@ لمنع ظهور الخطأ 

    echo '<br>';
    echo __FILE__ . '<br>';    // مسار الملف باسم الملف
    echo __DIR__. '<br>';    // مسار الملف بدون الملف
    echo __LINE__ . '<br>';    // رقم السطر البرمجي
    echo PHP_INT_MAX . '<br>';    // أكبر رقم صحيح في اللغة

    echo '<pre>';                                                               // getdate() للحصول علي أي شئ في الوقت
    print_r(getdate());                                                         // getdate() للحصول علي أي شئ في الوقت 
    echo '</pre> <br> the year from getdate() is '. getdate()['year'] . '<br>'; // getdate() للحصول علي أي شئ في الوقت

    echo getlastmod() .'<br>'; // للحصول علي موعد اخر تعديل تم علي الصفحة

    echo gettype(name) .'<br>';

    // header('REFRESH:5; URL= THE URL ');                                          للتحول إلي عنوان أي رابط

    // array // array // array // array // array // array // array // array // array // array // array // array // array

    $array = array(
        'html' ,
        'css' ,
        'js' ,
        'php' ,
        'wordpress' ,
        'jquery' ,
        'sipersecurity'
    );
    $array2 = array(
        'lagn 2' => 'html' ,
        'lagn 1' => 'css' ,
        'lagn 4' => 'js' ,
        'lagn 3' => 'php' ,
        'lagn 6' => 'jquery' ,
        'lagn 5' => 'sipersecurity' ,
    );
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    echo '<pre>';
    print_r($array2);
    echo '</pre>';

    // echo count($array);                                             //لإظهار عدد العناصر في المصفوفة

                                                                    //البحث عن العناصر في المصفوفة 
    // echo 'the item html found state(true or false) : '. in_array('js' , $array) . '<br>';   // in_array(needle , array , state);     البحث في المصفوفة
    // echo 'the item html found in array in index : '. array_search('php' , $array) . '<br>'; // array_search(needle , array , state); البحث في المصفوفة
                                                                    // الترتيب
    // // sort(array , sort type(optional) )      ترتيب المصفوفة
    // // Rsort(array , sort type(optional) )
    // // ksort(array , sort type(optional) )
    // // Rksort(array , sort type(optional) )
    // ksort($array2);
    // echo '<pre>';
    // print_r($array2);
    // echo '</pre>';
                                                                      //الحذف 
    // $pop = array_pop($array);     // الحذف من أول المصفوفة
    // $shift = array_shift($array); // الحذف من اخر المصفوفة
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';
    // echo 'the removed from end is '.$pop .'<br>';
    // echo 'the removed from first is '.$shift.'<br>';
                                                                        // الإضافة
    // //array_push(array , value1 , value2 , ......)
    // //array_unshift(array , value1 , value2 , ......)
    // $push = array_push($array , 'added value1 from last' , 'added value2 from last');
    // $unshift = array_unshift($array , 'added value1 from first' , 'added value2 from first');
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';
                                                                        //for each -> in arrays
    // foreach($array as $value){  // for index array
    //     echo $value .'<br>';
    // }
    // foreach($array2 as $key => $value){  //for associative array
    //     echo 'this key : [' . $key . '] , is for this value : [' .$value . ']<br>';
    // }
                                                                        // عكس ترتيب المصفوفة أو ترتيبها ترتيب عشوائي
    // //array_reverse(array , preserve(true or false) );
    // //array_shuffle(array);
    // $reversed_array = array_reverse($array , true);
    // echo '<pre>';
    // print_r($reversed_array);
    // echo '</pre>';
    // $shuffled_array = shuffle($array);
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';
                                                                        // ملئ المصفوفة
    // // array_fill(start index , number of additions , value (int,string,array) )
    // $array_fill=array_fill(2 , 10 , array(1,2,3));
    // echo '<pre>';
    // print_r($array_fill);
    // echo '</pre>';
                                                                        // جمع عناصر المصفوفة
    // //array_sum(array);
    // $arraysum = array(1,2,3,4,'ahmed');
    // echo '<pre>';
    // print_r($arraysum);
    // echo '</pre>';
    // echo 'the sum of array numbers is : ' . array_sum($arraysum);
                                                                        //الاختيار العشوائي للقيم التي في المصفوفة
    // // array_rand(array , number of values key) gets the random [keys] in array
    // $rand = array_rand($array , 2);
    // foreach($rand as $key){
    //     echo $array[$key] . '<br>';
    // }
                                                                        //حذف القيم المكررة من المصفوفة
    // // array_unique(array , sortting type(optional) )
    // $repeated  = array('html' , 'html' , 'css' , 'css');
    // echo '<pre>';
    // print_r(array_unique($repeated));
    // echo '</pre>';
                                                                        // تحويل الكلام إلي مصفوفة و العكس
    // // explode(separator , string , limit)
    // // implode(separator , array);   ===   join(separator , array);
    // $string_array = 'html is easy language any one can learn it';
    // echo '<pre>';
    // $stringARRAY = explode(' ' , $string_array , 4);
    // print_r($stringARRAY);
    // echo '</pre>';
    // $arraySTRING = implode( ' , ' , $stringARRAY);
    // echo $arraySTRING;
                                                                        // الفصل بين النص عن طريق تحديد مسافة الفصل (غير مفيدة)
    // // chunk_split(string , length[default value is 76] , end[نهاية كل قطع default value \r])
    // $chunk_string = 'html is a good language because it is easy to learn';
    // echo '<pre>';
    // print_r(chunk_split($chunk_string , 4 , '$$$'));
    // echo '</pre>';
                                                                        // تحويل النص الي مصفوفة عن طريق تحديد مسافة القطع
    // // str_split( string , length )
    // $str_string = 'html is a good language because it is easy to learn';
    // echo '<pre>';
    // print_r(str_split($str_string , 6));
    // echo '</pre>';

    // string //string //string // string //string //string // string //string //string // string //string //string // string //string

                                                                        // تبديل الكلمات في النص
    // //str_replace(search , replace , string or array , count[أضع متغير هنا حتي يسجل عدد العديلات علي النص  (اختياري) ] )
    // $str_string = 'php is a good language , php is easy language , php , php , php';
    // echo $str_string;
    // $str_replace = str_replace("php" , "html" , $str_string , $i );
    // echo $str_replace . '<br> the changes count  is : ' . $i .'<br>';
    // $str_replace_array= str_replace(array('php' , 'good' , 'easy') , '( word replaced)' , $str_string);
    // echo $str_replace_array;
                                                                        // تقليب حروف النص و عدد الحروف في النص و تكرار النص
    // // strlen( string );
    // // str_repeat( string , repeation number );
    // // str_shuffle(string);
    // $str = 'this is the text which shuffle , repeated , strlen ' ;
    // echo '<br> string length is : ' . strlen( $str );
    // echo '<br>' . str_repeat( $str , 3 );
    // echo '<br>' . str_shuffle($str);
                                                                        // هام للحماية لمنع الرموز من النص قبل التخزين في قاعدة البيانات
    // // addslashes(string)   تضع \ قبل الرموز في النص قبل الإرسال إلي قاعدة البيانات
    // // stripslashes(string) تعيد \ الي الرموز في النص بعد الإستدعاء من قاعدة البيانات
    // // strip_tags(string , allowed(optional) ) تمنع تأثير html علي النص
    // $str_slash = 'php / is < a good  language \n <a>css</a> <b>html</b> <i>php</i>';
    // echo $str_slash . '<br>';
    // echo addslashes($str_slash) . '<br>';
    // echo stripslashes(addslashes($str_slash)) . '<br>';
    // echo strip_tags($str_slash);
                                                                        // التحكم في حالة النص الإنجليزي حروف كبيرة و صغيرة
    // strtolower(string)   تصغير كل النص
    // strtoupper(string)   تكبير كل النص
    // lcfirst(string)      النص أول حرف في كل النص 
    // ucfirst(string)      تكبير أول حرف في كل النص 
    // ucword(string)       تكبير أول حرف في كل كلمة 
                                                                        // القص من بداية و نهاية النص
    // // trim(string , charlist ) استخدامها صعب شوية
    // // rtrim(string , charlist)
    // // ltrim(string , charlist)
    // $str_trim = 'this im the text for trim' ; 
    // echo $str_trim . '<br>';
    // echo ltrim($str_trim , 'th') . '<br>';
    // echo rtrim($str_trim , 'im') . '<br>';
    // echo trim($str_trim , 'thim') . '<br>'; 
                                                                        // عدد الحروف و المسافات في النص (طول النص)
    // // str_word_count(string , format(optional) , charlist(optional) )
    // $count_str  = 'this is the count string';
    // echo $count_str . '<br> the length of string : ' . str_word_count($count_str);
                                                                        // هام جداااااااااااااااااااااااااااااااااااااا
    // // parse_str( string  , array )
    // $parse_string = 'name=html&learn-days=20&dificulty=+1';
    // parse_str($parse_string , $parse_array);
    // echo $parse_string . '<pre>';
    // print_r($parse_array);
    // echo '</pre>';
    // echo $parse_array['name'];
                                                                        // البحث عن كلمة في نص
    // //strstr( string , search , before_search(optional) default(false) )
    // //stristr( string , search , before_search(optional) )
    // //strchr( string , search , before_search(optional) )   as strstr()
    // $str_string = 'the php language is easy , php is imp , php is useful';
    // echo strstr( $str_string , 'pHp') . '<br>';
    // echo stristr( $str_string , 'pHp'). '<br>';
                                                                        // المقارنة بين النصوص
    // // strcmp( string1 , string2 )  هذه تقارن النصين بالكامل
    // // strncmp ( string1 , string2 , length ) أما هذه تقارن جزء من النص الأول أحدد طوله بالنص الثاني
    // $str_string = 'the php language is easy , php is imp , php is useful';
    // $str_string2 = 'the php language';
    // echo strcmp( $str_string , $str_string2) . '<br>';   // هنا حطلي الفرق
    // echo strncmp( $str_string , $str_string2 , 16) . '<br>'; // هنا لم يعطني الفرق لأني قارنت جزء من النص الاول بالثاني
                                                                        // القطع من النص
    // // substr( string , start , length (optional) )
    // $str = 'the php language is easy , php is imp , php is useful';
    // echo substr($str , 8 , 18);
                                                                        // عدد تكرار كلمة في نص
    // // substr_count ( string , substring , start(optional)  , length(optional) )
    // $string = 'the php language is easy , php is imp , php is useful';
    // echo substr_count( $string , 'php') . '<br>';
    // echo substr_count( $string , 'php' , 8 , 40) . '<br>';

// files // files // files // files // files // files // files // files // files // files // files // files // files // files 

// // معلومة : الملف لا يمكن حذفه إذا كان بداخله ملفات يجب حذف الملفات التي بداخله foreach
// // dirname( the file ) بعطيني اسم الفولدر الذي يحتوي علي الملف
// // file_exists( the file )
// // is_dir( the dir )
// // is_file( the file )
// // mkdir( the dir )
// // rmdir(  dir )
// // unlink( the file , context )
// // file_put_contents( the file , data , mode)  =>FILE_APPEND , LOCK_EX OR USE (FILE_APPEND | LOCK_EX)
// // file_get_contents( the file , false , context(null) , offset تحديد بداية العرض من الملف , max_length تحديد الطول الأقصي من النص )
// // chmod( the file , the mode )   => 0755 يتيح كل الصلاحيات
// // is_writable( the file )
// // copy(the file , the new file )
// // rename( الملف باسمه الأول بمسارة الأول  , a الملف بمسارة الثاني باسمه الثاني) لتغيير اسم الملف أو نقله
// // pathinfo( the file , option(optional) ) كل المعلومات عن اسم الملف و امتداده
// // scandir( dir , sort , context ) يظهر الملفات داخل الملف

//     $directory = __DIR__ . '\directory\\';
//     if(!is_dir('directory')){
//         mkdir('directory');
//         echo 'dir is created';
//     }
//     if(! file_exists($directory . 'created.txt')){
//         file_put_contents($directory . 'created.txt' , 'this file is created with php ' , FILE_APPEND );
//         echo 'file created';
//     }
//     chmod($directory . 'created.txt' , 0455 );
//     if(is_writable($directory . 'created.txt')){
//         file_put_contents($directory . 'created.txt' , 'this text is added to file with php ' , FILE_APPEND | LOCK_EX );
//     }
//     else{
//         chmod($directory . 'created.txt' , 0755);
//         file_put_contents($directory . 'created.txt' , 'this text is added to file with php ' , FILE_APPEND | LOCK_EX );
//     }
//     if(file_exists($directory . 'created.txt')){
//         echo file_get_contents($directory . 'created.txt' , false , null , 15 , 400);
//     }
                                                                        // path_info
    // // pathinfo( the file , option(optional) )
    // echo '<pre>';
    // print_r(pathinfo(__FILE__));
    // echo '</pre>';
    // echo pathinfo(__FILE__ , PATHINFO_DIRNAME ). '<br>';
    // echo pathinfo(__FILE__ , PATHINFO_FILENAME ). '<br>';
    // echo pathinfo(__FILE__ , PATHINFO_BASENAME ). '<br><br>';
    // echo pathinfo(__FILE__)['filename'];
                                                                        // اظهر الملفات داخل الملف
    // // scandir(dir , sort , context)
    // echo "<pre>";
    // print_r(scandir(__DIR__));
    // echo "</pre>";
                                                                        // fopen , fread , fwrite , fseek
    // fopen( the file , mode , include_path(optional) , context(optional) )
    // fread( fopen() , length )
    // fwrite( fopen() , string , length )
    // filesize( the file )

    // modes:
    // r : read only starting from begining of the file (file must be exist)
    // r+: read and write starting from begining of the file (file must be exist)
    // w : write only (open file and clear content) + (creat file if not exist)
    // w+: write and read (open file and clear content) + (creat file if not exist)
    // a : write only (open file and write to end of content ) + (creat file if not exist)
    // a+: write and read (open file and write to end of content ) + (creat file if not exist)
    // x : write only (create new file ) + (file must not be exist or gives error)
    // x+: write and read (create new file ) + (file must not be exist or gives error)
                                                                        // SUPER GLOBAL variable 
    // // $GLOBALS[' variable name '] = 'variable value';
    // // $_SERVER['PHP_SELF'];
    // // $_SERVER['SERVER_ADDR'];
    // // $_SERVER['SERVER_NAME'];
    // // $_SERVER['QUERY_STRING'];  بتجيب كل اللي بعد علامة الإستفهام في عنوان الرابط
    // // $_SERVER['HTTP_REFERER']; ده اللي كنت بدور عليه يعطي رابط الصفحة إللي أنا جيت منها
    // // $_SERVER['SERVER_PORT'];
    // // $_SERVER['SERVER_SOFTWARE'];
    // // $_SERVER['REQUEST_TIME'];
    // // $_SERVER['REQUEST_METHOD'];
    // // $_SERVER['DOCUMENT_ROOT'];
    // // $_GET[''];  البيانات بتتبعت عن طريق عنوان الرابط
    // // $_POST['']; البيانات لا ترسل عن طريق الرابط

    // $GLOBALS['name'] = 'ahmed';
    // function name (){
    //     echo $GLOBALS['name'] . '<BR>';
    // }
    // name();
    // ECHO $_SERVER['SERVER_ADDR'] . '<BR>';
    // ECHO $_SERVER['SERVER_NAME'] . '<BR>';
    // ECHO $_SERVER['QUERY_STRING'] . '<BR>';
    // ECHO $_SERVER['SERVER_SOFTWARE'] . '<BR>';
    // ECHO $_SERVER['REQUEST_TIME'] . '<BR>';
    // ECHO $_SERVER['DOCUMENT_ROOT'] . '<BR>';
                                                                        // cookies
    // // setcookie( cookie name , cookie value , expire , path , secure , httponly )
    // // // // expire : time()+(3600 *hours) ساعة | time+(86400 *days) يوم    (optional)
    // // // // path : pages where cookie works (optional) default( '/' ) 
    // // // // secure : default(false) (optional)
    // // // // httponly: default(false) (optional)
    // // count($_COOKIE) بيجيب العدد
    // setcookie('name' , 'ahmed');
    // echo count($_COOKIE) . '<br>';
    // echo 'the cookie is ' . $_COOKIE['name'];
    // // setcookie('name' , '' , - time());
    // echo '<pre>';
    // print_r($_COOKIE);
    // echo '</pre>';
    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //         $color = $_POST['color'];
    //         setcookie('color' , $color );
    // }
    // if(isset($_COOKIE['color'])){
    //     $back_color = $_COOKIE['color'];
    // }
    // else $back_color = '#eee';
    // echo $back_color;
    // ? >
    // <body style='background:< ?php echo $back_color; ? > ;'>
    // <form action='<?php ECHO $_SERVER['PHP_SELF']; ? >' method='POST'>
    //     <input type='color' name='color'>
    //     <input type='submit' name='submit'>
    // </form></body>
                                                            // sessions
    // // session_start()          لبدء و إكمال ال session
    // // $_SESSION[' session name ' ]
    // // session_unset()
    // // session_destroy()

    // session_start();
    // session_unset();
    // session_destroy();
                                                            // MISC functions
    // // sleep( second )
    // // usleep( microsecond )
    // // time_sleep_until( time() )
    // // exit(' ممكن أكتب رسالة هنا لو عايز ') أي حاجة بعدها لن تتم
    // // die(' ممكن أكتب رسالة هنا لو عايز ') أي حاجة بعدها لن تتم
    // // uniqid( prefix(optional) , more_entropy(optional) )
    // $rand = uniqid();
    // $rand2= uniqid('ah1_');  // يضيف كلمة قبل الرمز للتفرقة بين السيرفرات إذا كان هناك أكثر من سيرفر لرفع البيانات
    // $rand3= uniqid('',true); // بيخليه يكون 23 حرف و رقم بدلا من 13
    // echo $rand .'<br>' .  $rand2 . '<br>' . $rand3;
                                                            // filter
    // // filter_list()    بيجيب كل أنواع الفلاتر
    // // filter_var( $variable , filter_type , options(optional) )
    // // // // filter_types from php manual 'filter types'
    // // // // filter_types validate يتحقق sanitize يعقم
    // echo '<pre>';
    // print_r(filter_list());
    // echo '</pre>';
    // $variable = '<h1>hello from html</h1>';
    // $integer  = 167;
    // ECHO filter_var($variable , FILTER_SANITIZE_STRING) . '<br>';
    // $options = array(
    //     'options' => array(
    //         'min_range' => 1,
    //         'max_range' => 999
    //     ),
    //     'flags' => FILTER_FLAG_ALLOW_OCTAL
    // );
    // if(filter_var($integer , FILTER_VALIDATE_INT , $options) == true){
    //     echo $integer . ' : is number';
    // }
    // else{
    //     echo 'variable is not integer or it is intiger greater than 999 or smaller than 1';
    // }
                                                            // date and time
    // // time()   => time() + (60*60*24)   ده يديني وقت يوم
    // // date_default_timezone_set(' أجيب هنا اسم المنطقة الجغرافية من موقع php timezone ') الأفضل إنها تتظبط من إعدادات السيرفر
    // // getdate()    أهم حاجة هي الليلة ده
    // // date( formate , time_stamp )
    // // strtotime(' now or tomorow') غير احترافية 
    // print_r(getdate());
    // echo '<br> date of tomorow ; ' . time() + (60*60*24);
    // echo '<br> date of now : ' . time() . '<br>';
    // echo 'now date : ' .date('Y / m / d / l / A  / F / dS /  z / B    h:i:s');  // الحروف الكبيرة تختلف في الوظيفة عن الحروف الصغيرة
    // echo '<br> next year date is : ' . date('Y - m - d  h:i:s' , time() +(60*60*24*30*12));
    // echo '<br> next week date is : ' . date('Y - m - d h:i:s' , time() +(60*60*24*7));
    // echo '<br>'. strtotime('tomorrow') . '<br>';
    // echo '<br>'. date('Y / m / d ' , strtotime('+1 day')) . '<br>';
    // echo '<br>'. date('Y / m / d ' , strtotime('now')) . '<br>';
    // echo '<br>'. date('Y / m / d ' , strtotime('+1 day 4 week 6 month 5 year')) . '<br>';
    // echo '<br>'. date('Y / m / d ' , strtotime('next monday')) . '<br>';
                                                            // php initialize
    // أفتح ملف php.ini
    // أبحث مثلا عن safe_mode    error_reporting   display_error