<?php
    session_start();
    $collage = $_SESSION['thecollage'];
    $display= $_SESSION['display'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="descripsion" content="welcom to my web">
    <title>malazem</title>
    <link href="../stylefolder/all.min.css" type="text/css" rel="stylesheet">
    <link href="../stylefolder/mediacontainer.css" type="text/css" rel="stylesheet">
    <link href="../stylefolder/normalize.css" type="text/css" rel="stylesheet">
    <link href="../stylefolder/style3.css" type="text/css" rel="stylesheet">
    <style>
        footer{
            margin-top: 780px;
        }
        body
        {
            height:fit-content;
        }
        .form1 [name = engineera] {
            display:<?php echo $display; ?>;
            width:250px;
        }
        .form1 [name = engineerb] {
            display:<?php echo $display; ?>;
            width:250px;
        }
    </style>
</head>
<body>
    <div class="menu">
        <div class="header"> اختر السنة الدراسية </div>
        <div class="container">
        <div class="return"><a href="collagechoosen.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
            <form class="form1" method="POST" action="classchoosen.php">
                <input type="submit" name="engineera" value="الفرقة الإعدادية أ "></input>
                <input type="submit" name="engineerb" value="الفرقة الإعدادية ب "></input>
                <input type="submit" name="<?php echo $collage .'1';?>" value="الفرقة الأولى"></input>
                <input type="submit" name="<?php echo $collage .'2';?>" value="الفرقة الثانية"></input>
                <input type="submit" name="<?php echo $collage .'3';?>" value="الفرقة الثالثة"></input>
                <input type="submit" name="<?php echo $collage .'4';?>" value="الفرقة الرابعة"></input>
            </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['hokok1']))
{
    $_SESSION['table'] = "filehokok1";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['hokok2']))
{
    $_SESSION['table'] = "filehokok2";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['hokok3']))
{
    $_SESSION['table'] = "filehokok3";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['hokok4']))
{
    $_SESSION['table'] = "filehokok4";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['tigara1']))
{
    $_SESSION['table'] = "filetigara1";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['tigara2']))
{
    $_SESSION['table'] = "filetigara2";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['tigara3']))
{
    $_SESSION['table'] = "filetigara3";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['tigara4']))
{
    $_SESSION['table'] = "filetigara4";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['engineera']))
{
    $_SESSION['table'] = "fileengineera";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['engineerb']))
{
    $_SESSION['table'] = "fileengineerb";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/thefiles.php');
}
if(isset($_POST['engineer1']))
{
    $_SESSION['pretable'] = "fileengineer1";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/theengineerfiles.php');
}
if(isset($_POST['engineer2']))
{
    $_SESSION['pretable'] = "fileengineer2";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/theengineerfiles.php');
}
if(isset($_POST['engineer3']))
{
    $_SESSION['pretable'] = "fileengineer3";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/theengineerfiles.php');
}
if(isset($_POST['engineer4']))
{
    $_SESSION['pretable'] = "fileengineer4";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/theengineerfiles.php'); 
}
echo "    <footer>
<p>حقوق الطباعة و النشر <span> © </span>  التاريخ  : <span>موقع ملازم</span> |  جميع الحقوق محفوظة | تصميم <span>م/أحمد</span></p>
</footer>";