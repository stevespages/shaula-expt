<?php
/*
 * controllers/admin/upload-log.php
 */
	
If ($_SERVER['REQUEST_METHOD'] == 'POST')	{
	
	include_once "models/Log_Table.class.php";
	include_once "models/table-fields.php";
	$logTable = new LogTable($db);
	
	$posted_array = array();
	
	foreach($log_form_array as $key => $value) {
		$posted_array[$key] = $_POST[$key];
	}
	
	$logTable->saveLog($posted_array);	
		
	$upload_log = "<p>your log entry has been saved. Why not head over to the main site and click on the log page just to make sure</p>";

}	else {
	
		include_once "models/table-fields.php";
		include_once "views/admin/functions.php";
		include_once "models/functions.php";
		
		$action = "'admin.php?page=upload-log'";
		
		$upload_log = showLogForm($action, $log_form_array);

}

$smarty->assign('upload_log', $upload_log);