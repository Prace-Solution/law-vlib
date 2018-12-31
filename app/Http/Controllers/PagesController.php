<?php
namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\User;

/**
* 
*/
class PagesController extends Controller
{
	
	private $roles= ["Student","Lecturer","Admin", "Guest"];
	public function getLogin()
	{
	    

	    $user = User::find(1);
		return view('pages.index')->withData($user)->withRoles($this->roles);
	}
	public function getAbout()
	{

		return  view('pages.about');
	}
	public function getContact()
	{
		$data = array();
		return  view('pages.contact',compact('data'));
	}

     public function getHome()
	{
		$data = array();
		return  view('pages.welcome',compact('data'));
	}


/////////////////////////////////////
	public function getStudent(Request  $request)
	{
		$data = array();
		return  view('panel.student')->withData($request->input('email'))->withRoles($this->roles);
	}

	public function getLecturer()
	{
		$data = array();
		return  view('panel.lecturer',compact('data'));
	}

	public function getAdmin()
	{
		$data = array();
		return  view('panel.admin',compact('data'));
	}

	public function getDeveloper()
	{
		$data = array();
		return  view('panel.developer',compact('data'));
	}

	public function getGuest()
	{
		$data = array();
		return  view('panel.guest',compact('data'));
	}


//////////////////////////////
	public function postLogin(Request $request){
     
      // Session::flash('success','Task was successful!');
      //$request->input('email');
      //var_dump($request->input('role'));
	  // Session::flash('success','Task was successful!');
	  

		if($request->input('role') ===  $this->roles[0]){

			$this->middleware('student');
			//return	view('panel.student')->withData($request->input('email'))->withRoles($this->roles);

           //  return redirect('/student')->withData($request->input('email'))->withRoles($this->roles);

		}

		else if($request->input('role') ===  $this->roles[1]){
          
            return redirect('/lecturer')->withData($request->input('email'))->withRoles($this->roles);
		}

		else if($request->input('role') === $this->roles[2]){
			  return redirect('/admin')->withData($request->input('email'))->withRoles($this->roles);
		}
		else if($request->input('role') ===  $this->roles[3]){
             return redirect('/guest')->withData($request->input('email'))->withRoles($this->roles);
		}
	    return redirect('/error')->withData($request->input('email'))->withRoles($this->roles);
     
	}

}
 