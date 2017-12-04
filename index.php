<?php
/*
 * index.php
 */

// index-admin.php has code which is required by both index.php and admin.php.
include_once "index-admin.php";

// The value of $contrl is derived from navigation href values.
// $contrl is used to select the appropriate controller .php file.
// $contrl is used to append to the HTML title element.
// $contrl is used to select the appropriate Smarty .tpl file.
$contrl = getControllerName();

include_once "controllers/$contrl.php";

$navigation = array("index.php", "index.php?page=log");

$smarty->assign('navigation', $navigation);

$smarty->assign('title', $contrl);

$smarty->display('header.tpl');

$smarty->display($contrl.'.tpl');

$smarty->display('footer.tpl');
