<?php

namespace App\Http\Controllers\Student;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function index()
    {

        return view('search.search');
    }

    public function search(Request $request){}

    public function getMaterialSearchOption(Request $request)
    {

        switch ($request->search_option) {

            case "0":
                return "title";
            case "1":
                return "slug";
            case "2":
                return "description";
            case "3":
                return "available_in";
            case "4":
                return "course_id";
        }
        return "";
    }

    public function searchMaterial(Request $request)
    {

        if ($request->ajax())
        {
            $output = "";
            $courses = [];
            $materials =[];
            
            $search_option_v = $this->getMaterialSearchOption($request);

            if ($search_option_v == "available_in"){
                $semester = DB::table('semesters')->where('number', trim($request->search))->first();
                if ($semester) {
                
                   $materials = DB::table('materials')->where($search_option_v, 'LIKE', "%" . trim($semester->name) . "%")->get();
                       
                }

            }
            else if ($search_option_v == "course_id") {
                $course = DB::table('courses')->where('code', trim($request->search))->first();
               
                if ($course) {

                    $materials = DB::table('materials')->where($search_option_v, 'LIKE', "%" . trim($course->id) . "%")->get();
                }

               
            }
            else
            {
                $materials = DB::table('materials')->where($search_option_v, 'LIKE', "%" . trim($request->search) . "%")->get();
                
            }



            if (!empty($materials)){

                foreach ($materials as $key => $material) {

                    $course = DB::table('courses')->where('id', trim($material->course_id))->first();

                    $output .= '<tr>' .
                    '<td> <span class="text-ellipsis">' . $material->id . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $material->title . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $material->available_in . '</span> </td>'.
                    // '<td> <span class="text-ellipsis">' . $material->slug . '</span> </td>'.
                    // '<td> <span class="text-ellipsis">' . $material->local_path . '</span> </td>'.
                    // '<td> <span class="text-ellipsis">' . $material->url . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $material->description . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . ( $course==null ? "" : $course->code) . '</span> </td>'.
                    '<td id="' . $material->id . '"><a href="' . route("student.read") . '?file=' . $material->local_path  . '" class="active" ui-toggle-class=""><i class="fa fa-eye text-success text-active"></i></a>
                  
                    </td>' ;
                   //   <a><i class="fa fa-times text-danger text"></i></a>
                    $output .= '</tr>';
                }
                return Response($output);

            }

        }
        
    }

    public function searchResourceItem(Request $request)
    {

        if ($request->ajax())
        {
            $output = "";
            $courses = [];
            $resources =[];
            
            $search_option_v = $this->getMaterialSearchOption($request);

            if ($search_option_v == "available_in"){
                $semester = DB::table('semesters')->where('number', trim($request->search))->first();
                if ($semester) {
                
                   $resources = DB::table('resources')->where($search_option_v, 'LIKE', "%" . trim($semester->name) . "%")->get();
                       
                }

            }
            else if ($search_option_v == "course_id") {
                $course = DB::table('courses')->where('code', trim($request->search))->first();
               
                if ($course) {

                    $resources = DB::table('resources')->where($search_option_v, 'LIKE', "%" . trim($course->id) . "%")->get();
                }

               
            }
            else
            {
                $resources = DB::table('resources')->where($search_option_v, 'LIKE', "%" . trim($request->search) . "%")->get();
                
            }



            if (!empty($resources)){

                foreach ($resources as $key => $resource) {

                    $course = DB::table('courses')->where('id', trim($resource->course_id))->first();

                    $output .= '<tr>' .
                    '<td> <span class="text-ellipsis">' . $resource->id . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $resource->title . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $resource->available_in . '</span> </td>'.
                    // '<td> <span class="text-ellipsis">' . $resource->slug . '</span> </td>'.
                    // '<td> <span class="text-ellipsis">' . $resource->local_path . '</span> </td>'.
                   // '<td> <span class="text-ellipsis">' . $resource->url . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $resource->description . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . ( $course==null ? "NULL" : $course->code) . '</span> </td>'.
                    '<td id="' . $resource->id . '"><a href="' . route("student.read") . '?file=' . $resource->local_path  . '" class="active" ui-toggle-class=""><i class="fa fa-eye text-success text-active"></i></a>
                  
                    </td>' ;
                    // <a><i class="fa fa-times text-danger text"></i></a>
                    
                    $output .= '</tr>';
                }
                return Response($output);

            }

        }
        
    }

}