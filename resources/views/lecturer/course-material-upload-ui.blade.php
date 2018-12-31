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
    <li class="treeview active">
        <a href="#">
            <i class="fa fa-upload"></i>
            <span>Upload Materials</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active" ><a href="{{ route('lecturer.home.nav','course-material-upload-ui') }}"><i class="fa fa-book text-green"></i> course</a></li>
            <li c><a href="{{ route('lecturer.home.nav','course-resource-material-upload-ui') }}"><i class="fa fa-book text-aqua"></i> reading</a></li>
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
            <li class=""> <a href="{{ route('lecturer.home.nav','course-material-view') }}"><i class="fa fa-book text-green"></i> course</a></li>
            <li><a href="{{ route('lecturer.home.nav','course-resource-material-view') }}"><i class="fa fa-book text-aqua"></i> reading</a></li>
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
            {{--  <li class=""> <a href="{{ route('lecturer.home.nav','course-material-view') }}"><i class="fa fa-plus text-green"></i> add</a></li>  --}}
            <li><a href="{{ route('lecturer.home.nav','student-undergrad-view') }}"><i class="fa fa-eye text-aqua"></i> undergraduate</a></li>
            <li><a href="{{ route('lecturer.home.nav','student-postgrad-view') }}"><i class="fa fa-eye text-aqua"></i> post-first degree</a></li>
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
        Resources
        <small>(upload a course resource)</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-upload"></i> Home</a></li>
        <li class="active">Upload Materials</li>
      </ol>

@endsection
 @section('viewport-content')
 <br> <br> <br>
 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Course Material Upload</div>
                    <div class="panel-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                       @endif
                        {{-- method="POST" enctype="multipart/form-data"  action="{{ //route('admin.upload') }} --}}
                        <form class="form-horizontal main" role="form">
                            {{ csrf_field() }}
                            <input name='kind' type='hidden' value='1' hidden>
                            <br><br>

                             <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                   
                                   <label for="course_code_option" class="col-md-4 control-label">Course Code:</label>
                                   <div class="col-md-6">
                                       
                                       <select   class="form-control" id="course_code_option"  name="course_code_option">
                                           @foreach( $courses as $course )
                                               <option value="{{ $course->id }}">{{ $course->code }}</option>      
                                           @endforeach
                                       </select>
                                    </div>       
                             </div>

                              <div class="form-group{{ $errors->has('available_in') ? ' has-error' : '' }}">
                                   
                                   <label for="available_in" class="col-md-4 control-label">Available In:</label>
                                   <div class="col-md-6">
                                
                                       <select  class="form-control" id="available_in"  name="available_in">
                                           @foreach ( $semesters as $semester )
                                               <option value="{{ $semester->id }}">{{ $semester->name }}</option>   
                                           @endforeach
                                       </select>
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

                            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" name="description"   placeholder ="Enter the material description here"  required>{{ old('description') }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
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

                              <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" id='add-course-material-btn' class="btn btn-primary btn-lg pull-right">
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
        
    
    //	$("input[name=uploadable]"). change(function() {
	//	    var names = [];
	       // for (var i = 0; i < $(this).get(0).files.length; ++i)
		  //    names.push($(this).get(0).files[i].name);
          //  $file = $(this).get(0).files[0].type ;
		//    alert($file);
		   // $("input[name=uploadable]").val($file);
			
	//    });
    </script>
    <script>
   ($("#add-course-material-btn")).on("click", function(event) {
       
        var f = $("form.main")[0];

        if(f.checkValidity())
        {
            event.preventDefault();
            event.stopPropagation();
            var url = "../course-material/upload";
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
@endpush