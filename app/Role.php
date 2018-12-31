<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


    protected $table = 'roles';

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'name', 'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      
    ];

    
    public function users()
    {
        $this->hasMany('App\User');
    }
}
