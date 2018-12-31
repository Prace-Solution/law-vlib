<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //
    protected $table = "resources";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'available_in', 'slug', 'description', 'local_path', 'url', 'course_id'
    ];
}
