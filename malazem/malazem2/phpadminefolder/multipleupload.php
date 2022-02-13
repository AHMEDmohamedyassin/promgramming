<?php
session_start();
if(isset($_SESSION['multipleupload']) === true && $_SESSION['multipleupload'] === "upload" || $_SERVER['PHP_SELF'] === true){
if($_SERVER["REQUEST_METHOD"] == "POST"):
$state = $_POST['state'];
$table = $_POST['table'];
$count = count($_FILES['file']['name']);
echo "count is : " .$count;
$i = 0;
for($i =0 ; $i < $count ; $i++){
$name = $_FILES['file']['name'][$i];
$type = $_FILES['file']['type'][$i];
$size = $_FILES['file']['size'][$i];
$temp = $_FILES['file']['tmp_name'][$i];

echo "<pre>";
    print_r($name); 
echo "</pre>";
echo "<pre>";
    print_r($size); 
echo "</pre>";
echo "<pre>";
    print_r($type); 
echo "</pre>";
echo "<pre>";
    print_r($temp); 
echo "</pre>";
echo $state . "<br>";
echo $table . "<br>";

include("connectingdatabase.php");
$sql = "INSERT INTO `$table` (name , mime , data , size , discription , created , state) VALUES
        ('$name' , '$type' , '$temp' , '$size' , '' , NOW() , '$state') ";

$res = mysqli_query($dbLink , $sql);
if($res) echo "......................upload sucess";
else echo "..........................upload failed";

}
endif;
$_SESSION['master'] = "open";
}
?>
<style>
    a{
        position:fixed;
        top:5px;
        right:5px;
    }
    form{
        position:fixed;
        top:50px;
        right:5px;
    }
</style>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type='file' name='file[]' multiple='multiple'>
    <input type='text' name='table' value="filetigara1course1">
    <input type='text' name='state' value="malazem">
    <input type="submit">
</form>
<a href="themaster.php">themaster</a>