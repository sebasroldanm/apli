<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Role();
		$admin->name = 'admin';
		$admin->display_name = 'User Administrator'; // optional
		$admin->description = 'User is allowed to manage all resources'; // optional
		$admin->save();

		$owner = new \App\Role();
		$owner->name = 'owner';
		$owner->display_name = 'Owner'; // optional
		$owner->description = 'User is allowed to manage everything resources'; // optional
		$owner->save();

		//AQUI SE DECLARA EL RESTO


		$adminUser = \App\User::create([
		'name' => 'admin',
		'email' => 'admin@mail.com',
		'password' => \Illuminate\Support\Facades\Hash::make('secret')
		]);

		$adminUser->save();

		$ownerUser = \App\User::create([
		'name' => 'owner',
		'email' => 'owner@mail.com',
		'password' => \Illuminate\Support\Facades\Hash::make('secret')
		]);
    }
}
