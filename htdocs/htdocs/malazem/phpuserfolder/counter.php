<?php
// creating table if not exists
if($page == "homepage"){
    include("phpadminefolder/connectingdatabase.php");
$sql = "CREATE TABLE IF NOT EXISTS `counter` (
    `id`        Int Unsigned Not Null Auto_Increment,
    `visitor`        Int Unsigned Not Null ,
    `page`      VarChar(255) Not Null Default 'Untitled.txt',
    PRIMARY KEY (`id`))";
$res = mysqli_query($dbLink , $sql);

$sql = "INSERT INTO `counter` (`id`, `visitor`, `page`) VALUES
    ('1', '1', 'homepage'),
    ('3', '1', 'course'), 
    ('4', '1', 'files'), 
    ('2', '1', 'classchoosen')";
$res = mysqli_query($dbLink , $sql);
}
else {
    include("../phpadminefolder/connectingdatabase.php");
}
//get visitors number from database
$sql = "SELECT `visitor` FROM `counter` where `page`='$page'";
$res = mysqli_query($dbLink , $sql);
if(mysqli_num_rows($res)){
    while($rows=mysqli_fetch_assoc($res)){
        $visitor = $rows['visitor'];
    }
}
    $visitor +=1;
//update database visitors number
$sql = "UPDATE `counter` SET `visitor`='$visitor' where `page`='$page'";
$res = mysqli_query($dbLink , $sql);

mysqli_close($dbLink);
?>







