<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    // truncate the users table
    DB::table('department')->truncate();

    $departments = array(
      "CAO",
      "Public Works",
      "LUT",
      "HHS",
      "ITS",
      "Parks and Recreation"
    );

    // create the departments
    foreach ($departments AS $department) {
      DB::table('department')->insert(['title' => $department]);
    }
  }
}
