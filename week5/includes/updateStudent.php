
<?php

if(isset($_POST['updateStudent'])){
    //print_r($_POST);
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageurl = $_POST['imageurl'];

    // Connection String
    include('../includes/connect.php');

    $query = "UPDATE students SET fname='$fname', lname='$lname', marks='$marks', imageurl='$imageurl' WHERE id = '$id'";
    
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


