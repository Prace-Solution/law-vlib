<?php

namespace App\Http\Controllers\Student\Auth;

use App\Student;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'student/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest:student')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard("student");
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //|unique:users
        return Validator::make($data, [
            'id_number' => 'required|string|min:8',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Student::create([
            'id_number' => $data['id_number'],
            'role_id' => 1,
            'fullname' => $data['name'],
            'email' => $data['email'],
            'program_id'=> $data['program_id_option'],
            'level_id'=> $data['level_id_option'],
            'semester_id'=> $data['semester_id_option'],
            'department_id'=> $data['department_id_option'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('student.auth.register');
    }

    public function register(Request $request)
    {

        // if ($request->ajax())
        // {
            
        //     $this->validator($request->all())->validate();
        //     event(new Registered($user = $this->create($request->all())));
        //     return $user;
        // }

        $validator =  $this->validator($request->all());
     
        if ($validator->fails()) {  //redirect('post/create')
            return back()
                ->withErrors($validator)
                ->withInput();
        }

       
        event(new Registered($user = $this->create($request->all())));
        return back()->with('status', 'success');


       //  event(new Registered($user = $this->create($request->all())));
    
        // $this->guard()->login($user);

         //return $this->registered($request, $user)
          //   ? : redirect($this->redirectPath());
   }

    

}
