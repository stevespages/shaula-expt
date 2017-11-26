<?php
/* 
 * models/Table.class.php
 *
 * This class should be a cross application parent class for providing a useful PDO tool for interacting with databases.
 *
 *	Classes extending this class should be made for application specific PDO transactions with databases.
 *
 * One extension of this class should be made for each (major?) table in the database.
 * 
 * The class requires a PDO object as an argument ($db) when instantiating.
 *
 * The constructor function assigns the PDO object to the protected property, Table->dbObj referred to as $this->dbObj in the definition.
 */
 
class Table {
  
    protected $db;
     
    public function __construct ( $db ) {
        $this->db = $db;
    }
     
    protected function makeStatement ($sql) {
        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement;
    }

}