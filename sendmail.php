<?php
session_start();

function isValidEmail($email) { 
	return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$validEmail = (isset($_POST["email"]) && !empty($_POST["email"]));
$validName	= (isset($_POST["name"]) && !empty($_POST["name"]));

if ($validEmail && $validName) {
	$rawEmail = $_POST["email"];
	$rawName  = $_POST["name"];

	$email = strip_tags($rawEmail);
	$name  = strip_tags($rawName);

	if (!isValidEmail($email)) {
		$_SESSION["error"] = "No valid e-mail address supplied";
		header("Location: /requestinfo");
		exit;
	}

	if (strlen($name) > 150) {
		$_SESSION["error"] = "Please fill out a valid name";
		header("Location: /requestinfo");
		exit;
	}

	$message[] = "Hi there!<br>";
	$message[] = "This person signed up:<br><br>";
	$message[] = "Name: " . $name;
	$message[] = "Email: "  . $email;

	if (mail("siebren@kukua.cc", "Signup from website", implode($message, "\r\n"), "From: " . $email)) {
		$_SESSION["success"] = "Thanks for signing up!";
		header("Location: /requestinfo");
		exit;
	}
	$_SESSION["error"] = "Something went wrong!";
	header("Location: /requestinfo");
	exit;
}
