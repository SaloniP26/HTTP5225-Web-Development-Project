<?php

if(isset($_POST['grades'])){
    //print_r($_POST);
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageurl = $_POST['imageurl'];

    // Connection String
    include('../includes/connect.php');

    $query = "INSERT INTO students (fname, lname, marks, imageurl) VALUES ('$fname', '$lname', '$marks', '$imageurl')";
    
    $student = mysqli_query($connect, $query);
    
    if($student){
        echo "SUCCESS!";
    }
    else{
        echo "FAILED" .mysqli_error($connect);
    }
}
else{
    echo "You should not be here!";
}

?>