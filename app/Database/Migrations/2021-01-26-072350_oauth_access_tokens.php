<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OauthAccessTokens extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'access_token'  => [
				'type'           => 'VARCHAR',
				'constraint'     => '40',
			],
			'client_id'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '80',
			],
			'user_id'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '80',
				'null'					 => 'true',
			],
			'expires'    => [
				'type'           => 'TIMESTAMP',
			],
			'scope'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '4000',
				'null'					 => 'true',
			],
		]);

		$this->forge->addKey('access_token', TRUE);

		$this->forge->createTable('oauth_access_tokens');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('oauth_access_tokens');
	}
}
