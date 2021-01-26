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
			'password'  => '$2y$10$kL4Oe307KlGqeHY.G9b1U.vi0iwIfeSD5OmPTZova250TqpcgW8Au',
			'scope'  => 'app',
		];

		$this->db->table('users')->insert($users);
	}
}
