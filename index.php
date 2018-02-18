<?php

include_once 'index-admin.php';

// MODEL
$navigation_names = array("Passage Log", "Contact", "Another Page");

//VIEW
function showLogOutput($statement, $editable)
{
	
	$log_output = "<div id='log'><hr>";

	while ( $row = $statement->fetchObject() ) {
	
		$log_output .= "<h2>".$row->place_from." to ".$row->place_to."</h2>";
		$log_output .= "<p><strong>On board:</strong> ".$row->on_board."</p>";
		$log_output .= "<p><strong>Depart:</strong> ".$row->depart." <strong>Arrive:</strong> ".$row->arrive. "</p>";
		$log_output .= "<p><strong>Distance:</strong> ".$row->distance." nautical miles</p>";
		$log_output .= "<p>".$row->description."</p>";
	/*
			$x=$row->image_1;
			if($x!="") {
				$log_output .= "<a href='media/logs/".$row['image_1']."'><figure><img id='' src='media/logs/small-".$row['image_1']."' height='200' /></a>
						<figcaption>".$row['image_description_1']."</figcaption></figure>";
				}
	*/
	
		If($row->image_1 != "")	{
			$log_output .= "<a href='media/logs/".$row->image_1."'><figure><img src='media/logs/small-".$row->image_1." height='200' /></a><figcaption>".$row->image_description_1."</figcaption></figure>";
			}
			
			If($row->image_2 != "")	{
			$log_output .= "<a href='media/logs/".$row->image_2."'><figure><img src='media/logs/small-".$row->image_2." height='200' /></a><figcaption>".$row->image_description_2."</figcaption></figure>";
			}
			
			If($row->image_3 != "")	{
			$log_output .= "<a href='media/logs/".$row->image_3."'><figure><img src='media/logs/small-".$row->image_3." height='200' /></a><figcaption>".$row->image_description_3."</figcaption></figure>";
			}
			
			If($row->image_4 != "")	{
			$log_output .= "<a href='media/logs/".$row->image_4."'><figure><img src='media/logs/small-".$row->image_4." height='200' /></a><figcaption>".$row->image_description_4."</figcaption></figure>"; }
			
			If($row->image_5 != "")	{
			$log_output .= "<a href='media/logs/".$row->image_5."'><figure><img src='media/logs/small-".$row->image_5." height='200' /></a><figcaption>".$row->image_description_5."</figcaption></figure>";
			}

	
		if($editable) {
			$log_output .= "<p id='edit'><a href='admin.php?page=edit-logs&id=".$row->id."'>Edit?</a></p>";
		}
		$log_output .= "<hr>";
	}
	
	$log_output .= "</div>";
	
	return $log_output;
	
}

function showLogForm($action, $log_form_array)
{
	$log_form = "<form method='post' enctype='multipart/form-data' action=".$action.">
			<p><label>Place from <input type='text' name='place_from' value='".$log_form_array['place_from']['input_value']."'></label></p>
			<p><label>Place to <input type='text' name='place_to' value='".$log_form_array['place_to']['input_value']."'></label></p>
			<p><label>On Board <input type='text' name='on_board' value='".$log_form_array['on_board']['input_value']."'></label></p>
			<p><label>Depart <input type='text' name='depart' value='".$log_form_array['depart']['input_value']."'></label></p>
			<p><input type='submit'><p>
			</form>";
	return $log_form;
}

function showManualForm()
{
$manual_form = "<form method='post' enctype='multipart/form-data' action='admin.php?page=upload-manual'>
			<p><label>Name of manual <input type='text' name='manual_name'></label></p>
			<p><label>Upload manual <input type='file' name='manual_file_name'></label></p>
			<p><label>Description of manual <textarea name='manual_description'></textarea></label></p>
			<p><input type='submit'></p>
			</form>";
	return $manual_form;
}

function showManualsOutput($statement)
{
	$manuals_output = "<div id='manuals'><ul>";
	while ( $row = $statement->fetchObject() )	{
		$manuals_output .= "<li><strong><a href ='media/manuals/".$row->manual_file_name."'>".$row->manual_name.". </a></strong>".$row->manual_description."</li>";		
		}
	$manuals_output .= "</ul></div>";
	return $manuals_output;
}

// CONTROLLER

function home()
{
    $home = '<h3>Home Page</h3><p>this will be the home page</p>
 			<p>As of today Tu 21 Nov 2017. I am tracking this project with git. I have a mirror of the project at GitHub</p>
 			<p>As of today Mo 12 Feb 2018 I have just got back to it....';
    return $home;
}

function passage_log()
{
	$passage_log = 'This will show the details of passages I have made including photos';
	return $passage_log;
}

$contrl = getControllerName();
$navigation_links = createLinks($navigation_names);
$navigation = createNavigation($navigation_links);
$title = ucwords($contrl);
$title = str_replace('-', ' ', $title);
$function_name = str_replace('-', '_', $contrl);
$content = $function_name();

// TEMPLATE
$template = '
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shaula: '.$title.'</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
<div>'.$navigation.'
<div class="steve-nav-bar"></div>
<h1>Shaula</h1>
<div class="row">
  <div class="col-sm">'.$content.'</div>
</div>

<div class="row">
  <div class="col-sm"></div>
</div>

</div>

</body>
</html>';

echo $template;
