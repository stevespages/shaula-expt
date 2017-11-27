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

/*
	public function saveLog ($place_from, $place_to, $on_board, $depart, $arrive, $distance, $description, $image_1, $image_2, $image_3, $image_4, $image_5, $image_description_1, $image_description_2, $image_description_3, $image_description_4, $image_description_5)	{
		
		$sql = "INSERT INTO log (place_from, place_to, on_board, depart, arrive, distance, description, image_1, image_2, image_3, image_4, image_5, image_description_1, image_description_2, image_description_3, image_description_4, image_description_5) VALUES ('$place_from', '$place_to', '$on_board', '$depart', '$arrive', '$distance', '$description', '$image_1', '$image_2', '$image_3', '$image_4', '$image_5', '$image_description_1', '$image_description_2', '$image_description_3', '$image_description_4', '$image_description_5')";
		
		$this->makeStatement($sql);
	
	}

	
		public function saveLog ($place_from, $place_to, $on_board, $depart)	{
		
		$sql = "INSERT INTO log (place_from, place_to, on_board, depart) VALUES ('$place_from', '$place_to', '$on_board', '$depart')";
		
		$this->makeStatement($sql);
	
	}
*/	


//INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);
	
	public function saveLog ($posted_array)	{
		
		$fields = "";
		$values = "'";
		foreach($posted_array as $key => $value) {
			$fields .= $key.", ";
			$values .= $value."', '";
		}
		
		//get rid of the trailing comma
		$fields = substr($fields, 0, -2);
		$values = substr($values, 0, -3);
		
		$sql = "INSERT INTO log ($fields) VALUES ($values)";
		
		$this->makeStatement($sql);
		
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