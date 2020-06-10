<?php

// Here we get all the information from the fields sent over by the form.
$name = $_POST['nameContact'];
$email = $_POST['emailContact'];
$message = $_POST['messageContact'];

$to = 'hosseinakbari506@gmail.com';
$subject = 'فرم تماس با من';
$headers = 'From: youremail@domain.com' . "\r\n";
$headers .= "Content-Type: text/html; charset=utf-8" . "\r\n";