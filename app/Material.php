<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    protected $table = "materials";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'available_in','slug', 'description',  'local_path', 'url' ,'course_id'
    ];

}
