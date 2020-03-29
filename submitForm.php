<?php
// connect to database
$submitData = new mysqli("localhost:3306", "indieliv_eb", "Lando2112!", "indieliv_submissions");

// check connection
if ($submitData->connect_error) {
    die('Connect error: ' . $submitData->connect_errno . ': ' . $submitData->connect_error);
} 

// get input data
$name = $_POST['formName'];














?>