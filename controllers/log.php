<?php
/*
 * controllers/log.php
 */

include_once "models/Log_Table.class.php";
$logTable = new LogTable($db);
$statement = $logTable->getAllLogs();
include_once "views/functions.php";
$editable = false; // this is an argument for showLogOutput() so the displayed log will not be editable.
$log = showLogOutput($statement, $editable);

$smarty->assign('log', $log);
