<?php
/*
 *views/functions.php
 */
  
function showLogOutput($statement, $editable) {
	
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