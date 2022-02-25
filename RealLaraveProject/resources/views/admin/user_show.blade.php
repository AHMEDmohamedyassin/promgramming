<x-admin-master>
    @section('admin_content')
    <h2>show users</h2>
    @if(session('message'))
    <div class="alert alert-danger text-danger" style="width: fit-content; padding: 5px; border-radius: 5px; margin:20px">
        {{ session('message') }}
        {{session(['message' => ''])}}
    </div>
    @endif
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>user_role</th>
                            <th>created_at</th>
                            <th>posts id</th>
                            <th>update</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>user_role</th>
                            <th>created_at</th>
                            <th>posts id</th>
                            <th>update</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($user as $user)
                            <tr>
                                <td><a href="{{ route('profile.admin' , $user->id ) }}">{{$user->id}}</a></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->password}}</td>
                                <td>
                                    @foreach ($user->role as $role)
                                        {{$role->name}}
                                    @endforeach
                                </td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>
                                    @foreach ($user->post as $post)
                                        <a href="{{route('post.update' , $post->id )}}" >
                                            {{$post->id}}
                                        </a>
                                    @endforeach
                                </td>
                                <td>
                                    <form action="{{route('user.delete' , $user->id)}}" method="post">
                                        @csrf  @method('Delete')
                                        <button class="btn btn-danger">delete</button>
                                    </form>
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
