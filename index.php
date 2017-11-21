<?php
/*
 * index.php
 */
 
include_once "front-controller.php";

$pageData->title = "Shaula";
$pageData->addCSS("");



//$contrl is used to select the appropriate controller file and to append to the title element. The value of $contrl comes from navigation links and forms.
$contrl = getControllerName();


$pageData->content = include_once "views/navigation.php";


$pageData->title .= ": $contrl";

$pageData->content .= include_once "controllers/$contrl.php";	
	
$page = include_once "views/page.php";

echo $page;