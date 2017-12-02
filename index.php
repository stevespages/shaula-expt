<?php
/*
 * index.php
 */
 
include_once "index-admin.php";

//$contrl is used to select the appropriate controller file and to append to the title element. The value of $contrl comes from navigation links and forms.
$contrl = getControllerName();

include_once "views/navigation.php";

include_once "controllers/$contrl.php";

$smarty->display('header.tpl');

$smarty->display($contrl.'.tpl');

$smarty->display('footer.tpl');
