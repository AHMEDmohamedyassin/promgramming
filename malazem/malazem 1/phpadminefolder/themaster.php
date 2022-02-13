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
    </style>
</head>
<body>
    <fieldset>
        <legend> رفع لقاعدة البيانات </legend>
        <form action="themaster.php" method="POST" enctype="multipart/form-data">
            <select name="select">
                <optgroup>
                <option value="filetigara1">الفرقة الأولي تجارة</option>
                <option value="filetigara2">الفرقة الثانية تجارة</option>
                <option value="filetigara3">الفرقة الثالثة تجارة</option>
                <option value="filetigara4">الفرقة الرابعة تجارة</option>
                </optgroup>
                <optgroup>
                <option value="filehokok1">الفرقة الأولي حقوق</option>
                <option value="filehokok2">الفرقة الثانية حقوق</option>
                <option value="filehokok3">الفرقة الثالثة حقوق</option>
                <option value="filehokok4">الفرقة الرابعة حقوق</option>
                </optgroup>
                <optgroup>
                <option value="fileengineera">الفرقة الإعدادية أ </option>
                <option value="fileengineerb">الفرقة الإعدادية ب </option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1civil">الفرقة الأولي  مدني</option>
                <option value="fileengineer2civil">الفرقة الثانية مدني</option>
                <option value="fileengineer3civil">الفرقة الثالثة مدني</option>
                <option value="fileengineer4civil">الفرقة الرابعة مدني</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1elec"> الفرقة الأولي كهرباء</option>
                <option value="fileengineer2elec">الفرقة الثانية كهرباء</option>
                <option value="fileengineer3elec">الفرقة الثالثة كهرباء</option>
                <option value="fileengineer4elec">الفرقة الرابعة كهرباء</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1mech"> الفرقة الأولي ميكانيكا</option>
                <option value="fileengineer2mech">الفرقة الثانية ميكانيكا</option>
                <option value="fileengineer3mech">الفرقة الثالثة ميكانيكا</option>
                <option value="fileengineer4mech">الفرقة الرابعة ميكانيكا</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1chem"> الفرقة الأولي كيمياء</option>
                <option value="fileengineer2chem">الفرقة الثانية كيمياء</option>
                <option value="fileengineer3chem">الفرقة الثالثة كيمياء</option>
                <option value="fileengineer4chem">الفرقة الرابعة كيمياء</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1petrol"> الفرقة الأولي بترول</option>
                <option value="fileengineer2petrol">الفرقة الثانية بترول</option>
                <option value="fileengineer3petrol">الفرقة الثالثة بترول</option>
                <option value="fileengineer4petrol">الفرقة الرابعة بترول</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1commu"> الفرقة الأولي اتصالات</option>
                <option value="fileengineer2commu">الفرقة الثانية اتصالات</option>
                <option value="fileengineer3commu">الفرقة الثالثة اتصالات</option>
                <option value="fileengineer4commu">الفرقة الرابعة اتصالات</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1archi"> الفرقة الأولي عمارة</option>
                <option value="fileengineer2archi">الفرقة الثانية عمارة</option>
                <option value="fileengineer3archi">الفرقة الثالثة عمارة</option>
                <option value="fileengineer4archi">الفرقة الرابعة عمارة</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1bio"> الفرقة الأولي طبية</option>
                <option value="fileengineer2bio">الفرقة الثانية طبية</option>
                <option value="fileengineer3bio">الفرقة الثالثة طبية</option>
                <option value="fileengineer4bio">الفرقة الرابعة طبية</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1soft"> الفرقة الأولي حاسبات</option>
                <option value="fileengineer2soft">الفرقة الثانية حاسبات</option>
                <option value="fileengineer3soft">الفرقة الثالثة حاسبات</option>
                <option value="fileengineer4soft">الفرقة الرابعة حاسبات</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1metal"> الفرقة الأولي فلزات</option>
                <option value="fileengineer2metal">الفرقة الثانية فلزات</option>
                <option value="fileengineer3metal">الفرقة الثالثة فلزات</option>
                <option value="fileengineer4metal">الفرقة الرابعة فلزات</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1mine"> الفرقة الأولي مناجم</option>
                <option value="fileengineer2mine">الفرقة الثانية مناجم</option>
                <option value="fileengineer3mine">الفرقة الثالثة مناجم</option>
                <option value="fileengineer4mine">الفرقة الرابعة مناجم</option>
                </optgroup>
                <optgroup>
                <option value="fileengineer1aero"> الفرقة الأولي طيران</option>
                <option value="fileengineer2aero">الفرقة الثانية طيران</option>
                <option value="fileengineer3aero">الفرقة الثالثة طيران</option>
                <option value="fileengineer4aero">الفرقة الرابعة طيران</option>
                </optgroup>
            </select> 
            <br><br>
            <input type="file" name="uploaded_file"> <br><br>
            <textarea cols="50" rows="10" name="discription"></textarea> <br><br>
            <input type="submit" name="submit" value="تسجيل">
        </form>
    </fieldset>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
    if(isset($_FILES['uploaded_file'])){
    include("connectingdatabase.php");
    $discription = $_POST['discription'];
    $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
    $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
    $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
    $size = intval($_FILES['uploaded_file']['size']);

    $tablename=$_POST['select'];

    $sql = "INSERT INTO {$tablename} (name , mime , data , size , discription , created)
    VALUES ('$name' , '$mime' , '$data' , '$size' , '$discription', NOW() )";

    $res = mysqli_query($dbLink, $sql);
    if($res == true) echo "data inserted"; //checking if data is inserted
    else echo "data doesnot inserted " . mysqli_error($dbLink);

    mysqli_close($dbLink); // or  $conn = null;
    }
}
include("connectingdatabase.php");
    $sql2 = "SELECT id , name , mime , size , data , created , discription FROM {$tablename}";
    $res2 = mysqli_query($dbLink , $sql2);
    if (mysqli_num_rows($res2) > 0)
    echo "<br> id  -----  name -----  mime -----  size -----  created -----  discription <br>";
        while($rows = mysqli_fetch_assoc($res2))
        {
            echo "<br> id: ".$rows['id']." , name: ".$rows['name']." , mime: ".$rows['mime']." , size: ".$rows['size']." , date: ".$rows['created']." , discription: ".$rows['discription']."<br>";
        }
        mysqli_close($dbLink);
?>

