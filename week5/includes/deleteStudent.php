<?php

if(isset($_GET['delete'])){
    //print_r($_POST);
    
    $id = $_GET['id'];

    // Connection String
    include('../includes/connect.php');

    $query = "DELETE FROM students WHERE `id` = '$id'";
    
    $student = mysqli_query($connect, $query);
    
    if($student){
        //echo "SUCCESS!";
        header("Location: ../index.php");
    }
    else{
        echo "FAILED" .mysqli_error($connect);
    }
}
else{
    echo "You should not be here!";
}

?>