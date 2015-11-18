<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'department';

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
   * A department belongs to a directory entry
   *
   * @var array
   */
  public function directory()
  {
    return $this->hasMany('App\Directory');
  }
}
