<?php 
    session_start();
if(isset($_SESSION['master']) === true && $_SESSION['master'] === "open" || $_SERVER['PHP_SELF'] === true){

    if($_SESSION['master'] === "open"){
    include("connectingdatabase.php");
    $sql = "CREATE TABLE IF NOT EXISTS `coursetable`(
        `id`              INT Unsigned NOT NULL AUTO_INCREMENT ,
        `code`            INT Unsigned NOT NULL ,
        `dataname`        VARCHAR(100),
        `coursedataname`  VARCHAR(100),
        `username`        VARCHAR(100),
        PRIMARY KEY(`id`)
        )";
    $res = mysqli_query($dbLink , $sql);
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>secure</title>
    
    <style>
        body{
            background:#ddd;
        }
        fieldset{
            background:#eee;
        }
        label {
            font-size: 20px;
        }
        form{
        direction: rtl;
        position: relative;
        display: flex;
        justify-content: space-between;
        }
        input{
            font-size: 20px;
        }
        legend{
            font-size: 20px;
            font-weight: 700;
        }
        option{
            font-size: 20px;
            word-spacing:8px;
        }
        span{
            font-weight:900;
            color:#00f;
        }
        .addcourses{
        display: flex;
        flex-direction: column-reverse;
        align-items: center;
        height: fit-content;
        }
        .addcourses select{
            margin:15px;
            z-index: 5;
        }
        .addcourses input{
            margin:20px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend> رفع لقاعدة البيانات </legend>
        <form action="themaster.php" method="POST" enctype="multipart/form-data">
            <div>
            <select name="select">
                <?php
                $sql = "SELECT * FROM `coursetable`";
                $res = mysqli_query($dbLink , $sql);
                if($res){
                    if(mysqli_num_rows($res) > 0){
                        while($rows = mysqli_fetch_assoc($res)){
                            echo '<optgroup><option value="'.$rows['coursedataname'].'">'.$rows['username'].'.......'.$rows['dataname'].'.......'.$rows['coursedataname'].'</option></optgroup>';
                        }
                    }
                }
                ?>
            </select> 
            <select name="coursecategory">
                <optgroup><option value="malazem">ملازم</option></optgroup>
                <optgroup><option value="lect">محاضرات</option></optgroup>
                <optgroup><option value="sheet">شيتات</option></optgroup>
                <optgroup><option value="book">كتب</option></optgroup>
                <optgroup><option value="exam">امتحانات</option></optgroup>
            </select>
            <br><br>
            <input type="file" name="uploaded_file"> <br><br>
            <textarea cols="50" rows="10" name="discription"></textarea> <br><br>
            <input type="submit" name="submit" value="تسجيل">
            <input type="submit" name="show" value="إظهار الملفات">
            <input type="submit" name="showcomment" value="إظهار التعليقات">
            <input type="submit" name="showvisior" value="إظهار عدد الزيارات" class="showvisitor">
            </div>
            <div class="addcourses">
            <select name="selectcollage">
                <?php
                for($i=1; $i<5; $i++){
                    echo '  <option value="filetigara'.$i.'">filetigara'.$i.'</option>
                            <option value="filehokok'.$i.'">filehokok'.$i.'</option>';
                }
                ?>
            </select>
            <select name="selectcoursedataname">
                <?php
                    for($i=1; $i<15; $i++){
                        echo '<option value="course'.$i.'">course'.$i.'</option>';
                    }
                ?>
            </select>
            <input type="number" name="code" placeholder="اكتب رمز المادة">
            <input type="text" name="username" placeholder="اكتب اسم المادة">
            <input type="submit" name="coursesubmit">\
            <input type="submit" name="refreshtables" value="تنشيط الجداول">
            </div>
        </form>
        <a href="multipleupload.php">تحميل متعدد</a>
    </fieldset>
</body>
</html>
<?php
$_SESSION['multipleupload'] = "upload";
    if(isset($_POST['select']) && isset($_POST['coursecategory'])){

    $tablename=$_POST['select'];
    $state = $_POST['coursecategory'];
    if(isset($_POST['submit'])){         //inserting into database
        
        if($_POST['discription'] == true){
            $discription = $_POST['discription'];
        }
        else{
            $discription = ".";
        }

        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);

    $sql = "INSERT INTO {$tablename} (name , mime , data , size , discription , created , state)
    VALUES ('$name' , '$mime' , '$data' , '$size' , '$discription', NOW() , '$state')";

    $res = mysqli_query($dbLink, $sql);
    if($res == true) echo "data inserted"; //checking if data is inserted
    else echo "data doesnot inserted " . mysqli_error($dbLink);
    mysqli_close($dbLink);
    echo '
    <script>
    document.querySelector(".showvisitor").click();
    </script>
    ';
    }

    if(isset($_POST['show'])){                //show table data
        echo $tablename . "........" . $state;
    $sql = "SELECT id , name , mime , size , data , created , discription FROM {$tablename} where state = '$state' ORDER BY id desc";
    $res = mysqli_query($dbLink , $sql);
    if (mysqli_num_rows($res) > 0)
    echo "<br> id  -----  name -----  mime -----  size -----  created -----  discription --------  delete <br>";
        while($rows = mysqli_fetch_assoc($res))
        {
            echo "<br> id: ".$rows['id'].".........name: ".$rows['name'].".........mime: ".$rows['mime'].".........size: ".$rows['size'].".........date: ".$rows['created'].".........discription: <BR><BR>".$rows['discription']."<BR><a href='delete.php?id=".$rows['id']."&&table=".$tablename."'>delete</a><br> <hr>";
        }
        mysqli_close($dbLink);
    }
}
    if(isset($_POST['showcomment'])){          //show comments
        $sql = "SELECT * FROM comment";
        $res = mysqli_query($dbLink , $sql);
        if(mysqli_num_rows($res) > 0){
            while($rows = mysqli_fetch_assoc($res)){
                echo "id : " .$rows['id']. " .......name : " . $rows['name'] . " ........phone number :" .$rows['phone'] . " ......comment date : " .$rows['created'] . "<br> comment : <br>" .$rows['comment'] . "<br> <hr>";
            }
        }
        mysqli_close($dbLink);
    }
    if(isset($_POST['coursesubmit'])){            //making databases
        $course = $_POST['selectcoursedataname'];
        $username = $_POST['username'];
        $code = $_POST['code'];
        $collage = $_POST['selectcollage'];
        $coursedataname = $collage.$course;

        $sql= "INSERT INTO `coursetable` (code , dataname , username , coursedataname) 
                VALUES ('$code' , '$collage' , '$username' , '$coursedataname')";
        $res = mysqli_query($dbLink , $sql);

        $sql = "CREATE TABLE IF NOT EXISTS `$coursedataname` (
            `id`        Int Unsigned Not Null Auto_Increment,
            `name`      VarChar(255) Not Null Default 'Untitled.txt',
            `mime`      VarChar(50) Not Null Default 'text/plain',
            `size`      BigInt Unsigned Not Null Default 0,
            `data`      MediumBlob Not Null,
            `created`   DateTime Not Null,
            `discription` VarChar(255) ,
            `state`      VarChar(50) ,
            PRIMARY KEY (`id`)
        )";
        $res = mysqli_query($dbLink , $sql);

        mysqli_close($dbLink);
        echo '
        <script>
        document.querySelector(".showvisitor").click();
        </script>
        ';
    }
    if(isset($_POST['showvisior'])){                //showing visitor
        $sql= "SELECT * FROM `counter`";
        $res= mysqli_query($dbLink , $sql);
        if($res){
            if(mysqli_num_rows($res) > 0){
                while($rows = mysqli_fetch_assoc($res)){
                    echo " id : ".$rows['id']." , the page : ".$rows['page'] . " , count : " . $rows['visitor'] . "<br><hr>";
                }
            }
        }
        mysqli_close($dbLink);
    }
    if(isset($_POST['refreshtables'])){

        $sql = "SELECT * FROM `coursetable`";
        $res = mysqli_query($dbLink , $sql);
        if($res){
            if(mysqli_num_rows($res) > 0){
                while($rows = mysqli_fetch_assoc($res) ){
        
        $coursedataname = $rows['coursedataname'];
        $sql2 = "CREATE TABLE IF NOT EXISTS `$coursedataname` (
            `id`        Int Unsigned Not Null Auto_Increment,
            `name`      VarChar(255) Not Null Default 'Untitled.txt',
            `mime`      VarChar(50) Not Null Default 'text/plain',
            `size`      BigInt Unsigned Not Null Default 0,
            `data`      MediumBlob Not Null,
            `created`   DateTime Not Null,
            `discription` VarChar(255) ,
            `state`      VarChar(50) ,
            PRIMARY KEY (`id`)
        )";
        $res2 = mysqli_query($dbLink , $sql2);
    }}}

    }
}}
?>

