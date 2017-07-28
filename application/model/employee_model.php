<?php

class Employee_model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

	
    public function addEmployee($first_name, $middle_name, $last_name, $position_id)
    {

        $sql = "INSERT INTO employee (first_name, middle_name, last_name, position_id) VALUES (:first_name, :middle_name, :last_name, :position_id)";
        $query = $this->db->prepare($sql);
        $parameters = array(':first_name' => $first_name, ':middle_name' => $middle_name, ':last_name' => $last_name, ':position_id' => $position_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }








}
