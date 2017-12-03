<?php
/*
 * controllers/admin/edit-manuals.php
 */

include_once "models/Manuals_Table.class.php";
$manualTable = new ManualsTable($db);
$statement = $manualTable->getAllManuals(); 
include_once "views/admin/functions.php";
$edit_manuals = showManualsOutput($statement);

$smarty->assign('edit_manuals', $edit_manuals);
