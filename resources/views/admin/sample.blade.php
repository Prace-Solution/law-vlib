      <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Course Material Upload</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"  action="{{ route('admin.upload') }}">
                            {{ csrf_field() }}

                            <br><br>

                             <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                   
                                   <label for="course_code_option" class="col-md-4 control-label">Course Code:</label>
                                   <div class="col-md-6">
                                       
                                       <select  onchange="requestSemOption.call(this)"   class="form-control" id="course_code_option"  name="course_code_option">
                                           <option value="1">GF381</option>
                                           <option value="2">GF383</option>
                                           <option value="3">GF383</option>
                                           <option value="4">GF384</option>
                                       </select>
                                    </div>       
                             </div>

                              <div class="form-group{{ $errors->has('available_in') ? ' has-error' : '' }}">
                                   
                                   <label for="available_in" class="col-md-4 control-label">Available In:</label>
                                   <div class="col-md-6">
                                
                                       <select  onchange="requestSemOption.call(this)"   class="form-control" id="available_in"  id="available_in">
                                           <option value="0">Any</option>
                                           <option value="1">SEMESTER 1</option>
                                           <option value="2">SEMESTER 2</option>
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
                                    <TextArea id="description" class="form-control" name="description"   placeholder ="Enter the material description here"  required autofocus>
                                            {{ old('description') }}
                                    </TextArea>

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
                                    <button type="submit" class="btn btn-primary btn-lg pull-right">
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
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                     </label>
                </div>
             </div>
        </div> 
   --}}       

{{--  --}}
<!-- Default form login -->

               {{-- <div class="row fs">  <!-- The fileinput-button span is used to style the file input field as button -->
				   <div class="col-sm-12">
				  
						<span class="btn btn-success fileinput-button">
							<i class="glyphicon glyphicon-plus"></i>
							<span>Select file(s)...</span>
							
							<input id="upload" type="file" name="upload[]" multiple>
							
						</span>
					
						   <!--
						    The file input field used as target for the file upload widget
						 	<input id="upload" type="file" name="upload[]" multiple>
								 -->	 
					</div>
				</div> 

                <div class="row fs"> 
					    <div class="col-sm-12">
					  	  <span id="btnSubmit" class="btn btn-primary button">
							<i class="glyphicon glyphicon-send"></i>
							<span>Upload Document</span>
							<!-- The file input field used as target for the file upload widget -->
						   </span>
					    </div>
				</div>
                
            --}}
					 
<!-- Default form login -->
{{--  --}}

{{-- Notification section --}}


    {{--
   
     <div class="col-md-6 w3agile-notifications">
      <div class="notifications">
        <!--notification start-->
        
          <header class="panel-heading">
            Notification 
          </header>
          <div class="notify-w3ls">
            <div class="alert alert-info clearfix">
              <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                  <li class="pull-right notification-time">1 min ago</li>
                </ul>
                <p>
                  Urgent meeting for next proposal
                </p>
              </div>
            </div>
            <div class="alert alert-danger">
              <span class="alert-icon"><i class="fa fa-facebook"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                  <li class="pull-right notification-time">7 Hours Ago</li>
                </ul>
                <p>
                  Very cool photo jack
                </p>
              </div>
            </div>
            <div class="alert alert-success ">
              <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender">You have 5 message unread</li>
                  <li class="pull-right notification-time">1 min ago</li>
                </ul>
                <p>
                  <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                </p>
              </div>
            </div>
            <div class="alert alert-warning ">
              <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                  <li class="pull-right notification-time">5 Days Ago</li>
                </ul>
                <p>
                  Next 5 July Thursday is the last day
                </p>
              </div>
            </div>
            <div class="alert alert-info clearfix">
              <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                  <li class="pull-right notification-time">1 min ago</li>
                </ul>
                <p>
                  Urgent meeting for next proposal
                </p>
              </div>
            </div>
            
          </div>
        
        <!--notification end-->
        </div>
      </div>
    --}}




      {{-- <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul> --}}




              {{-- <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="../custom/images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="../custom/images/1.png"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="../custom/images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="../custom/images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul> --}}




               <!-- settings start -->
      {{--
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
             <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
     --}}
        <!-- settings end -->