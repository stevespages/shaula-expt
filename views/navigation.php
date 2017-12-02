<?php
/**
 * views/navigation.php
 *
 * The href attribute value for the home page anchor element does
 * not have a query string.
 *
 * Query strings for other anchor elements are named 'page' and their values are the name
 * of the controller php file they call on. The values are also used as part of the content
 * for page title elements.
 *
 */

$navigation =	"<p><nav id='navigation'>";

					if ($contrl != 'home') {
						$navigation .=	"<a href='index.php'>";
					}
	 				
	 				if ($contrl == 'home') {
	 					$navigation .= "<font color='red'>";
	 				}
	 				
$navigation .= "Home";

					if ($contrl == 'home') {
	 					$navigation .= "</font>";
	 				}
	 				
					if ($contrl != 'home') {
						$navigation .=	"</a>";
					}
					
$navigation .= " | ";	 				
					
					if ($contrl != 'log') {
						$navigation .=	"<a href='index.php?page=log'>";
					}
	 				
	 				if ($contrl == 'log') {
	 					$navigation .= "<font color='red'>";
	 				}
$navigation .= "Log";

					if ($contrl == 'log') {
	 					$navigation .= "</font>";
	 				}
	 				
					if ($contrl != 'log') {
						$navigation .=	"</a>";
					}	 				

$navigation .= "</p></nav>";

$smarty->assign('navigation', $navigation);
