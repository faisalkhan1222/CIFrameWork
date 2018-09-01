<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Properties_model extends CI_Model{

public function retrieveProperties(){
	//echo"Before Query inside the model";
	$propertiesArray = array();
	$propertiesArray['names'] = array();
	$query = $this->db->query("SELECT * FROM properties");
	//echo"After Query inside the model";

	foreach($query->result() as $property){
		$propertiesArray['names'][] = $property->name;
		//echo $propertiesArray['names'][0];

	//		echo $property->name."</br>";
	}

return $propertiesArray;
}

}