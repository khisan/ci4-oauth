<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OauthClients extends Seeder
{
	public function run()
	{
		$client_data = [
			'client_id' => 'A01',
			'client_secret'  => 'test_secret',
			'grant_types'  => 'password',
			'scope'  => 'app',
		];

		$this->db->table('oauth_clients')->insert($client_data);
	}
}
