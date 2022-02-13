<?php
    session_start();
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
            margin-top: 1440px;
        }
        body{
            height:fit-content;
        }
    </style>
</head>
<body>
    <div class="header"> اختر ملزمتك </div>
    <div class="scrollbutton"><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
    <div class="return"><a href="classchoosen.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
    <div class="container">
    <?php 
    $table = $_SESSION['table'];
    include("../phpadminefolder/connectingdatabase.php");
    $sql2 = "SELECT data , created , discription , id FROM $table";
    $res2 = mysqli_query($dbLink , $sql2);
    if (mysqli_num_rows($res2) > 0)
        while($rows = mysqli_fetch_assoc($res2))
        {
            echo "<div class='file'>
            <div class='thetext'><i class='far fa-file-pdf'></i><a href='download.php?id={$rows['id']}'>Download</a></div>
            <div class='discription'>.{$rows['discription']}.</div>
            <div class='date'>.{$rows['created']}.</div>
        </div>";
        }
        mysqli_close($dbLink);
    ?>
    </div>
</body>
</html>
<?php
echo "    <footer>
<p>حقوق الطباعة و النشر <span> © </span>  التاريخ  : <span>موقع ملازم</span> |  جميع الحقوق محفوظة | تصميم <span>م/أحمد</span></p>
</footer>
<script>
document.querySelector('.scrollbutton').onclick=function(){
    scroll(0,10000);
}
</script>
";