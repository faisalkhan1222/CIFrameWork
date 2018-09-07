<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UpdateData_model extends CI_Model{

public function insertData($name, $description, $id){
	echo"The id is". $id;
		//echo "inside insertData method";
		echo "Inserting New Name= ".$name."</br>";
		echo "Inserting New Description= ".$description."</br>";

		$insertQuery = $this->db->query("UPDATE properties 
			SET name = '$name', description = '$description'
		WHERE properties.id=$id;");
		//echo"Before Query inside the model";
		//echo $propertiesArray['names'][0];
		//echo $property->name."</br>";
	}
}

