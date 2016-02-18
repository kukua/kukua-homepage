<?php
session_start();

require(".env");
require("vendor/autoload.php");
require("classes/Email.php");

function isValidEmail ($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$validEmail = (isset($_POST["email"]) && !empty($_POST["email"]));
$validName	= (isset($_POST["name"]) && !empty($_POST["name"]));

if ($validEmail && $validName) {
	$rawEmail = $_POST["email"];
	$rawName  = $_POST["name"];

	$email = strip_tags($rawEmail);
	$name  = strip_tags($rawName);

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
	$message[] = "This person requested info:<br><br>";
	$message[] = "Name: " . $name;
	$message[] = "<br>Email: "  . $email;

	$lib = new Email();
	$lib->setFrom($email);
	$lib->setTo("Kukua B.V. <info@kukua.cc>");
	$lib->setSubject("Request from website");
	$lib->setContent(implode("\r\n", $message));

	try {
		$lib->send();
		$_SESSION["success"] = "We will send you more info asap!";
		header("Location: /requestinfo");
		exit;
	} catch (Exception $e) {
		$_SESSION["error"] = "Something went wrong, please try agian.";
		header("Location: /requestinfo");
		exit;
	}
}
