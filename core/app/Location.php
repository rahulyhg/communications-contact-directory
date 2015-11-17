<?php

namespace App;

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
    // protected $fillable = ['item', 'item',];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  // protected $hidden = ['item', 'item',];

  /**
   * A location can belong to many directory entries.
   *
   * @var array
   */
  public function location()
  {
    return $this->belongsTo('App\Directory');
  }
}
