<?php
defined("BASEPATH") OR exit('No direct script access allowed');


class Tests extends MX_Controller {
	
	public $classname;
	public $methodname;
	public $data;
	
	public function __construct(){
		parent::__construct();
		$this->classname = ucfirst($this->router->fetch_class());
		$this->methodname = ucfirst($this->router->fetch_method());
		if($this->methodname == "" || $this->methodname == "Index"){
			$title = $this->classname;
		}else{
			$title = $this->classname . " | " . $this->methodname;
		}
		$this->data['title'] = $title;
	}
	
	public function index(){
		$this->load->view("test_index", $this->data);
	}
	
	public function add(){
		$this->load->view("test_add", $this->data);
	}
	
}


?>