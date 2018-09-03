<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatedatabase extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function updatedata()
	{
		$this->load->view('insertdata_form');
		if(isset($_GET["name"]) && isset($_GET["description"])){
			$name = $_GET["name"];
			$desc = $_GET["description"];
			//echo "New Name: ".."</br>";
			//echo "New Description: ".."</br>";
			$this->load->model('UpdateData_model', '', TRUE);
			$this->UpdateData_model->insertData($name,$desc);

			$this->load->model('Properties_model','',TRUE);
			$names = $this->Properties_model->retrieveProperties();
			$this->load->view('properties_listing',$names);
		}	
	}
}


