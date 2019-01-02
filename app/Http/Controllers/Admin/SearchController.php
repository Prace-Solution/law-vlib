<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    
    public function index()
    {

        return view('search.search');
    }

    public function getDepartmentSearchOption (Request $request){
        switch ($request->search_option) {

            case "1":
                return "name";
            case "2":
                return "slug";
            case "3":
                 return "description";
        }
        return "";
    }

    public function getSearchOption(Request $request)
    {

        switch ($request->search_option) {

            case "0":
                return "title";
            case "1":
                return "code";
            case "2":
                return "slug";
            case "3":
              
                return "level_id";
        }
        return "";
    }

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
    public function getStudentSearchOption(Request $request){
        
        switch ($request->search_option) {

            case "0":
                return "id_number";
            case "1":
                return "fullname";
            case "2":
                return "email";
           
        }
        return "";
    }
    
    public function search(Request $request)
    {

        if ($request->ajax()) 
        {
            // return Response($request);

            $output = "";
            $courses = [] ;
            $search_option_v = $this->getSearchOption($request);
            // return Response($search_option_v);
            
            if($search_option_v == "level_id")
            {
                $level = DB::table('levels')->where('number', trim($request->search))->first();
                if($level){
                   // return Response($level->id);
                    $courses = DB::table('courses')->where($search_option_v, 'LIKE', "%" . trim($level->id) . "%")->get();
                }
            }
            else
            {
                $courses = DB::table('courses')->where($search_option_v, 'LIKE', "%" . trim($request->search) . "%")->get();   
            }

           
            if (! empty($courses))
            {
                //return Response($courses);
                foreach ($courses as $key =>  $course) 
                {
                   
                    $program =  DB::table('programs')->where('id','=', $course->program_id)->first();
                    $level = DB::table('levels')->where('id', '=', $course->level_id)->first();
                    $semester = DB::table('semesters')->where('id', '=', $course->semester_id)->first();
                    $department = DB::table('departments')->where('id', '=', $course->department_id)->first(); 
                   
                    $output .= '<tr>' .

                        '<td>' . $course->id . '</td>' .

                        '<td>' . $course->title . '</td>' .

                        '<td>' . $course->code . '</td>' .

                        '<td>' . $course->slug . '</td>' .
                       
                        '<td>' . ($program !== null ? $program->title : '' )  . '</td>' .

                        '<td>' . ($level !== null ? $level->number : '') . '</td>' .

                        '<td>' . ($semester !== null ? $semester->name : '') . '</td>' .

                        '<td>' . ($department !== null ? $department->name : '') . '</td>' .

                        '<td id="' .$course->id .'"><a  class="active" ui-toggle-class=""><i class="fa fa-eye text-success text-active"></i></a><a><i class="fa fa-times text-danger text"></i></a></td>' .

                        '</tr>';

                }
              
                return Response($output);
            }
        }  
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
                    '<td> <span class="text-ellipsis">' . $material->slug . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $material->local_path . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $material->url . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $material->description . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . ( $course==null ? "" : $course->code) . '</span> </td>'.
                    '<td id="' . $material->id . '"><a href="' . route('admin.read') . '?file=' . $material->local_path  . '" class="active" ui-toggle-class=""><i class="fa fa-eye text-success text-active"></i></a>
                    <a><i class="fa fa-times text-danger text"></i></a>
                    </td>' ;
                   
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
                    '<td> <span class="text-ellipsis">' . $resource->slug . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $resource->local_path . '</span> </td>'.
                    // '<td> <span class="text-ellipsis">' . $resource->url . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . $resource->description . '</span> </td>'.
                    '<td> <span class="text-ellipsis">' . ( $course==null ? "NULL" : $course->code) . '</span> </td>'.
                    '<td id="' . $resource->id . '"><a href="' . route('admin.read') . '?file=' . $resource->local_path  . '" class="active" ui-toggle-class=""><i class="fa fa-eye text-success text-active"></i></a>
                     <a><i class="fa fa-times text-danger text"></i></a>
                     </td>' ;
                    
                    $output .= '</tr>';
                }
                return Response($output);

            }

        }
        
    }

    public function searchPerson(Request $request){
        if ($request->ajax()) 
        {
          
            $output = "";
            $students = [];
            $lecturers = [];
            $search_option_v = $this->getStudentSearchOption($request);
           
           if($request->kind == 1 || $request->kind == '1'){

               $students = DB::table('students')->where($search_option_v, 'LIKE', "%" . trim($request->search) . "%")->where('program_id', 1)->get();

               if (!empty(trim($students))) 
                {

                        foreach ($students as $key => $student) {
                            $department = DB::table('departments')->where('id', trim($student->department_id))->first();
                            $level = DB::table('levels')->where('id', trim($student->level_id))->first();
                            $output .= '<tr>' .
                                '<td> <span class="text-ellipsis">' . $student->id . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $student->fullname . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $student->id_number . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $level->number . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $student->email . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $department->name . '</span> </td>';
                            $output .= '</tr>';

                        }
                        return Response($output);
                }
                
               
           }
           else if ($request->kind == 2 || $request->kind == '2') {

               $students = DB::table('students')->where($search_option_v, 'LIKE', "%" . trim($request->search) . "%")->where('program_id', 2)->get();

                if (!empty(trim($students))) {

                        foreach ($students as $key => $student) {
                            $department = DB::table('departments')->where('id', trim($student->department_id))->first();
                            $level = DB::table('levels')->where('id', trim($student->level_id))->first();
                            $output .= '<tr>' .
                                '<td> <span class="text-ellipsis">' . $student->id . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $student->fullname . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $student->id_number . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $level->number . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $student->email . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $department->name . '</span> </td>';
                            $output .= '</tr>';

                        }
                        return Response($output);
                }
                           
           }
           else if ($request->kind ==3 || $request->kind == '3') {


               $lecturers = DB::table('lecturers')->where($search_option_v, 'LIKE', "%" . trim($request->search) . "%")->get();
               if (!empty(trim($lecturers))) {

                        foreach ($lecturers as $key => $lecturer) {
                       // $department = DB::table('departments')->where('id', trim($student->department_id))->first();

                            $output .= '<tr>' .
                                '<td> <span class="text-ellipsis">' . $lecturer->id . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $lecturer->fullname . '</span> </td>' .
                                '<td> <span class="text-ellipsis">' . $lecturer->email . '</span> </td>';
                            $output .= '</tr>';

                        }
                        return Response($output);
                }
               
            }
            
        }
       
    }

    public function searchDepartment(Request $request){
        $output = "";
        $departments = [];
        if ($request->ajax())
        {
            $search_option_v = $this->getDepartmentSearchOption($request);
            $departments = DB::table('departments')->where($search_option_v, 'LIKE', "%" . trim($request->search) . "%")->get();
            if (!empty($departments)) 
            {

                foreach ($departments as $key => $department) {

                    $output .= '<tr>' .
                        '<td> <span class="text-ellipsis">' . $department->id . '</span> </td>' .
                        '<td> <span class="text-ellipsis">' . $department->name . '</span> </td>' .
                        '<td> <span class="text-ellipsis">' . $department->slug . '</span> </td>' .
                        '<td> <span class="text-ellipsis">' . $department->description . '</span> </td>' .
                        '<td id="' . $department->id . '"><a  class="active" ui-toggle-class=""><i class="fa fa-eye text-success text-active"></i></a> <a><i class="fa fa-times text-danger text"></i></a></td>';

                    $output .= '</tr>';
                }
                return Response($output);
            }
        }
    }
}