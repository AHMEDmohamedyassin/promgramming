<?php
    session_start();
    $page = "classchoosen";
    include("counter.php");
    include("../phpadminefolder/hosting.php");
    if (isset($_GET['thecollage']) && isset($_GET['display'])){
    $collage = filter_var($_GET['thecollage'] , FILTER_SANITIZE_STRING);
    $display = filter_var($_GET['display'] , FILTER_SANITIZE_STRING);
}
    else {
        $collage = '';
    $display = '';
    }
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
            /* margin-top: 1466px; */
            position:fixed;
            bottom:0px;
            right:1%;
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
        <?php
        $headervalue = "اختر السنة الدراسية ";
        include('header.php');
        ?>
        <div class="container">
        <!-- <div class="return"><a href="../index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div> -->
            <form class="form1" method="POST" action="classchoosen.php">
                <!-- <input type="submit" name="engineera" value="الفرقة الإعدادية أ "></input>
                <input type="submit" name="engineerb" value="الفرقة الإعدادية ب "></input> -->
                <input type="submit" name="<?php echo $collage .'1';?>" value="الفرقة الأولى"></input>
                <input type="submit" name="<?php echo $collage .'2';?>" value="الفرقة الثانية"></input>
                <input type="submit" name="<?php echo $collage .'3';?>" value="الفرقة الثالثة"></input>
                <input type="submit" name="<?php echo $collage .'4';?>" value="الفرقة الرابعة"></input>
            </form>
    </div>
</body>
</html> 
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['hokok1']))
{
        header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=filehokok1');
}
if(isset($_POST['hokok2']))
{
        header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=filehokok2');
}
if(isset($_POST['hokok3']))
{
        header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=filehokok3');
}
if(isset($_POST['hokok4']))
{
        header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=filehokok4');
}
if(isset($_POST['tigara1']))
{
    
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=filetigara1');
}
if(isset($_POST['tigara2']))
{
    
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=filetigara2');
}
if(isset($_POST['tigara3']))
{
    
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=filetigara3');
}
if(isset($_POST['tigara4']))
{
    
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=filetigara4');
}
if(isset($_POST['engineera']))
{
    
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=file');
}
if(isset($_POST['engineerb']))
{
    
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/course.php?classnumber=file');
}
if(isset($_POST['engineer1']))
{
    $_SESSION['pretable'] = "fileengineer1";
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/theengineerfiles.php');
}
if(isset($_POST['engineer2']))
{
    $_SESSION['pretable'] = "fileengineer2";
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/theengineerfiles.php');
}
if(isset($_POST['engineer3']))
{
    $_SESSION['pretable'] = "fileengineer3";
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/theengineerfiles.php');
}
if(isset($_POST['engineer4']))
{
    $_SESSION['pretable'] = "fileengineer4";
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/theengineerfiles.php'); 
}
}
include('footer.php');