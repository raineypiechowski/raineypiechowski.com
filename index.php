<?php
require("../config.inc.php");

if ($_GET["path"] == "") {
	require_once("home.php");
	exit();
}

if ($_GET["path"] == "skills" || $_GET["path"] == "skills/") {
	require_once("skills.php");
	exit();
}

if ($_GET["path"] == "portfolio" || $_GET["path"] == "portfolio/") {
	require_once("portfolio.php");
	exit();
}

if ($_GET["path"] == "education" || $_GET["path"] == "education/") {
	require_once("education.php");
	exit();
}

if ($_GET["path"] == "references" || $_GET["path"] == "references/") {
	require_once("references.php");
	exit();
}

if ($_GET["path"] == "contact" || $_GET["path"] == "contact/") {
	require_once("contact.php");
	exit();
}

if ($_GET["path"] == "privacy-policy" || $_GET["path"] == "privacy-policy/") {
	require_once("privacy-policy.php");
	exit();
}

if ($_GET["path"] == "error" || $_GET["path"] == "error/") {
	require_once("error.php");
	exit();
}

header("HTTP/1.0 404 Not Found");
require_once("404.php");


