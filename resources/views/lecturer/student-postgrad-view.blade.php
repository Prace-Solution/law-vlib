@extends('lecturer.layouts.adminlte-app')

@section('logo-fullname',"Lecturer")
@section("logo-shortcut","L")


@section('name')
    @if(Auth::guard('lecturer')->user())
        {{ Auth::guard('lecturer')->user()->fullname }}
    @endif 
@endsection


@section('side-bar-nav')
  <li ><a href="{{ route('lecturer.home.nav','dashboard-view') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Courses</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            {{--  <li class=""> <a href="{{ route('lecturer.home.nav','course-add-ui') }}"><i class="fa fa-plus text-green"></i> add</a></li>  --}}
            <li > <a href="{{ route('lecturer.home.nav','course-view') }}"><i class="fa fa-eye text-yellow"></i> view</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-upload"></i>
            <span>Upload Materials</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class=""> <a href="{{ route('lecturer.home.nav','course-material-upload-ui') }}"><i class="fa fa-book text-green"></i> course</a></li>
            <li><a href="{{ route('lecturer.home.nav','course-resource-material-upload-ui') }}"><i class="fa fa-book text-aqua"></i> reading</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-folder-open-o"></i>
            <span>Uploaded Materials</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li> <a href="{{ route('lecturer.home.nav','course-material-view') }}"><i class="fa fa-book text-green"></i> course</a></li>
            <li><a href="{{ route('lecturer.home.nav','course-resource-material-view') }}"><i class="fa fa-book text-aqua"></i> reading</a></li>
        </ul>
    </li>
     <li class="treeview active">
        <a href="#">
            <i class="fa fa-users"></i>
            <span>Students</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            {{--  <li class=""> <a href="{{ route('lecturer.home.nav','course-material-view') }}"><i class="fa fa-plus text-green"></i> add</a></li>  --}}
            <li><a href="{{ route('lecturer.home.nav','student-undergrad-view') }}"><i class="fa fa-eye text-aqua"></i> undergraduate</a></li>
            <li class='active'><a href="{{ route('lecturer.home.nav','student-postgrad-view') }}"><i class="fa fa-eye text-aqua"></i> post-first degree</a></li>
        </ul>
    </li>
     {{--  <li class="treeview">
        <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Lecturers</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class=""> <a href="{{ route('lecturer.home.nav','course-material-view') }}"><i class="fa fa-plus text-green"></i> add</a></li>
            <li><a href="{{ route('lecturer.home.nav','course-resource-material-view') }}"><i class="fa fa-eye text-aqua"></i> view</a></li>
        </ul>
    </li>  --}}
  
    <li >
        <a href="{{ route('lecturer.home.nav','announcement-view') }}">
            <i class="fa fa-bullhorn"></i> <span>Announcement</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
            </span>
        </a>
    </li>
@endsection 

@section('breadcrumb')
    <h1>
        Students
        <small>(View Post-First Degree Students)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Home</a></li>
        <li class="active">Students</li>
      </ol>

@endsection

@section('viewport-content')

<br>  <br>  <br>  <br> 

<div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Post First Degree Students Table
                        </div>
                     
                        <div class="table-responsive">

                            <br>
                            <div class="pull-right">
                                        {{-- TODO: search action goes here --}}  
                                Search By:&nbsp;&nbsp;        
                                <select id='search_option' class="input-sm">
                                    <option value="0">Student ID</option>
                                    <option value="1">Full Name</option>
                                    <option value="2">Email</option>
                                </select>
                                <input type="text" class="input-sm min-width ml-16 mr-16" placeholder="Search" name="search" id="search">
                            </div>
                            <br>  <hr class'dotted'>    
                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        {{-- <th style="width:20px;">
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox"><i></i>
                                            </label>
                                        </th> --}}
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Student ID</th>
                                        <th>Level</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ( $post_first_grad_students as $post_first_grad_student)
                                        <tr>
                                        {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                                        <td><span class="text-ellipsis"> {{ $post_first_grad_student->id }}</span></td>
                                        <td><span class="text-ellipsis"> {{ $post_first_grad_student->fullname }}</span></td>
                                        <td><span class="text-ellipsis"> {{ $post_first_grad_student->id_number }}</span></td>
                                       

                                        <td><span class="text-ellipsis">
                                          @foreach ( $levels as  $level )
                                              @if( $post_first_grad_student->level_id == $level->id ) 
                                               {{ $level->number }}
                                              @endif
                                          @endforeach
                                        </span>
                                        </td>

                                        <td><span class="text-ellipsis"> {{ $post_first_grad_student->email }}</span></td>
                                       
                                       
                                        <td><span class="text-ellipsis">
                                          @foreach ( $departments as  $department )
                                              @if( $post_first_grad_student->department_id == $department->id ) 
                                               {{ $department->name }}
                                              @endif
                                          @endforeach
                                        </span>
                                        </td>
                                         
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">

                                {{-- <div class="col-sm-5 text-center">
                                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                                </div>
                                 --}}
                                {{-- <div class="col-sm-7 text-right text-center-xs">
                                    <ul class="pagination pagination-sm m-t-none m-b-none">
                                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                        <li><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </footer>
                    </div>
                </div>

</div>
@endsection

@push('extra-css')
   {{--    --}}
@endpush

@push('extra-js')
<script type="text/javascript">

      if( $('#search') ){
            
            window.tbody = $('tbody').html();
            console.log( $('#search'));
          
            $('#search').on('keyup',function()
            {

                $value=$(this).val();

                if($value .trim() !== '')
                {
                    $search_option =$('#search_option').val();

                    $.ajax({

                    type : 'get',

                    url : '/admin/search/postgrad',

                    data:{search: $value, search_option :  $search_option, kind: 2},

                    success:function(data){
                        console.log(data);
                        $('tbody').html(data);
                    }

                    }).fail(function(error) {
                        console.log(error);
                        alert("Sorry, we were unable to search your course for viewing!");

                    })
                    .always(function() {
                        //  alert( "complete" );
                    });
                }
                else
                {
                    $('tbody').html(window.tbody);
                }

            });
      }
</script>
<script>
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endpush   
