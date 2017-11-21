<?php
/*
 * views/page.php
 */
 
$page = 	"<!DOCTYPE html>
			<html>
			<head>
			<link rel='icon'
     		type='image/x-icon' 
      	href='media/favicon.ico'>
			<title>$pageData->title</title>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
			$pageData->css
			$pageData->embeddedStyle
			</head>
			<body>
			$pageData->content
			$pageData->scriptElements
			</body>
			</html>
			";

return $page;		
			