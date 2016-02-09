<?php 

defined("BASEPATH") OR exit("No direct script access allowed.");

class Migration_Clean_db extends CI_Migration {
	
	public function up(){
		
	}
	
	public function down(){
		$this->dbforge->drop_table('users',TRUE);
		$this->dbforge->drop_table('projects',TRUE);
		$this->dbforge->drop_table('tests',TRUE);
	}
	
}


?>