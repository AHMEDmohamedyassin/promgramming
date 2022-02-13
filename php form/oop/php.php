<?php

    class car {
        // properties
        public $color;
        public $prise;
        public $type;
        private $pass; // مينفعش أضيف لها قيمة أو أستعرض القيمة منها إلا بالدالة

        //constants
        const motor_capicity = '1500 cc';

        // methods عبارة عن دالة عادية لكن قبلها الإظهار مثل المتغيرات تماما
        public function high_quality_car (){
            if($this->type == 'mitsubishi'){
                echo $this->type .' is high quality car<br> car capicity is : '. self::motor_capicity .'<br>';
            }
            else echo $this->type . ' is not high quality car <br>';
            if($this->prise > 300) echo 'this car is exipensive <br>';
            else echo $this->type . ' is cheap<br>';
        }
        public function password ($pass){
            $this->pass = sha1($pass);
        }
        public function showpassword (){
            echo $this->pass;
        }
    }
    // object أو عنصر بدون تعديل المخطط
    $empty = new car();
    echo '<pre>';
    print_r($empty);
    echo '</pre>';
    echo 'the constants in this class is : ' . car::motor_capicity . '<br>';  // هذه ظريقة لإظهار الثوابت
    echo 'the constants in this class is : ' . $empty::motor_capicity . '<br><br><br><br>'; // هذه طريقة أخري لإظهار الثوابت
// أول عنصر باستخدام المخطط
    $mg_car = new car();
    $mg_car -> color = 'red';
    $mg_car -> prise = 200 ;
    $mg_car -> type = 'mg';
    $mg_car -> high_quality_car();
    echo '<pre>';
    print_r($mg_car);
    echo '</pre>';
// ثاني عنصر باستخدام المخطط
    $mitsubishi_car = new car();
    $mitsubishi_car -> color = 'blue';
    $mitsubishi_car -> prise = 300;
    $mitsubishi_car -> type = 'mitsubishi';
    $mitsubishi_car -> high_quality_car();
    $mitsubishi_car -> password('ahmed');

    echo $mitsubishi_car -> color . '<br>';
    echo $mitsubishi_car -> prise . '<br>';
    echo $mitsubishi_car -> type . '<br>';
    echo $mitsubishi_car -> high_quality_car() . '<br>'; 
    echo 'this is password : ' . $mitsubishi_car -> showpassword() . '<br>'; 

                                                                             // inheritance
    class bmw extends car{
        public $kind;
    }
    $bmw_m4 = new bmw();
    echo '<pre>'; print_r($bmw_m4); echo '</pre>';
    
    // final class
    final class mercides { // class لا يمكن توريثه بما فيه
        public $kind;
        public $prise;
        public $speed;

        final public function speed_rang (){    // دالة لا يمكن توريثها مع الclass
            echo 'from 0 to ' .   $this->speed;
        }
    }
    $mercides = new mercides();
    $mercides->speed=300;
    $mercides->speed_rang();

    // abstraction class  هو خالي من أي توظيف و لا يمكن استدعؤه مصمم للتوريث و إجبار المورث علي استخدام محتوياتها
    abstract class ab_tract {                    //    interface class ab_tract {                    
        public $speed;                           //        public $speed;                           
        public $quality;                         //        public $quality;                         
        function sayhello (){                    //        function sayhello (){                    
            echo 'hello<br>';                    //            echo 'hello<br>';                    
        }                                        //        }                                        
        abstract function saygoodmorning();      //        function saygoodmorning();      
    }                                            //    }   
    class abstracted extends ab_tract {          //     class abstracted implements ab_tract {
        function saygoodmorning(){               //         function saygoodmorning(){
            echo 'goodmorning<br>';              //             echo 'goodmorning<br>';
        }                                        //         } function sayhello (){echo 'sayhello';}
    }                                            //     }
    $abstracted = new abstracted();
    $abstracted->saygoodmorning();
    $abstracted->sayhello();
    print_r($abstracted);
                                                                    // magic methods
    // methods starts with [__]
    class first_magic {
        public $name;
        public static $age = 15;


        public static function saygoodmorning(){
            echo '<br>good morning<br>';
        }
        public function sayhello (){
            echo '<br> hello '. $this->name . '<br>';
        }
        public function __construct ($n){  // تعمل مباشرة عندما يتم إنشاء object
            $this->name = $n;
            echo '<br><br><br><br>object created<br>';
        }
        // public function __destruct(){      // تعمل مباشرة عندما يتم انتهاء ال object
        //     echo '<br> object distruct method<br>';
        // }
        public function __call($method , $parameter){  // تعمل عندما يتم استدعاء دالة غير موجودة 
            echo 'this method [' . $method . ']<br> or this parameters [' . print_r($parameter) . '] is not valid <br>'; 
        }
        public function __get($properity){    // تعمل عندما يتم استدعاء متغير غير موجود في الclass
            echo 'this properity ['.$properity.'] isnot found <br>';
        }
        public function __set($properity  ,$value){   // تعمل عندما يتم إعطاء قيمة لمتغير غير موجود في class
            echo 'this properity ['.$properity.'] isnot found and this value : ' . $value . ' cannot be added<br>';
        }
    }
    $first_magic = new first_magic('ahmed');
    $first_magic -> sayhello();
    $first_magic -> sayhellos('ahmed' , 'mohamed');
    echo $first_magic -> age;
    $first_magic -> age = 20;
    //static in classes
    echo 'the age with static method ----------------> '  . first_magic::$age;    // unable to use $this in static as there is no object
    $first_magic -> saygoodmorning();  // can use object with static methods but cannot use objects with static properties
    first_magic::saygoodmorning();
    
                                                            // traits
    trait trait1 {
        static public function trait1 (){
            echo 'trait1<br>';
        }
    }
    trait trait2 {
        static public function trait2 (){
            echo 'trait2<br>';
        }
    }
    class traits {
        use trait1;
        use trait2;
    }
    traits::trait1();
    traits::trait2();
    
    // $copy = $first_magic;  // هنا أنا لو غيرت أي حاجة في الفرعي سوف يغير في الأصلي 
    // $copy = clone $first_magic;  // هنا أنا لو غيرت أي حاجة في الفرعي لن يغير في الأصلي 

    // namespace [name] ;   $object = new  [namespace]\[classname]();                  get class from namespace

    // spl_autoload_register(function($class /*المقصود بالمتغير هو اسم ال class  */){
    //     require 'classes_folder/' . $class . '.class.php';
    // });