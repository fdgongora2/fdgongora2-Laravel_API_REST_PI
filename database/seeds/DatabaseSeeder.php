<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Model::unguard();

		$this->call('FabricanteSeeder');
	   	$this->call('AvionSeeder');
		$this->call('UserTableSeeder');
    }
}
