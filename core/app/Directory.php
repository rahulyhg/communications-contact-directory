<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'directory';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'location',
    'department',
    'primary_phone',
    'secondary_phone',
    'website',
    'twitter',
    'facebook',
    'linkedin',
    'note'
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];

  /**
   * An entry can have a department
   *
   * @var array
   */
  public function department()
  {
    return $this->hasOne('App\Department');
  }

  /**
   * An entry can have a location
   *
   * @var array
   */
  public function location()
  {
    return $this->hasOne('App\Location');
  }
}
