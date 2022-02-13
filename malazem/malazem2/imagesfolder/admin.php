
$filecount = count($_FILES['uploaded_file']['name']);
for($i=0; $i< $filecount; $i++){  //multifiles
    move_uploaded_file($data[$i] , 'upload\up\\'.$name[$i]);
}