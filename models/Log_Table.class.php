<?php
/*
 * models/Log_Table.class.php
 *
 * This class extends Table. It is for the shaula.log table.
 *
 */

include_once "models/Table.class.php";


class LogTable extends Table{


   public function getAllLogs () {
   	
   $sql = "SELECT * FROM log";

	$statement = $this->makeStatement($sql);
	
   return $statement;
   
	}


	public function saveLog ($place_from, $place_to, $on_board, $depart, $arrive, $distance, $description, $image_1, $image_2, $image_3, $image_4, $image_5, $image_description_1, $image_description_2, $image_description_3, $image_description_4, $image_description_5)	{
		
		$sql = "INSERT INTO log (place_from, place_to, on_board, depart, arrive, distance, description, image_1, image_2, image_3, image_4, image_5, image_description_1, image_description_2, image_description_3, image_description_4, image_description_5) VALUES ('$place_from', '$place_to', '$on_board', '$depart', '$arrive', '$distance', '$description', '$image_1', '$image_2', '$image_3', '$image_4', '$image_5', '$image_description_1', '$image_description_2', '$image_description_3', '$image_description_4', '$image_description_5')";
		
		$this->makeStatement($sql);
		
		// for debugging. Remove it..
		return $sql;
	
	}


	public function getLogToEdit($id) {

		$sql = "SELECT * FROM log WHERE id = $id";
		
		$statement = $this->makeStatement($sql);
		
		return $statement;
	
	}


	public function updateLog($id, $place_from, $place_to, $on_board, $depart, $arrive, $distance, $description, $image_1, $image_2, $image_3, $image_4, $image_5, $image_description_1, $image_description_2, $image_description_3, $image_description_4, $image_description_5) {
		
		$sql = "UPDATE log SET place_from = '$place_from', place_to = '$place_to', on_board = '$on_board', depart = '$depart', arrive = '$arrive', distance = '$distance', description = '$description', image_1 = '$image_1', image_2 = '$image_2', image_3 = '$image_3', image_4 = '$image_4', image_5 = '$image_5', image_description_1 = '$image_description_1', image_description_2 = '$image_description_2', image_description_3 = '$image_description_3', image_description_4 = '$image_description_4', image_description_5 = '$image_description_5' WHERE log.id = $id";
		
		$statement = $this->makeStatement($sql);

	}

	
}