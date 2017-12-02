<?php
/*
 * admin.php
 */

session_start();

include_once "index-admin.php";

//detects if a session has started. If not $_SESSION['valid'] set to "No"
if(!isset($_SESSION['valid'])) {
	$_SESSION['valid'] = "No";
}

//if login.php was posted the correct password it will have set $_SESSION['valid']="Yes"
if($_SESSION['valid'] == "Yes") {
	$contrl = getControllerName();
	//only include navigation links if logged in ie. not on the login page itself
	include_once "views/admin/navigation.php";
	}	else {
			$contrl = "login";
			$navigation = "";
			$smarty->assign('navigation', $navigation);
		}

include_once "controllers/admin/$contrl.php";

$smarty->display('admin/header.tpl');

$smarty->display('admin/'.$contrl.'.tpl');

$smarty->display('admin/footer.tpl');
