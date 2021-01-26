<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OauthUsers extends Seeder
{
	public function run()
	{
		$users_oauth = [
			'username' => 'khisanihza',
			'password'  => 'password',
			'first_name'  => 'Khisan',
			'last_name'  => 'Ihza',
			'email'  => 'khisan@gmail.com',
			'email_verified'  => '1',
			'scope'  => 'app',
		];

		$this->db->table('oauth_users')->insert($users_oauth);
	}
}
