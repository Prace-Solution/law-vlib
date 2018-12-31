@extends('admin.layouts.adminlte-app')

@section('logo-fullname',"Admin")
@section("logo-shortcut","A")


@section('name')
    @if(Auth::guard('admin')->user())
        {{ Auth::guard('admin')->user()->fullname }}
    @endif 
@endsection

@section('level')
    {{--  @if(Auth::guard('admin')->user())
        <small>{{ Auth::guard('admin')->user()->level['name'] }} </small>
    @endif   --}}
@endsection

@section('side-bar-nav')
    <li><a href="{{ route('admin.home.nav','dashboard-view') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Courses</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li> <a href="{{ route('admin.home.nav','course-add-ui') }}"><i class="fa fa-plus text-green"></i> add</a></li>
            <li><a href="{{ route('admin.home.nav','course-view') }}"><i class="fa fa-eye text-yellow"></i> view</a></li>
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
            <li > <a href="{{ route('admin.home.nav','course-material-upload-ui') }}"><i class="fa fa-book text-green"></i> course</a></li>
            <li><a href="{{ route('admin.home.nav','course-resource-material-upload-ui') }}"><i class="fa fa-book text-aqua"></i> reading</a></li>
        </ul>
    </li>
    <li class="treeview ">
        <a href="#">
            <i class="fa fa-folder-open-o"></i>
            <span>Uploaded Materials</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class=""> <a href="{{ route('admin.home.nav','course-material-view') }}"><i class="fa fa-book text-green"></i> course</a></li>
            <li><a href="{{ route('admin.home.nav','course-resource-material-view') }}"><i class="fa fa-book text-aqua"></i> reading</a></li>
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
            <li class="active"> <a href="{{ route('admin.home.nav','student-add-ui') }}"><i class="fa fa-plus text-green"></i> add</a></li>
           <li><a href="{{ route('admin.home.nav','student-undergrad-view') }}"><i class="fa fa-eye text-aqua"></i>undergraduate </a></li>
            <li ><a href="{{ route('admin.home.nav','student-postgrad-view') }}"><i class="fa fa-eye text-aqua"></i> post-first degree</a></li>
            
        </ul>
    </li>
     <li class="treeview ">
        <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Lecturers</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class=""> <a href="{{ route('admin.home.nav','lecturer-add-ui') }}"><i class="fa fa-plus text-green"></i> add</a></li>
            <li><a href="{{ route('admin.home.nav','lecturer-view') }}"><i class="fa fa-eye text-aqua"></i> view</a></li>
        </ul>
    </li>
  
    <li>
        <a href="{{ route('admin.home.nav','announcement-view') }}">
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
        <small>(Add a Student</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Home</a></li>
        <li class="active">Students</li>
      </ol>

@endsection

@section('viewport-content')

<br>  <br>  <br>  <br> 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register A Student</div>
                <div class="panel-body">

                 {{-- method="POST" action="{{ route('student.register') }}" --}}
                    <form class="form-horizontal main" role="form">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_number') ? ' has-error' : '' }}">
                            <label for="id_number" class="col-md-4 control-label">ID Number</label>

                            <div class="col-md-6">
                                <input id="id_number" type="id_number" class="form-control" name="id_number" value="{{ old('id_number') }}" required autofocus>

                                @if ($errors->has('id_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('program_id_option') ? ' has-error' : '' }}">
                                   
                                   <label for="program_id_option" class="col-md-4 control-label">Program</label>
                                   <div class="col-md-6">
                                       
                                       <select   class="form-control" id="program_id_option"  name="program_id_option">
                                          
                                           @foreach( $programs as $program )
                                               <option value="{{ $program->id }}">{{ $program->title }}</option>      
                                           @endforeach
                                         
                                       </select>
                                    </div>       
                        </div>

                        <div class="form-group {{ $errors->has('level_id_option') ? ' has-error' : '' }}">
                                   
                                   <label for="level_id_option" class="col-md-4 control-label">Level</label>
                                   <div class="col-md-6">
                                       
                                       <select    class="form-control" id="level_id_option"  name="level_id_option">
                                          
                                           @foreach ( $levels as $level )
                                               <option value="{{ $level->id }}">{{ $level->name }}</option>   
                                           @endforeach
                                        
                                       </select>
                                    </div>       
                        </div>

                        <div class="form-group {{ $errors->has('department_id_option') ? ' has-error' : '' }}">
                                   
                                   <label for="department_id_option" class="col-md-4 control-label">Department</label>
                                   <div class="col-md-6">
                                       
                                       <select    class="form-control" id="department_id_option"  name="department_id_option">
                                          
                                           @foreach ( $departments as $department )
                                               <option value="{{ $department->id }}">{{ $department->name }}</option>   
                                           @endforeach
                                       
                                       </select>
                                  
                                    </div>       
                        </div>

                        <div class="form-group {{ $errors->has('semester_id_option') ? ' has-error' : '' }}">
                                   
                                   <label for="semester_id_option" class="col-md-4 control-label">Semester</label>
                                   <div class="col-md-6">
                                       
                                       <select    class="form-control" id="semester_id_option"  name="semester_id_option">
                                          
                                           @foreach ( $semesters as $semester )
                                               <option value="{{ $semester->id }}">{{ $semester->name }}</option>   
                                           @endforeach
                                       
                                       </select>
                                  
                                    </div>       
                        </div>
                       

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <button id='add-student-btn' style="margin-left:5px !important" type="submit" class="btn btn-primary">
                                    Register 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('extra-css')
   {{--    --}}
@endpush

@push('extra-js')
<script>
   ($("#add-student-btn")).on("click", function(event) {
       
        var f = $("form.main")[0];

        if(f.checkValidity())
        {
            event.preventDefault();
            event.stopPropagation();
            var url = "student/register";
            var data = new FormData($("form.main")[0]);
            $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    cache: false,
                // dataType: "json",
                    
                    contentType:false,
                    processData:false,
                    success: function(info) {

                       console.log(info);
                       var rs =  JSON.parse(info);
                       alert(rs.status);
                        console.log(info);
                        $("form.main")[0].reset();
                    },


                }).fail(function(error) {
                    console.log(error);
                    alert("Error: ",error);

                })
                .always(function() {
                    //  alert( "complete" );
                });
        }
        else
        {
           f.reportValidity();
        }
    
    });
</script>
<script>
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endpush                


