<?php

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Eloquent::unguard();
				DB::table('posts')->delete();
				DB::table('users')->delete();

        $this->call('UserTableSeeder');
				$this->call('PostTableSeeder');
    }
}
