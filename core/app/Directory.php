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
        'location_id',
        'department_id',
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
        return $this->belongsTo('App\Department', 'department_id');
    }

    /**
    * An entry can have a location
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id');
    }

    /**
    * Get the tags associated with a given directory entry
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
    * Get a list of tag ids associated with the current directory
    *
    * @return array
    */
    public function getSelectedTagsAttribute()
    {
        return $this->tags->lists('id')->toArray();
    }
}
