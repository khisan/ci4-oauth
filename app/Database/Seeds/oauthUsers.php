<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OauthUsers extends Seeder
{
	public function run()
	{
		$users_oauth = [
			'username' => 'khisanihza',
			'password'  => '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8',
			'first_name'  => 'Khisan',
			'last_name'  => 'Ihza',
			'email'  => 'khisan@gmail.com',
			'email_verified'  => '1',
			'scope'  => 'app',
		];

		$this->db->table('oauth_users')->insert($users_oauth);
	}
}
