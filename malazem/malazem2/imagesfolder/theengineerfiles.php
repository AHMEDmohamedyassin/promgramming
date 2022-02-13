<?php
    session_start();
    include("../phpadminefolder/hosting.php");
    $_SESSION['table'] = $_SESSION['pretable'];
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
</head>
<body>
    <div class="menu">
        <div class="header"> اختر السنة الدراسية </div>
        <div class="container">
        <div class="return"><a href="classchoosen.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
            <form class="form1" method="POST" action="theengineerfiles.php">
                <input type="submit" name="elec" value="قسم كهرباء"></input>
                <input type="submit" name="civil" value="قسم مدني"></input>
                <input type="submit" name="mech" value="قسم ميكانيكا"></input>
                <input type="submit" name="chem" value="قسم كيمياء"></input>
                <input type="submit" name="petrol" value="قسم بترول"></input>
                <input type="submit" name="commu" value="قسم اتصالات"></input>
                <input type="submit" name="archi" value="قسم عمارة"></input>
                <input type="submit" name="bio" value="قسم طبية"></input>
                <input type="submit" name="soft" value="قسم حاسبات"></input>
                <input type="submit" name="metal" value="قسم فلزات"></input>
                <input type="submit" name="mine" value="قسم مناجم"></input>
                <input type="submit" name="aero" value="قسم طيران"></input>
            </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['elec'])){
    $_SESSION['table'] .= "elec";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['civil'])){
    $_SESSION['table'] .= "civil";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['mech'])){
    $_SESSION['table'] .= "mech";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['chem'])){
    $_SESSION['table'] .= "chem";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['petrol'])){
    $_SESSION['table'] .= "petrol";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['commu'])){
    $_SESSION['table'] .= "commu";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['archi'])){
    $_SESSION['table'] .= "archi";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['bio'])){
    $_SESSION['table'] .= "bio";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['soft'])){
    $_SESSION['table'] .= "soft";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['metal'])){
    $_SESSION['table'] .= "metal";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['mine'])){
    $_SESSION['table'] .= "mine";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}
if(isset($_POST['aero'])){
    $_SESSION['table'] .= "aero";
    header('REFRESH:0;URL=http://'.$HOST.'/phpuserfolder/thefiles.php');
}

include('footer.php');