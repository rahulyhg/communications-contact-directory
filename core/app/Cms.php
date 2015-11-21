<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'cms';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['title', 'tag', 'content'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
}
