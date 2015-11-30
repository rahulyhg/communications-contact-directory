<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // truncate the users table
    DB::table('users')->truncate();

    // create the test admin user
    DB::table('users')->insert([
      'first_name' => 'Admin',
      'last_name' => 'User',
      'status' => 1,
      'admin' => 1,
      'email' => 'admin@localhost.com',
      'password' => bcrypt('password'),
    ]);
  }
}
