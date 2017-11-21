<?php
/*
 * controllers/admin/upload-manual.php
 */
 
 If ($_SERVER['REQUEST_METHOD'] == 'POST')	{
 	include_once "models/functions.php";
 	$manual_file_name = htmlentities(uploadManualFile($_FILES));
 	include_once "models/Manuals_Table.class.php";
 	$manualsTable = new ManualsTable($db);
 	$manual_name = htmlentities($_POST['manual_name']);
 	$manual_description = htmlentities($_POST['manual_description']);
 	$manualsTable->saveManuals($manual_name, $manual_file_name, $manual_description);
 	$upload_manual = "<p>hopefully the file has been uploaded and the information stored in the database</p>";
	}	else {	
		include_once "views/admin/functions.php";
		$upload_manual = showManualForm();
}
return $upload_manual;