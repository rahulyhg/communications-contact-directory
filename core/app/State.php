<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'state';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];

  /**
   * A state belongs to a location entry
   *
   * @var array
   */
  public function location()
  {
    return $this->hasMany('App\Location');
  }
}
