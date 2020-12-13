<?php
$formSubject = $_POST['formSubject'];
$formPhone = $_POST['formPhone'];
$formName = $_POST['formName'];
$formEmail = $_POST['formEmail'];
$formMessage = $_POST['formMessage'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "", "", "");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
// $testWaarde = mysqli_real_escape_string($link, $_REQUEST['testWaarde']);
// $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
// $email = mysqli_real_escape_string($link, $_REQUEST['email']);

// Attempt insert query execution
$sql = "INSERT INTO testTabel (formSubject, formName, formPhone,
         formEmail, formMessage) VALUES ('$formSubject', '$formName', '$formPhone',
         '$formEmail', '$formMessage')";

// uitvoeren van de querry
if(mysqli_query($link, $sql)){
    echo "Formulier met succes verzonden!";
    echo " Klik <a href=>hier<a> om terug te gaan. ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
