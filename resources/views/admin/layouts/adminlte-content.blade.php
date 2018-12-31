{{-- add this class 'wrapper' if the '@include('admin.layouts.adminlte-right-sidebar') ' is visible  --}}
<div class="">
  
  @include('admin.layouts.adminlte-left-sidebar')

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

  {{--  @include('admin.layouts.adminlte-right-sidebar')  --}}
</div>
<!-- ./wrapper -->