<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OauthScopes extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'scope'	=> [
				'type'           		=> 'VARCHAR',
				'constraint'     		=> '80',
			],
			'is_default'    => [
				'type'           => 'BOOLEAN',
				'null'					 => 'true',
			],
		]);

		$this->forge->addKey('scope', TRUE);

		$this->forge->createTable('oauth_scopes');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('oauth_scopes');
	}
}
