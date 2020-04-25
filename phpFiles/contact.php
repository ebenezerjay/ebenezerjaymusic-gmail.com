<?php
  // connect to database
  $contactFormData = new mysqli("localhost:3306", "indieliv_eb", "Helpontheway2112!", "indieliv_Streams");
	
  // check connection 
if ($contactFormData->connect_error) {
  die('Connect error: ' . $contactFormData->connect_errno . ': ' . $contactFormData->connect_error);
} 

$contactData = "INSERT into contactForm (contactName, contactEmail, contactMessage) VALUES('{$contactFormData->real_escape_string($_POST['contactName'])}',
'{$contactFormData->real_escape_string($_POST['contactEmail'])}',
'{$contactFormData->real_escape_string($_POST['contactMessage'])}')";

$insertData = $contactFormData->query($contactData); 

?>