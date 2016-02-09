<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'user_id' => array(
							'type' => 'INT',
							'constraint' => 11,
							'unsigned' => TRUE,
							'auto_increment' => TRUE
                        ),
                        'username' => array(
							'type' => 'VARCHAR',
							'constraint' => '255',
                        ),
						'password' => array(
							'type' => 'VARCHAR',
							'constraint' => '255',
						),
						'fname' => array(
							'type' => 'VARCHAR',
							'constraint' => '255',
						),
						'lname' => array(
							'type' => 'VARCHAR',
							'constraint' => '255',
						),
						'email' => array(
							'type' => 'VARCHAR',
							'constraint' => '255',
						),
						'last_login' => array(
							'type' => 'DATETIME'
						),
						'date_registered' => array(
							'type' => 'DATETIME'
						),
						'is_active' => array(
							'type' => 'INT',
							'constraint' => 5,
							'default' => 0
						)
                ));
                $this->dbforge->add_key('user_id', TRUE);
                $this->dbforge->create_table('users', TRUE);
        }

        public function down()
        {
                $this->dbforge->drop_table('projects');
        }
}
?>