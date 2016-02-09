<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Migrate extends CI_Controller{
	
	public $message;
	
	public function __construct(){
		parent::__construct();
		$this->response = array();
	}
	
	public function index(){
		
		echo  json_encode(array("message"=>""));
		
	}
	
	public function version($version = 0){
		
		if(ENVIRONMENT == "development"){
			$this->load->library("migration");
			if(!$this->migration->version($version)){
				show_error($this->migration->error_string());
			}else{
				$this->response['message'] = "Database structure is now switched to [ version " .$version." ]";
				echo json_encode($this->response);
			}
		}else{
			show_error("You are not authorize to visit this page.");
		}
		
	}
	
}

?>