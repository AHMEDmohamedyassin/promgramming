<?php
    session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['hokok']))
{
    $_SESSION['thecollage'] = "hokok";
    $_SESSION['display'] = "none";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/classchoosen.php');
}
if(isset($_POST['tigara']))
{
    $_SESSION['thecollage'] = "tigara";
    $_SESSION['display'] = "none";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/classchoosen.php');
}
if(isset($_POST['engineer']))
{
    $_SESSION['thecollage'] = "engineer";
    $_SESSION['display'] = "block";
    header('REFRESH:0;URL=http://localhost/malazem/phpuserfolder/classchoosen.php');
}

}

