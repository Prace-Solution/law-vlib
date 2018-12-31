 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Department</div>
                    <div class="panel-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                       @endif

                        {{-- method="POST" enctype="multipart/form-data"  action="" --}}
                        <form  class="form-horizontal" role="form" >
                            {{ csrf_field() }}

                            <br><br>
                            
                        
                           
                             <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                   
                                   <label for="name" class="col-md-4 control-label">Name</label>
                                   <div class="col-md-6">
                                       <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
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

                             <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <TextArea id="description" class="form-control" name="description"   placeholder ="Enter the description here"  required autofocus>
                                            {{ old('description') }}
                                    </TextArea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button id='add-law-department-btn' type="submit" class="btn btn-primary btn-lg pull-right">
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


 <script>
   ($("#add-law-department-btn")).on("click", function(event) {
       
        var f = $("form")[0];

        if(f.checkValidity())
        {
            event.preventDefault();
            event.stopPropagation();
            var url = "add/department";
            var data = new FormData($("form")[0]);
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
                        $("form")[0].reset();
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