<?php

class Position_Model
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

	
    
	public function addPosition($name, $description)
    {

        $sql = "INSERT INTO position (name, description) VALUES (:name, :description)";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':description' => $description);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function getAllPosition()
    {
        $sql = "SELECT * FROM position";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }
	
	public function updatePosition($name, $description)
    {
        $sql = "UPDATE position SET name = :name, description = :description WHERE id = :position_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':description' => $description, ':position_id' => $position_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
	
	public function getPosition($position_id)
    {
        $sql = "SELECT * FROM position WHERE id = :position_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':position_id' => $position_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }
	
	public function getJsonAllPosition()
    {
        $sql = "SELECT * FROM position";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        $data = array($query->fetchAll());
		
		$results = array(
			"sEcho" => 1,
			"iTotalRecords" => count($data),
			"iTotalDisplayRecords" => count($data),
			"aaData"=>$data
		);
		
        echo json_encode($results);
    }



}
