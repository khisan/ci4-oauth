<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
	public function run()
	{
		$users = [
			'firstname'  => 'Khisan',
			'lastname'  => 'Ihza',
			'email'  => 'khisan@gmail.com',
			'password'  => 'password',
			'scope'  => 'app',
		];

		$this->db->table('users')->insert($users);
	}
}
