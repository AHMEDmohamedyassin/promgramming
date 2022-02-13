<?php
// Make sure an ID was passed
    session_start();
if(isset($_GET['id'])) {
// Get the ID
    $id = $_GET['id'];
 
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
 
                // Print headers
                header("Content-Type: ". $row['mime']);
                header("Content-Length: ". $row['size']);
                header("Content-Disposition: attachment; filename=". $row['name']);
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

else {
    echo 'Error! No ID was passed.';
}
?>