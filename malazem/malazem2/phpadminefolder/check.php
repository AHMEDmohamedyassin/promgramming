<?php
    include("hosting.php");

if(filter_var($_POST['username'] , FILTER_SANITIZE_STRING) == false 
   || filter_var($_POST['password'] , FILTER_SANITIZE_STRING) == false
   || $_POST['username'] == "" || $_POST['username'] == ""
   || $_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo "error";
    header('REFRESH:5;URL='.$HOST.'/index.php');
    exit;
}
    else{
    if($_SERVER['REQUEST_METHOD'] == 'POST') //لمنع الدخول المباشر للصفحة
    {
    $admins= array("ahmedmohamed");
    $passwords = array("ahmed982025");
        if(in_array($_POST['username'] , $admins) == false && in_array($_POST['password'] , $passwords) == false)
        {
            echo "you are not admin";
            header('REFRESH:5;URL='.$HOST.'/index.php');
            exit;
        }
    
        else {
            echo "you are admin";
            session_start();
            $_SESSION['master'] = "open";
            header('REFRESH:5;URL='.$HOST.'/phpadminefolder/themaster.php');
        }
    
    }

}