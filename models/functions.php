<?php
/*
 * models/functions.php
 */
 
function uploadManualFile() {
	$upload_dir = 'media/manuals/';
	$upload_file = $upload_dir . basename(htmlentities($_FILES['manual_file_name']['name']));
	if (move_uploaded_file(htmlentities($_FILES['manual_file_name']['tmp_name']), $upload_file)) {
		return basename($_FILES['manual_file_name']['name']);
	} 	else {
			return "<p>something went wrong with file upload";
		}
}