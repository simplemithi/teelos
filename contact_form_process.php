<?php
include(getcwd().'/db/db_connect.php');

if (isset($_POST)) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$from_email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$to_email = "support@teelos.in";

	$headers .= "Return-Path: ".$to."\r\n";
  	$headers .= "From: ".$from_email."\r\n";
	$headers .= "Organization: Teelos\r\n";
  	$headers .= "MIME-Version: 1.0\r\n";
  	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  	$headers .= "X-Priority: 3\r\n";
  	$headers .= "X-Mailer: PHP". phpversion() ."\r\n";

	$conn->query("INSERT INTO contact_us 
				(fname, lname, email, phone, message) 
				VALUES ('".$fname."', '".$lname."', '".$from_email."', $phone, '".$message."')");

	mail($to_email, "Teelos Support", $message, $headers);

	header('Location: contact.php/success');
}