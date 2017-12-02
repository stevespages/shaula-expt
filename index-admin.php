<?php
/*
 * front-controller.php
 */

//put error reporting statements here (will come after session_start() in admin.php)


// set up Smarty templating system
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('/opt/lampp/htdocs/steve/shaula/smarty/templates');
$smarty->setCompileDir('/opt/lampp/htdocs/steve/shaula/smarty/templates_c');
$smarty->setCacheDir('/opt/lampp/htdocs/steve/shaula/smarty/cache');
$smarty->setConfigDir('/opt/lampp/htdocs/steve/shaula/smarty/configs');

//include_once "models/Page_Data.class.php";

//this function returns the name of the controller file. Same name is used for navigation href values and in title elements.
function getControllerName() {
		//Determines if a navigation link was clicked
	$navigationIsClicked = isset( $_GET['page'] );
	if ( $navigationIsClicked ) {
    	//prepare to load corresponding controller
    	$contrl = $_GET['page'];
	} else {
    	//prepare to load default controller
    	$contrl = "home";
	}
	return $contrl;
}

$db = new PDO("mysql:host=localhost;dbname=shaula;charset=utf8mb4", "root", "");
 
//$pageData = new Page_Data();
