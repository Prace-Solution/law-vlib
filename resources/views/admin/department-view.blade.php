    <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Departments Table
                        </div>
                        <div class="row w3-res-tb">
                            <div class="col-sm-5 m-b-xs">
                            {{-- TODO: action to apply here --}}
                                <span>Search By: </span>
                                <select id='search_option' class="input-sm form-control w-sm inline v-middle">
                                  
                                    <option value="1">Name</option>
                                    <option value="2">Slug</option>
                                    <option value="3">Description</option>
                                </select>
                                <button class="btn btn-sm btn-default" hidden>Apply</button>
                            </div>
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-3">
                             {{-- TODO: search action goes here --}}
                                <div class="input-group">
                                    <input type="text" class="input-sm form-control" placeholder="Search" name="search" id="search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        {{-- <th style="width:20px;">
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox"><i></i>
                                            </label>
                                        </th> --}}
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th style="width:30px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ( $departments as $department )
                                      <tr>
                                        <td><span class="text-ellipsis"> {{ $department->id }}</span></td>
                                        <td><span class="text-ellipsis"> {{ $department->name }}</span></td>
                                        <td><span class="text-ellipsis"> {{ $department->slug }}</span></td>
                                        <td><span class="text-ellipsis"> {{ $department->description }}</span></td>

                                        <td>
                                            <a href="" id="{{ $department->id }}" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
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

                    url : '/admin/search/department',

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