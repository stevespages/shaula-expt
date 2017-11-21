<?php
/*
 * admin.php
 */

session_start();

include_once "front-controller.php";

$pageData->title = "Shaula Admin";
$pageData->addCSS("");

//detects if a session has started. If not $_SESSION['valid'] set to "No"
if(!isset($_SESSION['valid'])) {
	$_SESSION['valid'] = "No";
}

//if login.php was posted the correct password it set $_SESSION['valid']="Yes"
if($_SESSION['valid'] == "Yes") {
	$contrl = getControllerName();
	//only include navigation links if logged in ie. not on the login page itself
	$pageData->content = include_once "views/admin/admin-navigation.php";
	}	else {
			$contrl = "login";
		}
		
$pageData->title .= ": $contrl";

$pageData->content .= include_once "controllers/admin/$contrl.php";

$page = include_once "views/page.php";

echo $page;