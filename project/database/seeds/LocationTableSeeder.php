<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    // truncate the users table
    DB::table('location')->truncate();

    $locations = array(
      "Washington County",
      "Multinomah County",
      "Clackamas County",
      "City of Hillsboro"
    );

    // create the locations
    foreach ($locations AS $location) {
      DB::table('location')->insert([
          'title' => $location,
          'street_address_1'=>'',
          'street_address_2'=>'',
          'city'=>'',
          'state_id'=>38, // Oregon
          'zipcode'=>'',
          'url'=>'',
          'note'=>''
      ]);
    }
  }
}
