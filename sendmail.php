<?php
session_start();

function e ($val) {
	return htmlspecialchars($val, ENT_NO_QUOTES, 'UTF-8');
}
function isValidEmail ($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$validEmail = (isset($_POST["email"]) && !empty($_POST["email"]));
$validName	= (isset($_POST["name"]) && !empty($_POST["name"]));

if ($validEmail && $validName) {
	$rawEmail = $_POST["email"];
	$rawName  = $_POST["name"];

	$email = e($rawEmail);
	$name  = e($rawName);

	if ( ! isValidEmail($email)) {
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
	$message[] = "<br>Email: "  . $email;

	$headers[] = "From: www.kukua.cc <info@kukua.cc>";
	$headers[] = "Reply-To: " . $email;
	$headers[] = "Return-Path: Mail-Error <siebren@kukua.cc>";
	$headers[] = "X-Mailer: PHP/" . phpversion();
	$headers[] = "X-Priority: Normal";
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/html; charset=iso-8859-1";

	if (mail("info@kukua.cc", "Signup from website", implode("\r\n", $message), implode("\r\n", $headers))) {
		$_SESSION["success"] = "We will send you some info soon!";
		header("Location: /requestinfo");
		exit;
	}

	$_SESSION["error"] = "Something went wrong!";
	header("Location: /requestinfo");
	exit;
}
