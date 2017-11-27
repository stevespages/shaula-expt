<?php
/*
 * views/admin/functions.php
 */

/*
foreach ($rows as $row) {
    echo $row['id'];
    echo $row['firstname'];
    echo $row['lastname'];
}
*/



/* need to think about this a bit more...
function showLogForm($action, $log_fields_array) {
	$log_form = "<form method='post' enctype='multipart/form-data' action=".$action.">";
	foreach($log_fields_array as $key => $value) {
		$log_form .= "<p><label>".$value['form_label']."<input type='text' name='".$field."' value='".$field['input_value']
		
	}
}
*/

// I got rid of showEditLogForm() as should use showLogForm() for both original log upload and for editing logs

function showLogForm($action, $log_form_array)	{
	$log_form = "<form method='post' enctype='multipart/form-data' action=".$action.">
			<p><label>Place from <input type='text' name='place_from' value='".$log_form_array['place_from']['input_value']."'></label></p>
			<p><label>Place to <input type='text' name='place_to' value='".$log_form_array['place_to']['input_value']."'></label></p>
			<p><label>On Board <input type='text' name='on_board' value='".$log_form_array['on_board']['input_value']."'></label></p>
			<p><label>Depart <input type='text' name='depart' value='".$log_form_array['depart']['input_value']."'></label></p>
			<p><input type='submit'><p>
			</form>";
	return $log_form;
}

function showManualForm()	{
$manual_form = "<form method='post' enctype='multipart/form-data' action='admin.php?page=upload-manual'>
			<p><label>Name of manual <input type='text' name='manual_name'></label></p>
			<p><label>Upload manual <input type='file' name='manual_file_name'></label></p>
			<p><label>Description of manual <textarea name='manual_description'></textarea></label></p>
			<p><input type='submit'></p>
			</form>";
	return $manual_form;
}

function showManualsOutput($statement) {
	$manuals_output = "<div id='manuals'><ul>";
	while ( $row = $statement->fetchObject() )	{
		$manuals_output .= "<li><strong><a href ='media/manuals/".$row->manual_file_name."'>".$row->manual_name.". </a></strong>".$row->manual_description."</li>";		
		}
	$manuals_output .= "</ul></div>";
	return $manuals_output;
}