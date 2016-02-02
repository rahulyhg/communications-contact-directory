<?php

namespace App;

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
    public function directory()
    {
        return $this->belongsToMany('App\Directory');
    }
}
