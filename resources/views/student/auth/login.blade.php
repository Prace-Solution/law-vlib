@extends('student.layouts.app')
@push('extra-css')
<style>
.center-auto-20{
   margin: 15% auto 15%!important;
}
.navbar-default {
    background-color: #000073;;
    border-color: #d3e0e9;
}
.navbar-default .navbar-brand {
    color: #fff;
}

.navbar-default:hover .navbar-brand:hover{
    color: goldenrod;
}
body{
      background: rgba(225,225,225,0.1) 
      url(https://www.ug-law-vlib.com/law/img/main_bgr.png) !important ;
} 
.btn-min-width{
    min-width: 150px ;
} 
</style>

@endpush

@section('content')
<div class="container center-auto-20">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('student.login') }}">
                        {{ csrf_field() }}
                        <br> <br>
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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-min-width ">
                                    Login
                                </button>
                                
                                {{----}}
                                <a class="btn btn-link " href=" {{ route('student.password.request') }} ">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <div class="footer">
      <div class="wthree-copyright">
        <p style="color: rgb(0, 0, 102);/*#2c702d*/; text-align:center"> &copy;<?php echo date("Y");?>, University of Ghana, Law School. All rights reserved | Design by <a href="http://crust-media.com">Crust</a></p>
      </div>
      </div>
@endsection

@push('extra-js')

@endpush
