<?php
Class Service {

private $db;

public function __construct()
{
	$this->Connect();
}

private function Connect()
{
	try {
    $this->db = new PDO('mysql:host=localhost;dbname=onemliyerler;charset=utf8', "root", "");
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
}


public function Categories()
{
	$query = $this->db->prepare("SELECT * FROM kategori");
	$query->execute();

	if($query){
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
}



}

?>