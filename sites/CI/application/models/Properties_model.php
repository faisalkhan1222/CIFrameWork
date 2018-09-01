<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Properties_model extends CI_Model{

public function retrieveProperties(){
	//echo"Before Query inside the model";
	$propertiesArray = array();
	$propertiesArray['names'] = array();
	$propertiesArray['description'] = array();
	$propertiesArray['city'] = array();
	$propertiesArray['zip'] = array();
	$propertiesArray['image'] = array();

	$query = $this->db->query("SELECT * FROM properties");
	//echo"After Query inside the model";

	foreach($query->result() as $property){
		$propertiesArray['names'][] = $property->name;
		$propertiesArray['description'][] = $property->description;
		$propertiesArray['city'][] = $property->city;
		$propertiesArray['zip'][] = $property->zip_code;
		$propertiesArray['image'][] = $property->image;
		//echo $propertiesArray['names'][0];
		//echo $property->name."</br>";
	}

return $propertiesArray;
}

}