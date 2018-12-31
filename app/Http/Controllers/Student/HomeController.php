<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Resource;
use App\Material;
use App\Lecturer;
use App\Course;


class HomeController extends Controller
{
    
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {  
      $this->middleware('auth:student');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('student.home',[
            'resources_count'  => Resource::count(),
            'materials_count'  => Material::count(),
            'lecturers_count'  => Lecturer::count(),
            'courses_count'  =>  Course::count(),
            'resources' => Resource::all(),
            'courses' => Course::all(),
            'materials' => Material::all(),
          ]);
    }
    public function show($nav)
    { 
          return view('student.' . $nav,[
            'resources_count'  => Resource::count(),
            'materials_count'  => Material::count(),
            'lecturers_count'  => Lecturer::count(),
            'courses_count'  =>  Course::count(),
            'resources' => Resource::all(),
            'courses' => Course::all(),
            'materials' => Material::all(),
          ]);
    }
}
