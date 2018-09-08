<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Properties_model extends CI_Model{

public function retrieveProperties(){
	$propertiesArray = array();
	$propertiesArray['id'] = array();
	$propertiesArray['names'] = array();
	$propertiesArray['description'] = array();
	$propertiesArray['city'] = array();
	$propertiesArray['zip'] = array();
	$propertiesArray['image'] = array();

	$query = $this->db->query("SELECT * FROM properties");

	foreach($query->result() as $property){
		$propertiesArray['id'][] = $property->id;
		$propertiesArray['names'][] = $property->name;
		$propertiesArray['description'][] = $property->description;
		$propertiesArray['city'][] = $property->city;
		$propertiesArray['zip'][] = $property->zip_code;
		$propertiesArray['image'][] = $property->image;
	}

return $propertiesArray;
}

}