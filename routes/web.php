<?php

#use PHPUnit\Framework\Constraint\Count;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*these are test routes start*/
Route::get('/', function () {
   // Auth::routes();
   return view('panel.student');
})->name('welcome.index');

Route::get('dir', function () {
   return public_path('doc');
})->name('welcome.index1');

/*these are test routes ends*/
 
/*this is the admin search routes start*/
Route::get('admin/search', 'admin\SearchController@search');
Route::get('admin/search/material', 'Admin\SearchController@searchMaterial');
Route::get('admin/search/resource', 'Admin\SearchController@searchResourceItem');
Route::get('admin/search/undergrad', 'Admin\SearchController@searchPerson');
Route::get('admin/search/postgrad', 'Admin\SearchController@searchPerson');
Route::get('admin/search/lecturer', 'Admin\SearchController@searchPerson');
Route::get('admin/search/department', 'Admin\SearchController@searchDepartment');
/*this is the admin search routes end*/

/*this is the student search routes start*/
Route::get('student/search/material', 'Student\SearchController@searchMaterial');
Route::get('student/search/resource', 'Student\SearchController@searchRgitesourceItem');
/*this is the student search routes end*/

/*this is the template for content view start*/
// Route::get('/view/{resourceType}/{template_name}', function ($resourceType ,$template_name) {
 
  
//   if(trim($resourceType) =='admin'){

//     return view("$template_name",
//     [

//         'admins_count'=> App\Admin::count(),
//         'students_count'=> App\Student::count() ,
//         'resources_count'  => App\Resource::count(),
//          'materials_count'  => App\Material::count(),
//         'lecturers_count'  => App\Lecturer::count(),
//         'courses_count'  => App\Course::count(),
//         'programs_count'  => App\Program::count(),
//         'statuses_count'  => App\Status::count(),
//         'semesters_count' => App\Semester::count(),
//         'levels_count' => App\Level::count(),
//         'undergrad_students_count' => App\Student::where('program_id', '=', '1')->count(),
//         'post_first_degree_students_count' => App\Student::where('program_id', '=', '2')->count(),
//         'courses' => App\Course::all(),
//         'students' => App\Student::all(),
//         'resources' => App\Resource::all(),
//         'lecturers' => App\Lecturer::all(),
//         'programs' => App\Program::all(),
//         'semesters' => App\Semester::all(),
//         'levels' => App\Level::all(),
//         'departments' => App\Department::all(),
//         'statuses' => App\Status::all(),
//         'materials' => App\Material::all(),
//         'permissions' => App\Permission::all(),
//         'roles' => App\Role::all(),
//         'undergrad_students' => App\Student::all()->where('program_id', '=', '1'),
//         'post_first_grad_students' => App\Student::all()->where('program_id', '=', '2'),
//api@prace.solution.com
//     ]);
//   }
  
// });
/*this is the template for content view end*/


/*this is the admin routes start*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['web']], function(){

    Route::post('student/register', function (Request $request) {

      $validator = Validator::make($request->all(), [
        'id_number' => 'required|string|min:8',
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
      ]);

      $student = App\Student::where('email',$request->email);
      if(!is_null($student) || $student != null){
           return Response(json_encode(["status" => 'Email already in use in the system.']));
      }

      $student = App\Student::where('id_number',$request->id_number);
      if(!is_null($student) || $student != null){
          return Response(json_encode(["status" => 'Student ID already in use in the system.']));
      }
        
      if ($validator->fails()) {
        $error = $validator->errors()->first();
        return Response(json_encode(["status" => $error ]));
      }
      else{
        $data = $request->all();
        App\Student::create([
          'id_number' => $data['id_number'],
          'role_id' => 1,
          'fullname' => $data['name'],
          'email' => $data['email'],
          'program_id' => $data['program_id_option'],
          'level_id' => $data['level_id_option'],
          'semester_id' => $data['semester_id_option'],
          'department_id' => $data['department_id_option'],
          'password' => bcrypt($data['password']),
        ]);

        return Response(json_encode( ["status"=> $request->name .' with Student ID Number: '. $request->id_number  ." has been added successfully."]));
      }
    });

    Route::post('lecturer/register', function (Request $request) {
       
         $lecturer = App\Lecturer::where('email',$request->email);
         if(!is_null($lecturer) || $lecturer != null){
           return Response(json_encode(["status" => 'Email already in use in the system.']));
         }
        
          $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
          ]);

        if ($validator->fails()) {
          $error = $validator->errors()->first();
          return Response(json_encode(["status" => $error]));
        } 
        else 
        {
          $data = $request->all();
        
          App\Lecturer::create([
            'id_number' => Null,
            'role_id' => 2,
            'fullname' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
          ]);

          return Response(json_encode(["status" => $request->name . ' with email: ' . $request->email . " has been added successfully."]));
        }
    });

    Route::post('add/course', function (Request $request) {
        //'code' ,'title','slug','semester_id','level_id','program_id','department_id',

        $code =  App\Courser::where('code',$request->code);
        if(!is_null($code) || $code != null){
           return Response(json_encode(["status" => 'Course Code already exist.']));
        }

        $slug = '' ;
        if($request->slug == '' || empty($request->slug) || $request->slug == null){
          $slug = $request->code  . '-' . date('h-m-s');
        } 
        else
        {
          $slug = $request->slug;
        }

        App\Course::create([
          'code'=> $request->code ,
          'title' => $request->title,
          'slug' =>  $slug ,
          'semester_id' => $request->semester_id_option,
          'level_id' => $request->level_id_option ,
          'program_id' => $request->program_id_option,
          'department_id' => $request->department_id_option,
        ]);

        return Response(json_encode(["status" => $request->code . ' with slug: ' . $slug . " has been added successfully."]));
    });

    Route::post('add/department', function (Request $request) {

      $dept =  App\Department::where('name',$request->name);
      if(!is_null($dept) || $dept != null){
           return Response(json_encode(["status" => 'Department name already exist.']));
      } 
      $slug = '' ;
      if($request->slug == '' || empty($request->slug) || $request->slug == null){
        $slug = $request->name  . '-' . date('h-m-s');
      } 
      else
      {
        $slug = $request->slug;
      }
      App\Department::create([
        'name' => $request->name,
        'slug' => $slug,
        'description' => $request->description, 
      ]);

      return Response(json_encode(["status" => $request->name . ' with slug: ' . $slug . " has been added successfully."]));
    });
  
    Route::post('resource-material/upload', 'Auth\UploadController@upload')->name('admin.resource.material.upload');
    Route::post('course-material/upload', 'Auth\UploadController@upload')->name('admin.course.material.upload');
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('admin.index');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login');
    Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register.index');
    Route::post('register', 'Auth\RegisterController@register')->name('admin.register');
   
    Route::get('home', 'HomeController@index')->name('admin.home');
    Route::get('home/{nav?}', 'HomeController@show')->name('admin.home.nav');
    Route::get('read', 'ReadController@read')->name('admin.read');
    
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    //Route::get('password/reset', 'Auth\ResetPasswordController@showPasswordResetForm');
    //Route::get('password/request', 'Auth\ForgotPasswordController@showForgetPasswordForm');
});
/*this is the admin routes end*/

/*this is the student routes start 'middleware' => ['web']*/
Route::group(['prefix' => 'student', 'namespace' => 'Student','middleware' => ['web'] ], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('student.index');
    Route::post('login', 'Auth\LoginController@login')->name('student.login');
    Route::post('logout', 'Auth\LoginController@logout')->name('student.logout');
    Route::get('logout', 'Auth\LoginController@logout')->name('student.logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('student.register.index');;
    Route::post('register', 'Auth\RegisterController@register')->name('student.register');
    Route::get('home', 'HomeController@index')->name('student.home');
    Route::get('home/{nav?}', 'HomeController@show')->name('student.home.nav');
    Route::get('read', 'ReadController@read')->name('student.read');
 

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('student.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('student.password.reset');

    //Route::get('password/reset', 'Auth\ResetPasswordController@showPasswordResetForm');
    //Route::get('password/request', 'Auth\ForgotPasswordController@showForgetPasswordForm');
});

/*this is the student  routes ends*/


/*this is the lecturer  routes starts*/
Route::group(['prefix' => 'lecturer', 'namespace' => 'Lecturer','middleware' => ['web']], function(){

  
    Route::post('resource-material/upload', 'Auth\UploadController@upload')->name('lecturer.resource.material.upload');
    Route::post('course-material/upload', 'Auth\UploadController@upload')->name('lecturer.course.material.upload');
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('lecturer.index');
    Route::post('login', 'Auth\LoginController@login')->name('lecturer.login');
    Route::get('logout', 'Auth\LoginController@logout')->name('lecturer.logout');
    Route::post('logout', 'Auth\LoginController@logout')->name('lecturer.logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('lecturer.register.index');
    Route::post('register', 'Auth\RegisterController@register')->name('lecturer.register');
   
    Route::get('home', 'HomeController@index')->name('lecturer.home');
    Route::get('home/{nav?}', 'HomeController@show')->name('lecturer.home.nav');
    Route::get('read', 'ReadController@read')->name('lecturer.read');
 

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('lecturer.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('lecturer.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('lecturer.password.reset');
    //Route::get('password/reset', 'Auth\ResetPasswordController@showPasswordResetForm');
    // Route::get('password/request', 'Auth\ForgotPasswordController@showForgetPasswordForm');
    Route::post('add/course', function (Request $request) {
          //'code' ,'title','slug','semester_id','level_id','program_id','department_id',
          $code =  App\Courser::where('code',$request->code);
          if(!is_null($code) || $code != null){
            return Response(json_encode(["status" => 'Course Code already exist.']));
          }

          $slug = '' ;
          if($request->slug == '' || empty($request->slug) || $request->slug == null){
            $slug = $request->code  . '-' . date('h-m-s');
          } 
          else
          {
            $slug = $request->slug;
          }

          App\Course::create([
            'code'=> $request->code ,
            'title' => $request->title,
            'slug' =>  $slug ,
            'semester_id' => $request->semester_id_option,
            'level_id' => $request->level_id_option ,
            'program_id' => $request->program_id_option,
            'department_id' => $request->department_id_option,
          ]);

          return Response(json_encode(["status" => $request->code . ' with slug: ' . $slug . " has been added successfully."]));
    });
});


/*this is the lecturer  routes ends*/