<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Notifications\StudentResetPasswordNotification;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_number', 'fullname', 'email', 'password', 'program_id','department_id','level_id', 'semester_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = "students";
    // The authentication guard for students
    protected $guard = 'student';


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudentResetPasswordNotification($token));
    }
    public function level(){
       return  $this->belongsTo("App\Level",'level_id','id');
    }
}

