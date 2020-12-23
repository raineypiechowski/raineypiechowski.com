<?php
require_once("../config.inc.php");
require_once("static/includes/PagesDataAccess.inc.php");

$pda = new PagesDataAccess(get_conn());

if (isset($_GET["path"])) {
    if (string_ends_with($_GET["path"], '/')) {
        $path = rtrim($_GET["path"], '/');
        header("Location: " . BASE_URL . $path);
        exit();
    }

    $path = $_GET["path"];
} else {
    $path = "";
}

$file_name = $pda->check_page_existance($path);

if ($file_name) {
	require_once($file_name);
} else {
	header("HTTP/1.0 404 Not Found");
	require_once("404.php");
}

//functions
function string_ends_with($str, $lastString) {
    $count = strlen($lastString);
    if ($count == 0) {
       return true;
    }
    return (substr($str, -$count) === $lastString);
 }


