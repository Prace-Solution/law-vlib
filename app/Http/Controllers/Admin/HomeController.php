<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Resource;
use App\Material;
use App\Lecturer;
use App\Course;
use App\Program;
use App\Status;
use App\Semester;
use App\Level;
use App\Student;
use App\Department;
use App\Permission;
use App\Role;
use App\Admin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.home',
        [

        'admins_count'=> Admin::count(),
        'students_count'=> Student::count() ,
        'resources_count'  => Resource::count(),
         'materials_count'  => Material::count(),
        'lecturers_count'  => Lecturer::count(),
        'courses_count'  => Course::count(),
        'programs_count'  => Program::count(),
        'statuses_count'  => Status::count(),
        'semesters_count' => Semester::count(),
        'levels_count' => Level::count(),
        'undergrad_students_count' => Student::where('program_id', '=', '1')->count(),
        'post_first_degree_students_count' => Student::where('program_id', '=', '2')->count(),
        'courses' => Course::all(),
        'students' => Student::all(),
        'resources' => Resource::all(),
        'lecturers' => Lecturer::all(),
        'programs' => Program::all(),
        'semesters' => Semester::all(),
        'levels' => Level::all(),
        'departments' => Department::all(),
        'statuses' => Status::all(),
        'materials' => Material::all(),
        'permissions' => Permission::all(),
        'roles' => Role::all(),
        'undergrad_students' => Student::all()->where('program_id', '=', '1'),
        'post_first_grad_students' => Student::all()->where('program_id', '=', '2'),
    ]);
    }

    public function show($nav)
    { 
        return view('admin.' . $nav,
        [

        'admins_count'=> Admin::count(),
        'students_count'=> Student::count() ,
        'resources_count'  => Resource::count(),
         'materials_count'  => Material::count(),
        'lecturers_count'  => Lecturer::count(),
        'courses_count'  => Course::count(),
        'programs_count'  => Program::count(),
        'statuses_count'  => Status::count(),
        'semesters_count' => Semester::count(),
        'levels_count' => Level::count(),
        'undergrad_students_count' => Student::where('program_id', '=', '1')->count(),
        'post_first_degree_students_count' => Student::where('program_id', '=', '2')->count(),
        'courses' => Course::all(),
        'students' => Student::all(),
        'resources' => Resource::all(),
        'lecturers' => Lecturer::all(),
        'programs' => Program::all(),
        'semesters' => Semester::all(),
        'levels' => Level::all(),
        'departments' => Department::all(),
        'statuses' => Status::all(),
        'materials' => Material::all(),
        'permissions' => Permission::all(),
        'roles' => Role::all(),
        'undergrad_students' => Student::all()->where('program_id', '=', '1'),
        'post_first_grad_students' => Student::all()->where('program_id', '=', '2'),
    ]);
    }   
}
