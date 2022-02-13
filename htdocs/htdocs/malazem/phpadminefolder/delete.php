<?php
if(isset($_GET["id"]) && isset($_GET["table"]))
{
    $id = $_GET["id"];
    $table = $_GET["table"];

    include("connectingdatabase.php");

    $sql = "DELETE FROM $table where id = $id ";
    $res = mysqli_query($dbLink , $sql);
    if($res) echo "deleting suceed";
    else echo "deleting failed";
    mysqli_close($dbLink);
    session_start();
    $_SESSION['master'] = "open";
    include("hosting.php");
    header('REFRESH:5;URL='.$HOST.'/phpadminefolder/themaster.php');
}