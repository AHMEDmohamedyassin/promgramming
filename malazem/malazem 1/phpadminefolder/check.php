<?php
    filter_var($_POST['username'] , FILTER_SANITIZE_STRING); //filter to prevent hakings
    filter_var($_POST['password'] , FILTER_SANITIZE_STRING); //filter to prevent hakings
    $admins= array("ahmedmohamed");
    $passwords = array("ahmed982025");
if($_SERVER['REQUEST_METHOD'] == 'POST') //لمنع الدخول المباشر للصفحة
{
    if(in_array($_POST['username'] , $admins) && in_array($_POST['password'] , $passwords))
    {echo "you are admin";
    header('REFRESH:5;URL=http://localhost/malazem/phpadminefolder/themaster.php');}
    else echo "you are not admin";
    
}
else{
    echo "error you can not enter directly";
}