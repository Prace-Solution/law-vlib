<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    protected $table = "levels";
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'number', 'slug'
    ];

    
}
