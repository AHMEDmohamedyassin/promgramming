<?php
    session_start();
    include("../phpadminefolder/hosting.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['hokok']))
{
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/classchoosen.php?display=none&thecollage=hokok');
}
if(isset($_POST['tigara']))
{
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/classchoosen.php?display=none&thecollage=tigara');
}
if(isset($_POST['engineer']))
{
    header('REFRESH:0;URL='.$HOST.'/phpuserfolder/classchoosen.php?display=block&thecollage=engineer');
}

}