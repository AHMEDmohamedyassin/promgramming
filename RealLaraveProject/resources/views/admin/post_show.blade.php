<x-admin-master>
    @section('admin_content')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                @if(session('message'))
                <div class="alert-danger text-danger" style="width: fit-content; padding: 5px; border-radius: 5px">
                    {{ session('message') }}
                    {{session(['message' => ''])}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>image</th>
                            <th>content tip</th>
                            <th>created_at</th>
                            <th>user_id</th>
                            <th>user_name</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>image</th>
                            <th>content tip</th>
                            <th>created_at</th>
                            <th>user_id</th>
                            <th>user_name</th>
                            <th>Update</th>
                        </tr>
                        </tfoot>
                       <tbody>
                       @foreach($post as $post)
                          <tr>
                              <td><a href="{{route('post' , $post->id)}}">{{$post->id}}</a></td>
                              <td>{{$post->title}}</td>
                              <td><img src="{{asset($post->image)}}" height="40px"></td>
                              <td>{{Str::limit($post->content , 30)}}</td>
                              <td>{{$post->created_at->diffForHumans()}}</td>
                              <td>{{$post->user->id}}</td>
                              <td>{{$post->user->name}}</td>
                              <td>
                                  @can('view' , $post)
                             <a href="{{route('post.update' , $post->id)}}"
                              style="background: gray;
                               padding: 5px ;
                                border-radius: 2px;
                                 width: fit-content;
                                  color:black;
                                    text-decoration: none;
                                      text-align: center">Update</a>
                                  @endcan
                              </td>
                          </tr>
                       @endforeach
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
    @section('script')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection
</x-admin-master>
