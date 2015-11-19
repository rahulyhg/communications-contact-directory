<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'location';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['title'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];

  /**
   * A location belongs to a directory entry
   *
   * @var array
   */
  public function location()
  {
    return $this->hasMany('App\Directory');
  }

  /**
   * Get the location ID for the current directory entry
   *
   * @var array
   */
  public function getCountEntriesAttribute()
  {
    return DB::table('directory')->where('location_id',$this->id)->count();
  }
}
