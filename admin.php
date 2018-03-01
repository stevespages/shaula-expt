<?php

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

$navigation_names = array("Upload Log", "Upload Document", "Upload Manual", "Edit Logs", "Edit Documents", "Edit Manuals");

$log_form_array = array ( 	"place_from" => array (
																"name" => "place_from",
																"required" => "required",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Place From",
																"type" => "text",
																"validate" => "string"
																),
									"place_to" => array	(
																"name" => "place_to",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Place To",
																"type" => "text",
																"validate" => "string"
																),
									"on_board" => array 	(
																"name" => "on_board",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "On Board",
																"type" => "text",
																"validate" => "string"
																),
									"depart_date"	=>	array		(
																"name" => "depart_date",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Date of Departure",
																"type" => "date",
																"validate" => "date"
																),
									"depart_time"	=>	array		(
																"name" => "depart_time",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Time of Departure",
																"type" => "time",
																"validate" => "time"
																),
									"arrive_date"	=>	array		(
																"name" => "arrive_date",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Date of Arrival",
																"type" => "date",
																"validate" => "date"
																),
									"arrive_time"	=>	array		(
																"name" => "arrive_time",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Time of Arrival",
																"type" => "time",
																"validate" => "time"
																),
									"distance"	=>	array		(
																"name" => "distance",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Distance",
																"type" => "int",
																"validate" => "int"
																),
									"description"	=>	array		(
																"name" => "description",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Description",
																"type" => "text",
																"validate" => "text"
																),
									"image_1"	=>	array		(
																"name" => "image_1",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image 1",
																"type" => "text",
																"validate" => "text"
																),
									"image_2"	=>	array		(
																"name" => "image_2",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image 2",
																"type" => "text",
																"validate" => "text"
																),
									"image_3"	=>	array		(
																"name" => "image_3",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image 3",
																"type" => "text",
																"validate" => "text"
																),
									"image_4"	=>	array		(
																"name" => "image_4",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image 4",
																"type" => "text",
																"validate" => "text"
																),
									"image_5"	=>	array		(
																"name" => "image_5",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image 5",
																"type" => "text",
																"validate" => "text"
																),
									"image_description_1"	=>	array		(
																"name" => "image_description_1",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image Description 1",
																"type" => "text",
																"validate" => "text"
																),
									"image_description_2"	=>	array		(
																"name" => "image_description_2",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image Description 2",
																"type" => "text",
																"validate" => "text"
																),
									"image_description_3"	=>	array		(
																"name" => "image_description_3",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image Description 3",
																"type" => "text",
																"validate" => "text"
																),
									"image_description_4"	=>	array		(
																"name" => "image_description_4",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image Description 4",
																"type" => "text",
																"validate" => "text"
																),
									"image_description_5"	=>	array		(
																"name" => "image_description_5",
																"required" => "",
																"value" => "",
																"error_mssg" => "",
																"form_label" => "Image Description 5",
																"type" => "text",
																"validate" => "text"
																)
);

$manual_form_array = array (
			"manual_name" => array (
						"name" => "manual_name",
						"required" => "required",
						"value" => "",
						"error_mssg" => "",
						"form_label" => "Place From",
						"type" => "text",
						"validate" => "string"
						),
			"manual_file_name" => array (
						"name" => "manual_file_name",
						"required" => "required",
						"value" => "",
						"error_mssg" => "",
						"form_label" => "Place To",
						"type" => "text",
						"validate" => "string"
						),
			"manual_description" => array (
						"name" => "manual_description",
						"required" => "required",
						"value" => "",
						"error_mssg" => "",
						"form_label" => "On Board",
						"type" => "text",
						"validate" => "string"
						),
);

// VIEW

// CONTROLLER

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

function upload_log()
{
    global $log_form_array;
    global $pdo;
    $is_form_valid = 'false';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')	{
	    //$upload_log = '<p>OK you posted the form!</p>';
	    $log_form_array = assignPostToFormArray($log_form_array);
	    $log_form_array = validateFormArray($log_form_array, $pdo, 'log');
	    $is_form_valid = isFormValid($log_form_array);
	 }
	 
	 if($is_form_valid === true) {
	     save('log', $log_form_array, $pdo);
	     header('Location: admin.php');
	     //var_dump($log_form_array);
	 }

    if ($_SERVER['REQUEST_METHOD'] != 'POST' || $is_form_valid != true)	{
	    $action = "'admin.php?page=upload-log'";
	    $upload_log = showForm($action, $log_form_array);
    }

    return $upload_log;
}

function upload_document()
{
    $upload_document = "<p>this will be the page for uploading documents</p>";
    return $upload_document;
}

// this needs to be in getPostArrayData() in functions/functions.php...
function upload_manual()
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST')	{
	$upload_dir = 'media/manuals/';
	$upload_file = $upload_dir . basename(htmlentities($_FILES['manual_file_name']['name']));
	if (move_uploaded_file(htmlentities($_FILES['manual_file_name']['tmp_name']), $upload_file)) {
		return basename($_FILES['manual_file_name']['name']);
		header("Location: admin.php");
	} 	else {
			$upload_manual = '<p>something went wrong with file upload';
		}
	}
	if ($_SERVER['REQUEST_METHOD'] != 'POST')	{
	    $upload_manual = '<p>This will be the Upload Manual page</p>';
	}
	return $upload_manual;
}

function edit_logs()
{
    $edit_logs = "<p>this will be the page for editing logs</p>";
    return $edit_logs;
}

function edit_documents()
{
    $edit_documents = "<p>this will be the page for editing documents</p>";
 
    return $edit_documents;
}

function edit_manuals()
{
	$edit_manuals = '<p>This will be the page for editing manuals</p>';
	return $edit_manuals;
}

$navigation_links = createLinks($navigation_names, 'admin.php');
$navigation = createNavigation($navigation_links);
if($contrl == 'login') {
	$navigation = "";
}

//$title = 'Shaula Admin: '.ucwords(str_replace('-', ' ', $contrl));
$main_heading = 'Shaula Admin';
$sub_heading = ucwords(str_replace('-', ' ', $contrl));
$title = 'Shaula Admin: '.$sub_heading;
$function_name = str_replace('-', '_', $contrl);
$content = $function_name();
$template = include_once 'template.php';
echo $template;
