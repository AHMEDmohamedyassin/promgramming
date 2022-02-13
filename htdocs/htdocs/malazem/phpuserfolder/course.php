<?php
    $page = "course";
    include("counter.php");
    include("../phpadminefolder/hosting.php");
    $collage = filter_var($_GET['classnumber'] , FILTER_SANITIZE_STRING);
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
        $headervalue = "اختر المادة ";
        include('header.php');
    ?>
        <div class="container" id="prelink">
        <!-- <div class="return"><a href="../index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div> -->
        <div class="link">
            <?php
                include("../phpadminefolder/connectingdatabase.php");
                include("../phpadminefolder/hosting.php");
                $sql = "SELECT * FROM `coursetable` where dataname = '$collage' ";
                $res = mysqli_query($dbLink , $sql);
                if($res){
                    if(mysqli_num_rows($res) > 0){            
                            while($rows = mysqli_fetch_assoc($res)){
                                echo '<a href="'.$HOST.'/phpuserfolder/coursecategory.php?material='.$rows['coursedataname'].'&classnumber='.$collage.'">'.$rows['username'].'</a>';
                            }
                        }
                    }
            ?>
        </div>
    </div>
</body>
</html>

<?php

include('footer.php');