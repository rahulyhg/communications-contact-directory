<?php

use Illuminate\Database\Seeder;

class DirectoryTableSeeder extends Seeder
{
  // the $user_count is the number of directory users the seeder will create
  private $user_count = 25;

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // truncate the directory table
    // DB::table('directory')->truncate();

    for ($x = 1; $x <= $this->user_count; $x++) {
      DB::table('directory')->insert([
        'first_name' => str_random(8),
        'last_name' => str_random(12),
        'email' => str_random(8).'@email.com',
        'location_id' => $this->get_random_list_item('location'),
        'department_id' => $this->get_random_list_item('department'),
        'primary_phone' => '503-'.rand(100,999).'-'.rand(1000,9999),
        'secondary_phone' => '503-'.rand(100,999).'-'.rand(1000,9999),
        'created_at' => date("Y-m-d"),
        'updated_at' => date("Y-m-d")
      ]);
    }
  }


  /**
   * Picks a random item from a selected array - category is required
   *
   * @return string
   */
  public function get_random_list_item($category)
  {
    if($category)
    {
      switch ($category) {
        case "location":
          $list = array(1,2,3,4);
          break;
        case "department":
          $list = array(1,2,3,4,5,6);
          break;
        default:
          $list = array();
      }

      return $list[array_rand($list)];
    }
  }
}
