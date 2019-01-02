<?php

namespace App\Http\Controllers\Lecturer\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use App\Resource;
use App\Material;


class UploadController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

   // use AuthenticatesUsers;

    /*
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = '/lecturer/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('lecturer.auth');
    }

   // C : \Users \Prince Foli \Desktop \crustApi \law - vlib > php artisan storage : link
    //      The [public/ storage] directory has been linked .

    public function upload(Request $request)
    {
  
        $pdfdoc = $request->file('uploadable');
        $extension = $pdfdoc->getClientOriginalExtension();
        $filename = 'vlib-'.time() . '.' . $extension ;
        $path = $pdfdoc->storeAs('materials',$filename);
    
        $prefix = "data:application/pdf;base64,";
        $b64Doc = chunk_split(base64_encode( File::get(storage_path('app/public/'.$path))));
        //Storage::put( $folder . $filename , ($prefix . $b64Doc));
        //$totalLen = $len / (1024 * 1042);
        $filetimestamp = '' . time();
        $filename = 'vlib-' . $filetimestamp . '.pdf.txt';
        $db_filename = 'vlib-' . $filetimestamp . '.pdf';
        $folder = '/doc/' ;
       
        $encodedPdfFileName = public_path('pdfviewer') . $folder .  $filename;
         $len = file_put_contents($encodedPdfFileName, $prefix . $b64Doc);
        
        $sem = DB::table('semesters')->where('id', trim($request->available_in))->first();
        $data = array(
            'title' => $request->title,
            'available_in' => $sem->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'local_path' =>  $db_filename,
            'url' => '',
            'course_id' => $request->course_code_option);

        if ($request->kind == '1' || $request->kind == 1) 
        {

            Material::create($data);
            Storage::delete($path);
            return (json_encode(["status" => $folder . $db_filename . ' with extension: ' . $extension . " came successfully."]));

        } else if ($request->kind == '2' || $request->kind == 2) {
            Resource::create($data);
            Storage::delete($path);
            return (json_encode(["status" => $folder . $db_filename . ' with extension: ' . $extension . " came successfully."]));
        }
        else {
            return (json_encode(["status" => "Oops! Something went wrong. Make sure you provide the correct information needed."]));
        }


    }

    protected function guard()
    {
        return Auth::guard('lecturer');
    }
}
