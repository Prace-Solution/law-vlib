<?php 
namespace App\Http\Controllers\Student;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ReadController extends Controller
{
   public function read() {
     if(Auth::guard('student')->check()){
         return view('pdfviewer');
     }
    return redirect('student/');
   } 
}
