<?php
    $page = "homepage";
    include("phpuserfolder/counter.php");
    include("phpadminefolder/hosting.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="descripsion" content="welcom to my web">
    <title>malazem</title>
    <link href="stylefolder/all.min.css" type="text/css" rel="stylesheet">
    <link href="stylefolder/mediacontainer.css" type="text/css" rel="stylesheet">
    <link href="stylefolder/normalize.css" type="text/css" rel="stylesheet">
    <link href="stylefolder/style3.css" type="text/css" rel="stylesheet">
    <style>
        footer{
            position:fixed;
            bottom:0px;
            right:1%;
        }
        footer a{
            color:#564F60;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="menu">
    <?php
        $headervalue = "اختر كليتك ";
        include('phpuserfolder/header.php');
    ?>
        <div class="container" >
            <form class="form1" method="POST" action="phpuserfolder/collagechoosen.php">
                <!-- <input type="submit" name="engineer" value="كلية الهندسة"  ></input> -->
                <input type="submit" name="hokok"    value="كلية حقوق">    </input>
                <input type="submit" name="tigara"   value="كلية تجارة">   </input>
            </form>
        </div>
    </div>
    <footer>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <textarea cols="30" rows="7" name="comment" placeholder="كتابة تعليق"></textarea>
            <div>
            <input type="text" name="name" placeholder="الاسم">
            <input type="text" name="phonenumber" placeholder="رقم الهاتف">
            <input type="submit" name="submit" value="إرسال تعليقك">
            </div>
        </form>
        <p>حقوق الطباعة و النشر <span> © </span>  <?php echo date('Y'); ?>  : <span>موقع ملازم</span> |  جميع الحقوق محفوظة | تصميم <span>م/أحمد</span></p>
    </footer>"
</body>
<div class="animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
<script>
    window.onload=function(){
        document.querySelector(".animation").style.cssText="display:none";
    };
</script>
</html>

<?php
if(isset($_POST['submit']))
{
    $phone   = $_POST['phonenumber'];
    $name    = $_POST['name'];
    $comment = $_POST['comment'];
    
    if(filter_var($phone , FILTER_SANITIZE_NUMBER_INT) == TRUE 
    && filter_var($name , FILTER_SANITIZE_STRING) == TRUE 
    && filter_var($comment , FILTER_SANITIZE_STRING) == TRUE
    && filter_var($name , FILTER_SANITIZE_NUMBER_INT) == FALSE
    && $name !== ""
    && $phone !== ""
    && $comment !== ""){
    
    include("phpadminefolder/connectingdatabase.php");

    $sql2 = "CREATE TABLE IF NOT EXISTS `comment` (
        `id`        Int Unsigned Not Null Auto_Increment,
        `phone`        bigInt Unsigned Not Null,
        `name`      VarChar(255) Not Null Default 'Untitled.txt',
        `created`   DateTime Not Null,
        `comment` VarChar(500) ,
        PRIMARY KEY (`id`)
    )";
    $res2 = mysqli_query($dbLink,$sql2);


    $sql = "INSERT INTO comment (name , phone , comment , created )
            VALUES ('$name' , '$phone' , '$comment' , NOW() ) ";
    $res = mysqli_query($dbLink,$sql);
    if($res) {
        echo "<p class='sucess'>تم إرسال التعليق بنجاح</p>";
    }
    else {
        echo "<p class='sucess'>فشل إرسال التعليق أعد إرسال التعليق</p>";
    }
    mysqli_close($dbLink);
}
    else{
        echo "<p class='sucess'>أدخل بيانات صحيحة</p>";
    }
}