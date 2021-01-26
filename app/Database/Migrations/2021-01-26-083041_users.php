<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'           		=> 'INTEGER',
				'constraint'     		=> '11',
				'auto_increment' 		=> true,
			],
			'firstname'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'lastname'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'email'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'password'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'scope'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'created_at DATETIME DEFAULT current_timestamp'
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
