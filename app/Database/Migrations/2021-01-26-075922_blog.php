<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blog extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'post_id'	=> [
				'type'           		=> 'INTEGER',
				'constraint'     		=> '11',
				'auto_increment' 		=> true,
			],
			'post_title'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'post_description'    => [
				'type'           => 'TEXT',
			],
			'post_created_at DATETIME DEFAULT current_timestamp'
		]);

		$this->forge->addKey('post_id', true);

		$this->forge->createTable('blog');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('blog');
	}
}
