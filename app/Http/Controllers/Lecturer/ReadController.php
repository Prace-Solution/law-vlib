<?php 
namespace App\Http\Controllers\Lecturer;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ReadController extends Controller
{
   public function read() {
     if(Auth::guard('lecturer')->check()){
         return view('pdfviewer');
     }
     return redirect('lecturer/');
   } 
}
