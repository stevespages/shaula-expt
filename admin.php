<?php
/*
 * admin.php
 */

session_start();

// index-admin.php has code which is required by both index.php and admin.php.
include_once "index-admin.php";

// detects if a session has started. If not $_SESSION['valid'] is assigned the value "No".
if(!isset($_SESSION['valid'])) {
	$_SESSION['valid'] = "No";
}

// if login.php was posted the correct password it will have set $_SESSION['valid']="Yes".
// if $_SESSION['valid']=="Yes" allow access to the Admin pages.
// if $_SESSION['valid']!="Yes" present the login page.
if($_SESSION['valid'] == "Yes") {
	// The value of $contrl is derived from navigation href values and form action values.
	// $contrl is used to select the appropriate controller .php file.
	// $contrl is used to append to the HTML title element.
	// $contrl is used to select the appropriate Smarty .tpl file.
	$contrl = getControllerName();
	}	else {
			$contrl = "login";
		}
		
// MODEL

$log_form_array = array ( 	"place_from" => array (
																"input_value" => "",
																"error_mssg" => "",
																"form_label" => "Place From",
																"type" => "text",
																"validate" => "string"
																),
									"place_to" => array	(
																"input_value" => "",
																"error_mssg" => "",
																"form_label" => "Place To",
																"type" => "text",
																"validate" => "string"
																),
									"on_board" => array 	(
																"input_value" => "",
																"error_mssg" => "",
																"form_label" => "On Board",
																"type" => "text",
																"validate" => "string"
																),
									"depart"	=>	array		(
																"input_value" => "",
																"error_mssg" => "",
																"form_label" => "Time of Departure",
																"type" => "text",
																"validate" => "date"
																)
);

// VIEW

// CONTROLLER

$navigation = array("index.php", "admin.php", "admin.php?page=upload-log", "admin.php?page=upload-document", "admin.php?page=upload-manual", "admin.php?page=edit-logs", "admin.php?page=edit-documents", "admin.php?page=edit-manuals");

function login()
{ 
    if ($_SERVER['REQUEST_METHOD'] == 'POST')	{
        if ($_POST['password'] == "1234")	{
            $_SESSION['valid'] = "Yes";
 		      $login = "<p>click <a href='admin.php'>here</a> to continue</p>";
 		      //return $login;
 		      header("Location: admin.php");
 		  }
    }

    if($_SESSION['valid'] != "Yes") {
        $login = "<form method='post' action='admin.php'>
        <p><label>Password <input type='password' name='password'></label></p>
        <p><input type='submit'><p>
        </form></br>";
        return $login;
    }
}

function home()
{
    $home = "<p>this will be the admin home page</p>";
    return $home;
}

function uploadLog()
{
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
}

function editLogs()
{
    $edit_logs = "this will be the page for editing logs";
    return $edit_logs;
}

// this needs to be in getPostArrayData() in functions/functions.php...
function uploadManual() {
	$upload_dir = 'media/manuals/';
	$upload_file = $upload_dir . basename(htmlentities($_FILES['manual_file_name']['name']));
	if (move_uploaded_file(htmlentities($_FILES['manual_file_name']['tmp_name']), $upload_file)) {
		return basename($_FILES['manual_file_name']['name']);
	} 	else {
			return "<p>something went wrong with file upload";
		}
}

function editManuals()
{
include_once "models/Manuals_Table.class.php";
$manualTable = new ManualsTable($db);
$statement = $manualTable->getAllManuals(); 
include_once "views/admin/functions.php";
$edit_manuals = showManualsOutput($statement);
}

function uploadDocument()
{
    $upload_document = "<p>this will be the page for uploading documents</p>";
    return $upload_document;
}

function editDocuments()
{
    $edit_documents = "<p>this will be the page for editing documents</p>";
 
    return $edit_documents;
}

$content = $contrl();


if($contrl == 'login') {
	$navigation = "";
}

$title = ucfirst($contrl);
$title = str_replace('-', ' ', $title);
$content = $contrl();
$page = include_once 'template.php';
echo $page;


