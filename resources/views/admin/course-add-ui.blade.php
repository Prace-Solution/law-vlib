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
    <li class="treeview active">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Courses</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class='active'> <a href="{{ route('admin.home.nav','course-add-ui') }}"><i class="fa fa-plus text-green"></i> add</a></li>
            <li ><a href="{{ route('admin.home.nav','course-view') }}"><i class="fa fa-eye text-yellow"></i> view</a></li>
        </ul>
    </li>
    <li class="treeview ">
        <a href="#">
            <i class="fa fa-upload"></i>
            <span>Upload Materials</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class=''> <a href="{{ route('admin.home.nav','course-material-upload-ui') }}"><i class="fa fa-book text-green"></i> course</a></li>
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
     <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i>
            <span>Students</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class=""> <a href="{{ route('admin.home.nav','student-add-ui') }}"><i class="fa fa-plus text-green"></i> add</a></li>
            <li><a href="{{ route('admin.home.nav','student-undergrad-view') }}"><i class="fa fa-eye text-aqua"></i>undergraduate </a></li>
            <li><a href="{{ route('admin.home.nav','student-postgrad-view') }}"><i class="fa fa-eye text-aqua"></i> post-first degree</a></li>
        </ul>
    </li>
     <li class="treeview">
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
        Courses
        <small>(add a course)</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-pie-chart"></i> Home</a></li>
        <li class="active">Courses</li>
      </ol>

@endsection

@section('viewport-content')

    <br>  <br>  <br>  <br> 
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Course</div>
                    <div class="panel-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                       @endif

                        {{-- method="POST" enctype="multipart/form-data"  action="" --}}
                        <form  class="form-horizontal main" role="form" >
                            {{ csrf_field() }}

                            <br><br>
                            
                             <div class="form-group {{ $errors->has('program_id_option') ? ' has-error' : '' }}">
                                   
                                   <label for="program_id_option" class="col-md-4 control-label">Program</label>
                                   <div class="col-md-6">
                                       
                                       <select    class="form-control" id="program_id_option"  name="program_id_option">
                                          
                                           @foreach( $programs as $program )
                                               <option value="{{ $program->id }}">{{ $program->title }}</option>      
                                           @endforeach
                                         
                                       </select>
                                    </div>       
                             </div>


                            <div class="form-group {{ $errors->has('level_id_option') ? ' has-error' : '' }}">
                                   
                                   <label for="level_id_option" class="col-md-4 control-label">Level</label>
                                   <div class="col-md-6">
                                       
                                       <select     class="form-control" id="level_id_option"  name="level_id_option">
                                          
                                           @foreach ( $levels as $level )
                                               <option value="{{ $level->id }}">{{ $level->name }}</option>   
                                           @endforeach
                                        
                                       </select>
                                    </div>       
                             </div>

                             <div class="form-group {{ $errors->has('semester_id_option') ? ' has-error' : '' }}">
                                   
                                   <label for="semester_id_option" class="col-md-4 control-label">Semester</label>
                                   <div class="col-md-6">
                                       
                                       <select   class="form-control" id="semester_id_option"  name="semester_id_option">
                                          
                                           @foreach ( $semesters as $semester )
                                               <option value="{{ $semester->id }}">{{ $semester->name }}</option>   
                                           @endforeach
                                       
                                       </select>
                                  
                                    </div>       
                             </div>

                            <div class="form-group {{ $errors->has('department_id_option') ? ' has-error' : '' }}">
                                   
                                   <label for="department_id_option" class="col-md-4 control-label">Department</label>
                                   <div class="col-md-6">
                                       
                                       <select    class="form-control" id="department_id_option"  name="department_id_option">
                                          
                                                @foreach($departments as $department)
                                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                                 @endforeach   
                                         
                                       </select>
                                    </div>       
                             </div>

                             <div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
                                   
                                   <label for="code" class="col-md-4 control-label">Course Code</label>
                                   <div class="col-md-6">
                                       <input id="code" type="text" class="form-control" name="code"
                                           value="{{ old('code') }}" required autofocus>

                                        @if ($errors->has('code'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('code') }}</strong>
                                        </span>
                                        @endif
                                    </div>       
                             </div>

                              <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"
                                           value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                           
                           <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                                <label for="slug" class="col-md-4 control-label">Slug</label>

                                <div class="col-md-6">
                                    <input id="slug" type="text" class="form-control" name="slug"
                                           value="{{ old('slug') }}" required autofocus>

                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('slug') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                              <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button id='add-law-course-btn' type="submit" class="btn btn-primary btn-lg pull-right">
                                      Submit
                                    </button>
                                  
                                   {{-- 
                                    <a class="btn btn-link" href="{{ route('admin.password.request') }} ">
                                        Forgot Your Password?
                                    </a> 
                                   --}}
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  {{--
     <div class="form-group {{ $errors->has('uploadable') ? ' has-error' : '' }}">
        <label for="uploadable" class="col-md-4 control-label">Uploadable Pdf File</label>

        <div class="col-md-6">
            <input id="uploadable" type="file" class="form-control" name="uploadable" required>

               @if ($errors->has('uploadable'))
                   <span class="help-block">
                     <strong>{{ $errors->first('uploadable') }}</strong>
                   </span>
             @endif
         </div>
    </div> 
  --}}   
 
 @endsection

@push('extra-css')
   {{--    --}}
@endpush

@push('extra-js')
    <script>

        $.ajaxSetup({
            beforeSend: function(xhr, type) {
                if (!type.crossDomain) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                }
            },
        });
        
        ($("#add-law-course-btn")).on("click", function(event) {
       
        var f = ($("form.main"))[0];

        if(f.checkValidity())
        {
            event.preventDefault();
            event.stopPropagation();
            var _token = $('meta[name="csrf-token"]').attr('content');
            var url = "../add/course";
            var data = new FormData($("form.main")[0]);
            data.append("_token", _token);
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
  {{--  <script>
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>  --}}
   
@endpush



                       


