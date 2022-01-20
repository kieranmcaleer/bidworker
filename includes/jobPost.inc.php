<?php

if (isset($_POST['createJobButton'])){
    echo "It works";
    $jobTypeSelection = $_POST['fieldSelection'];
    $jobDescription = $_POST['jobDescription'];
    $jobPrice = $_POST['jobPrice'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputJobPost($jobTypeSelection, $jobDescription, $jobPrice) !==false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    createJob($conn, $jobDescription, $jobTypeSelection, $jobPrice);
}

else {
    header("location: ../login.php");
    exit();
}