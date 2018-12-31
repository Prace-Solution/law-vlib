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
    <li class="treeview active">
        <a href="#">
            <i class="fa fa-folder-open-o"></i>
            <span>Uploaded Materials</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"> <a href="{{ route('admin.home.nav','course-material-view') }}"><i class="fa fa-book text-green"></i> course</a></li>
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
        Uploaded  Materials
        <small>(View uploaded materials)</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-folder-open-o"></i> Home</a></li>
        <li class="active">Uploaded Materials</li>
      </ol>

@endsection    


 @section('viewport-content')
 <br> <br> <br>
    <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Course Materials Uploaded Table
                        </div>
                        <div class="table-responsive">
                         <br>
                    <div class="pull-right">
                                {{-- TODO: search action goes here --}}  
                        Search By:&nbsp;&nbsp;        
                        <select id='search_option' class="input-sm">
                             <option value="0">Title</option>
                                    <option value="1">Slug</option>
                                    <option value="2">Description</option>
                                    <option value="3">Semester</option>
                                    <option value="4">course code</option>
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
                                        <th>Title</th>
                                        <th>Available In</th>
                                        <th>Slug</th>
                                        <th>Local Path</th>
                                        {{-- <th>Url</th> --}}
                                        <th>Description</th>
                                        <th>Course Code</th> 
                                        <th style="width:30px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ( $materials as $material)
                                        <tr>
                                        {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                                        <td><span class="text-ellipsis"> {{ $material->id }}</span></td>
                                        <td><span class="text-ellipsis"> {{ $material->title }}</span></td>
                                        <td><span class="text-ellipsis"> {{ $material->available_in }}</span></td>
                                        <td><span class="text-ellipsis"> {{ $material->slug }}</span></td>
                                        <td><span class="text-ellipsis"> {{ $material->local_path }}</span></td>
                                        {{-- <td><span class="text-ellipsis"> {{ $material->url }}</span></td> --}}
                                        <td><span class="text-ellipsis"> {{ $material->description }}</span></td>
                                       

                                        <td><span class="text-ellipsis">
                                          @foreach ( $courses as  $course )
                                              @if( $material->course_id == $course->id ) 
                                               {{ $course->code }}
                                              @endif
                                          @endforeach
                                        </span>
                                        </td>

                                         <td id="{{ $material->id }} ">
                                            <a href="{{ url('pdfviewer/web/viewer.html?file='.$material->local_path) }}" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i></a>
                                            <a><i class="fa fa-times text-danger text"></i></a>
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


@endsection  
@push('extra-css')
   {{--    --}}
@endpush
@push('extra-js')                

<script type="text/javascript">
    $.ajaxSetup({
        beforeSend: function(xhr, type) {
            if (!type.crossDomain) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            }
        },
    });
        

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

                    url : '/admin/search/material',

                    data:{search: $value, search_option :  $search_option},

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
                    $('tbody').html( window.tbody);
                }


            });
      }
</script>

<script type="text/javascript">

   $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

</script>
@endpush