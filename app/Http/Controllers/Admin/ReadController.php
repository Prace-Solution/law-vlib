<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ReadController extends Controller
{
   public function read() {
     if(Auth::guard('admin')->check()){
         return view('pdfviewer');
     }
     return redirect('/admin');
   } 
}
