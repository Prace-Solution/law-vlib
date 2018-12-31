{{-- add this class 'wrapper' if the '@include('student.layouts.adminlte-right-sidebar') ' is visible  --}}
<div class="">
  
  @include('student.layouts.adminlte-left-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('breadcrumb')
    </section>

    <!-- Main content -->
    <section class="content">
         @yield('viewport-content')
    </section>
    <!-- /.content -->
  </div>

  {{--  @include('student.layouts.adminlte-right-sidebar')  --}}
</div>
<!-- ./wrapper -->