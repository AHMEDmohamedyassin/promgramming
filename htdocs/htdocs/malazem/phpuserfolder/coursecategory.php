<?php
    $page = "course";
    include("counter.php");
    include("../phpadminefolder/hosting.php");
    $collage = filter_var($_GET['classnumber'] , FILTER_SANITIZE_STRING);
    $material = filter_var($_GET['material'] , FILTER_SANITIZE_STRING);
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
            /* margin-top: 780px; */
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
        $headervalue = "اختر القسم";
        include('header.php');
    ?>
        <div class="container" id="prelink">
        <!-- <div class="return"><a href="../index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div> -->
        <div class="link">
            <a href="<?php echo $HOST; ?>/phpuserfolder/thefiles.php?material=<?php echo $material; ?>&classnumber=<?php echo $collage; ?>&state=malazem"> ملازم </a>
            <a href="<?php echo $HOST; ?>/phpuserfolder/thefiles.php?material=<?php echo $material; ?>&classnumber=<?php echo $collage; ?>&state=sheet"> شيتات </a>
            <a href="<?php echo $HOST; ?>/phpuserfolder/thefiles.php?material=<?php echo $material; ?>&classnumber=<?php echo $collage; ?>&state=lect"> محاضرات </a>
            <a href="<?php echo $HOST; ?>/phpuserfolder/thefiles.php?material=<?php echo $material; ?>&classnumber=<?php echo $collage; ?>&state=book"> كتب و مراجع </a>
            <a href="<?php echo $HOST; ?>/phpuserfolder/thefiles.php?material=<?php echo $material; ?>&classnumber=<?php echo $collage; ?>&state=exam"> امتحانات </a>
        </div>
    </div>
</body>
</html>

<?php

include('footer.php');