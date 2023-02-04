<?php
include("../Config/db_config.php");

if(!empty($_GET)){
    $Error="";

    if(empty($_GET['fname']) || empty($_GET['lname']) || empty($_GET['topic']) || empty($_GET['info'])){
        $Error.="you must enter a value <br>";
        header("location:../contactUs.php?Error=$Error");
    }
    else{
        $fname=$_GET['fname'];
        $lname=$_GET['lname'];
        $topic=$_GET['topic'];
        $info=$_GET['info'];

        $query="INSERT INTO feedback (fname, lname, topic, info) VALUES('$fname', '$lname', '$topic', '$info')";
        if(mysqli_query($connection, $query)){
            header("location:../contactUs.php?message='Done'");
        }
        else{
            echo "Error".$query.mysqli_error($connection);
        }
    }
}

?>