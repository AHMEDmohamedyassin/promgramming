<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'):
        
        // echo '<pre>';
        // print_r($_FILES['my_work']);
        // echo '</pre>';
        // realpath(dirname(getcwd())) .'\php form\file'; مسار الملف
        // $_SERVER['DOCUMENT_ROOT']; مسار الملف

        $file = $_FILES['my_work'];

        $name  = $file['name']    ;
        $type  = $file['type']    ;
        $temp  = $file['tmp_name'];
        $size  = $file['size']    ;
        $error = $file['error']   ;

        $extentions = array('png' , 'txt' , 'jpg');
        $allowed_size = 20000;
        $count = count($name);

        for($i=0; $i< $count ; $i++){  

            $errors = array();

            if($error[$i] == 4){
                $errors[] = '<div class="error"> you have not uploaded files </div>';
            }else{
                if(! $size[$i] < $allowed_size){
                    $errors[] = '<div class="error">size is lager than allowed</div>';
                }
                if(! in_array($type[$i] , $extentions)){
                    $errors[] = '<div class="error">extension refused</div>';
                }
            }
            if(empty($errors)){
                move_uploaded_file($temp , $_SERVER['DOCUMENT_ROOT'] . '\php form\file\\' . $name);
            }else{
                echo '<pre>';
                print_r($errors);
                echo '</pre>';
            }
        }

    endif;
?>

<form class='' action='' method='POST' enctype='multipart/form-data'>
    <input type='file' name='my_work[]' value='' multiple='multiple' >
    <input type='submit'>
</form>