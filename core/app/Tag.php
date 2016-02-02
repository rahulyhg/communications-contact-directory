<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'tag';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['name'];

    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
    protected $hidden = [];

    /**
    * Get the directory entries associated with a given tag
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function directories()
    {
        return $this->belongsToMany('App\Directory');
    }

    /**
     * Get the location ID for the current directory entry
     *
     * @var array
     */
    public function getCountDirectoriesAttribute()
    {
      return DB::table('directory_tag')->where('tag_id',$this->id)->count();
    }
}
