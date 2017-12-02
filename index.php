<?php
/*
 * index.php
 */
 
include_once "index-admin.php";

//$pageData->title = "Shaula";
//$pageData->addCSS("");



//$contrl is used to select the appropriate controller file and to append to the title element. The value of $contrl comes from navigation links and forms.
$contrl = getControllerName();


//$pageData->content = include_once "views/navigation.php";


//$pageData->title .= ": $contrl";

//$pageData->content .= include_once "controllers/$contrl.php";

$smarty->display('header.tpl');

include_once "controllers/$contrl.php";

$smarty->display('footer.tpl');
	
//$page = include_once "views/page.php";

//echo $page;

