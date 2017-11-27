<?php
/*
 * controllers/admin/edit-logs.php
 */

If ($_SERVER['REQUEST_METHOD'] == 'POST')	{
	include_once "models/Log_Table.class.php";
	$logTable = new LogTable($db);
	$id = htmlentities($_GET['edit-id']);
	$place_from = htmlentities($_POST['place_from']);
	$place_to = htmlentities($_POST['place_to']);
	$on_board = htmlentities($_POST['on_board']);
	$depart = htmlentities($_POST['depart']);
	$arrive = htmlentities($_POST['arrive']);
	$distance = htmlentities($_POST['distance']);
	$description = htmlentities($_POST['description']);
	$image_1 = htmlentities($_POST['image_1']);
	$image_2 = htmlentities($_POST['image_2']);
	$image_3 = htmlentities($_POST['image_3']);
	$image_4 = htmlentities($_POST['image_4']);
	$image_5 = htmlentities($_POST['image_5']);
	$image_description_1 = htmlentities($_POST['image_description_1']);
	$image_description_2 = htmlentities($_POST['image_description_2']);
	$image_description_3 = htmlentities($_POST['image_description_3']);
	$image_description_4 = htmlentities($_POST['image_description_4']);
	$image_description_5 = htmlentities($_POST['image_description_5']);
	$statement = $logTable->updateLog($id, $place_from, $place_to, $on_board, $depart, $arrive, $distance, $description, $image_1, $image_2, $image_3, $image_4, $image_5, $image_description_1, $image_description_2, $image_description_3, $image_description_4, $image_description_5);
}

If (isset($_GET['id']) AND $_SERVER['REQUEST_METHOD'] != 'POST')	{
	// show log form populated with values from the row with the id in $_GET[id]
	include_once "models/Log_Table.class.php";
	$logTable = new LogTable($db);
	$id = htmlentities($_GET['id']);
	$statement = $logTable->getLogToEdit($id);
	$row = $statement->fetchObject();
	include_once "views/admin/functions.php";
	$row = get_object_vars($row);
	$edit_logs = showEditLogForm($row);
	
//var_dump(get_object_vars($row));
//echo "</br></br>";
//var_dump($row);
	
	return $edit_logs;

}

include_once "models/Log_Table.class.php";
$logTable = new LogTable($db);
$statement = $logTable->getAllLogs(); 
include_once "views/functions.php";
$editable = true; // this is an argument for showLogOutput() so the displayed log will be editable.
$edit_logs = showLogOutput($statement, $editable);
return $edit_logs;