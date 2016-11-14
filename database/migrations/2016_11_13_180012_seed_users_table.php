<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		$now = date('Y-m-d H:i:s');
		
        // create all of our users (all jedis of course...)
		DB::table('users')->insert(
		array(
				array(
						'name' => 'Luke Skywalker',
						'email' => 'luke@jedirebels.com',
						'level'  => 'Jedi in training',
						'is_lightsaber_on' => '1',
						'created_at' => $now,
						'updated_at' => $now,
				),
				array(
						'name' => 'Yoda',
						'email' => 'yoda@jedicouncil.org',
						'level'  => 'Jedi Master',
						'is_lightsaber_on' => '1',
						'created_at' => $now,
						'updated_at' => $now,
				),
				array(
						'name' => 'Mace Wondu',
						'email' => 'mace@jedicouncil.org',
						'level'  => 'Jedi Master',
						'is_lightsaber_on' => '0',
						'created_at' => $now,
                'updated_at' => $now,
				),
				array(
						'name' => 'Anakin Skywalkder',
						'email' => 'vader@theevilempire.org',
						'level'  => 'Sith Lord',
						'is_lightsaber_on' => '0',
						'created_at' => $now,
						'updated_at' => $now,
				),
				array(
						'name' => 'Obi Wan Kenobi',
						'email' => 'ken@obiwancan.com',
						'level'  => 'Master jedi',
						'is_lightsaber_on' => '1',
						'created_at' => $now,
						'updated_at' => $now,
				),
		));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // delete all of our created users
		DB::table('users')->delete();
    }
}
