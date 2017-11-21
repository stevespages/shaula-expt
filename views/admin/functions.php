<?php
/*
 * views/admin/functions.php
 */

function showLogForm()	{
	$log_form = "<form method='post' enctype='multipart/form-data' action='admin.php?page=upload-log'>
			<p><label>Place from <input type='text' name='place_from'></label></p>
			<p><label>Place to <input type='text' name='place_to'></label></p>
			<p><label>on_board <input type='text' name='on_board'></label></p>
			<p><label>depart <input type='text' name='depart'></label></p>
			<p><label>arrive <input type='text' name='arrive'></label></p>
			<p><label>distance to <input type='text' name='distance'></label></p>
			<p><label>description <input type='text' name='description'></label></p>
			<p><label>image_1 <input type='file' name='image_1'></label></p>
			<p><label>image_2 <input type='file' name='image_2'></label></p>
			<p><label>image_3 <input type='file' name='image_3'></label></p>
			<p><label>image_4 <input type='file' name='image_4'></label></p>
			<p><label>image_5 <input type='file' name='image_5'></label></p>
			<p><label>image_description_1 <input type='text' name='image_description_1'></label></p>
			<p><label>image_description_2 <input type='text' name='image_description_2'></label></p>
			<p><label>image_description_3 <input type='text' name='image_description_3'></label></p>
			<p><label>image_description_4 <input type='text' name='image_description_4'></label></p>
			<p><label>image_description_5 <input type='text' name='image_description_5'></label></p>
			
			<p><input type='submit'><p>
			</form>";
	return $log_form;
}

function showEditLogForm($row)	{
	$edit_log_form = "<form method='post' enctype='multipart/form-data' action='admin.php?page=edit-logs&edit-id=$row->id'>
			<p><label>Place from <input type='text' name='place_from' value='$row->place_from'></label></p>
			<p><label>Place to <input type='text' name='place_to' value='$row->place_to'></label></p>
			<p><label>On Board <input type='text' name='on_board' value='$row->on_board'></label></p>
			<p><label>Depart <input type='text' name='depart' value='$row->depart'></label></p>
			<p><label>Arrive <input type='text' name='arrive' value='$row->arrive'></label></p>
			<p><label>Distance <input type='text' name='distance' value='$row->distance'></label></p>
			<p><label>Description <input type='text' name='description' value='$row->description'></label></p>
			<p><label>Image 1 <input type='file' name='image_1' value='$row->image_1'></label></p>
			<p><label>Image 2 <input type='file' name='image_2' value='$row->image_2'></label></p>
			<p><label>Image 3 <input type='file' name='image_3' value='$row->image_3'></label></p>
			<p><label>Image 4 <input type='file' name='image_4' value='$row->image_4'></label></p>
			<p><label>Image 5 <input type='file' name='image_5' value='$row->image_5'></label></p>
			<p><label>Image description 1 <input type='text' name='image_description_1' value='$row->image_description_1'></label></p>
			<p><label>Image description 2 <input type='text' name='image_description_2' value='$row->image_description_2'></label></p>
			<p><label>Image description 3 <input type='text' name='image_description_3' value='$row->image_description_3'></label></p>
			<p><label>Image description 4 <input type='text' name='image_description_4' value='$row->image_description_4'></label></p>
			<p><label>Image description 5 <input type='text' name='image_description_5' value='$row->image_description_5'></label></p>
			
			<p><input type='submit'><p>
			</form>";
	return $edit_log_form;
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