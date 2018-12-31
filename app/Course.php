<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table = "Courses";
    //

    //'code' ,'title','slug','semester_id','level_id','program_id','department_id',
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'title', 'slug', 'semester_id', 'level_id', 'program_id', 'department_id'
    ];
}
