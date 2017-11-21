<?php
/*
 * models/Manuals_Table.class.php
 *
 * This class extends Table. It is for the shaula.manuals table
 *
 */
 
include_once "models/Table.class.php";


class ManualsTable extends Table{


   public function getAllManuals () {

   $sql = "SELECT * From manuals";

	$statement = $this->makeStatement($sql);
	
   return $statement;

	}


	public function saveManuals ($manual_name, $manual_file_name, $manual_description)	{
		
		$sql = "INSERT INTO manuals (manual_name, manual_file_name, manual_description) VALUES ('$manual_name', '$manual_file_name', '$manual_description')";
		
		$this->makeStatement($sql);
	
	}

	
}
 