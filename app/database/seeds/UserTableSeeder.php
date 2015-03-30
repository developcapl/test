<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			User::create([
				'email' =>"adarsha.cr@gmail.com"

			]);
			User::create([
				'email' =>"Ganesha.cr@gmail.com"

			]);
		}
	}

}