<?php
/*
 * controllers/admin/upload-log.php
 */
	
If ($_SERVER['REQUEST_METHOD'] == 'POST')	{
	include_once "models/Log_Table.class.php";
	$logTable = new LogTable($db);
	$place_from = htmlentities($_POST['place_from']);
	$place_to = htmlentities($_POST['place_to']);
	$on_board = htmlentities($_POST['on_board']);
	$depart = htmlentities($_POST['depart']);
	$arrive = htmlentities($_POST['arrive']);
	$distance = htmlentities($_POST['distance']);
	$description = htmlentities($_POST['description']);
	$image_1 = ($_FILES['image_1']['name']);
	$image_2 = ($_FILES['image_2']['name']);
	$image_3 = ($_FILES['image_3']['name']);
	$image_4 = ($_FILES['image_4']['name']);
	$image_5 = ($_FILES['image_5']['name']);
	$image_description_1 = htmlentities($_POST['image_description_1']);
	$image_description_2 = htmlentities($_POST['image_description_2']);
	$image_description_3 = htmlentities($_POST['image_description_3']);
	$image_description_4 = htmlentities($_POST['image_description_4']);
	$image_description_5 = htmlentities($_POST['image_description_5']);
	
	// $upload log = added for debugging. Remove and uncomment line below it..
	$upload_log = $logTable->saveLog($place_from, $place_to, $on_board, $depart, $arrive, $distance, $description, $image_1, $image_2, $image_3, $image_4, $image_5, $image_description_1, $image_description_2, $image_description_3, $image_description_4, $image_description_5);
	//$upload_log = "<p>your log entry has been saved. Why not head over to the main site and click on the log page just to make sure</p>";

}	else {	
		include_once "views/admin/functions.php";
		$upload_log = showLogForm();
}

$smarty->assign('upload_log', $upload_log);