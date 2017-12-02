<?php
/*
 * controllers/admin/admin-home.php
 */
 
 $admin_home = "<p>this will be the admin home page</p>";
 
 //return $admin_home;
 
 // Doing it the Smarty way:
 $smarty->assign('admin_home', $admin_home);
 
 $smarty->display('admin/home.tpl');