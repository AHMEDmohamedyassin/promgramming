<?php
    session_start();
    
    $page = "files";
    include("counter.php");
    include("../phpadminefolder/hosting.php");
    $collage = filter_var($_GET['classnumber'] , FILTER_SANITIZE_STRING);
    $state = filter_var($_GET['state'] , FILTER_SANITIZE_STRING);
    $table = filter_var($_GET['material'] , FILTER_SANITIZE_STRING); 
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
            margin-top: 1988px;
        }
        body{
            height:fit-content;
        }
    </style>
</head>
<body>
    <?php
        $headervalue = "اختر ملزمتك";
        include('header.php');
    ?>
    <div class="return"><a href="<?php echo $HOST; ?>/phpuserfolder/coursecategory.php?classnumber=<?php echo $collage; ?>&material=<?php echo $table ; ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
    <div class="container"> 
    
    <?php 

    $_SESSION["table"] = $table;

    include("../phpadminefolder/connectingdatabase.php");
    $sql = "SELECT data , created , discription , name , id FROM $table where state = '$state'  ORDER BY id desc";
    $res = mysqli_query($dbLink , $sql);
    if($res){
        if (mysqli_num_rows($res) > 0){
            while($rows = mysqli_fetch_assoc($res))
            {
                echo "<div class='file'>
                <div class='thetext'><i class='far fa-file-pdf'></i><a href='download.php?id={$rows['id']}'>تنزيل الملف</a><a href='show.php?id={$rows['id']}'>فتح الملف</a></div>
                <div class='name'>.{$rows['name']}.</div>
                <div class='discription'>.{$rows['discription']}.</div>
                <div class='date'>.{$rows['created']}.</div>
            </div>";
            }
        }
        }
        mysqli_close($dbLink);
    ?>
    </div>
</body>
</html>
<?php

include('footer.php');