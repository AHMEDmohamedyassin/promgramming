<?php
// Make sure an ID was passed
    session_start();
if(isset($_GET['id'])) {
// Get the ID
    $id = filter_var($_GET['id'] , FILTER_SANITIZE_STRING);
 
        // Connect to the database
        include("../phpadminefolder/connectingdatabase.php");
 
        // Fetch the file information
        $query = "
            SELECT `mime`, `data` ,`size` , `name`
            FROM {$_SESSION['table']}
            WHERE `id` = {$id}";
        $result = mysqli_query( $dbLink , $query );
 
        if($result) {
            // Make sure the result is valid
            if(mysqli_num_rows($result) == 1) {
            // Get the row
                $row = mysqli_fetch_assoc($result);
                
                header('Content-type:'.$row['mime'] );
                header("Content-Disposition: inline; filename=". $row['name']); 
                header('Content-Transfer-Encoding: binary'); 
                // Print data
                echo $row['data'];
            }
            else {
                echo 'Error! No image exists with that ID.';
            }
 
            // Free the mysqli resources
            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
        }
        @mysqli_close($dbLink);
    }
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $name . '"');
header('Content-Transfer-Encoding: binary');


