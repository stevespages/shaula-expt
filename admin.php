<?php
/*
 * admin.php
 */

session_start();

// index-admin.php has code which is required by both index.php and admin.php.
include_once "index-admin.php";

// detects if a session has started. If not $_SESSION['valid'] is assigned the value "No".
if(!isset($_SESSION['valid'])) {
	$_SESSION['valid'] = "No";
}

// if login.php was posted the correct password it will have set $_SESSION['valid']="Yes".
// if $_SESSION['valid']=="Yes" allow access to the Admin pages.
// if $_SESSION['valid']!="Yes" present the login page.
if($_SESSION['valid'] == "Yes") {
	// The value of $contrl is derived from navigation href values and form action values.
	// $contrl is used to select the appropriate controller .php file.
	// $contrl is used to append to the HTML title element.
	// $contrl is used to select the appropriate Smarty .tpl file.
	$contrl = getControllerName();
	}	else {
			$contrl = "login";
		}

include_once "controllers/admin/$contrl.php";

$navigation = array("index.php", "admin.php", "admin.php?page=upload-log", "admin.php?page=upload-document", "admin.php?page=upload-manual", "admin.php?page=edit-logs", "admin.php?page=edit-documents", "admin.php?page=edit-manuals");

$smarty->assign('navigation', $navigation);

$smarty->assign('title', $contrl);

$smarty->display('admin/header.tpl');

$smarty->display('admin/'.$contrl.'.tpl');

$smarty->display('admin/footer.tpl');
