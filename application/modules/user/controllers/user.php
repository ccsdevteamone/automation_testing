<?php

class User extends MX_Controller {
	
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
		if(!isset($_SESSION['auth'])){
			$this->data['angular_module'] = "user-login-app";
			$this->load->view( "login", $this->data );
		}else{
			$this->data['angular_module'] = "logout-app";
			$this->load->view('logout', $this->data);
		}
	}
	
	public function register(){
		
	}
	
	public function logout(){
		if(isset($_SESSION['auth'])){
			$this->data['angular_module'] = "logout-app";
			$this->load->view('logout', $this->data);
		}else{
			header("location:".base_url("user"));
		}
	}
	
}


?>