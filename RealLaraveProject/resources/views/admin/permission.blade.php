<x-admin-master>
    @section('admin_content')
    <h3>permission</h3>
    <div class="row container">
        <div class="col-sm-3">
            <form method="POST" action="{{route('permission.add')}}">
                @csrf
                <input type="text" name="name" placeholder="enter permission name" class="form-control"><br>
                <button class="btn btn-success">submit</button>
            </form>
            @error('name')
                <strong class='txt-danger'>{{$message}}</strong>
            @enderror
        </div>
        <div class="col-sm-9">

            <div class="card shadow mb-4">
                <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>permission_id</th>
                        <th>permission name</th>
                        <th>permisson slug</th>
                        <th>roles</th>
                        <th>created_at</th>
                        <th>delete</th>
                        {{-- <th>update</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($permission as $permission)
                        <tr>
                            <td>{{$permission->id}}</td>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->slug}}</td>
                            <td>
                                @foreach ($permission->role as $role)
                                    {{$role->name}} <br>
                                @endforeach
                            </td>
                            <td>{{$permission->created_at}}</td>
                            <td>
                                <form method="POST" action="{{route('permission.delete' , $permission->id)}}">
                                    @csrf @method('delete')
                                    <button class="btn btn-danger">delete</button>
                                </form>
                            </td>
                            {{-- <td><a href="{{route('role.update' , $role->id )}}" class="btn btn-primary">update</a></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div></div>
        </div>
    </div>
    @endsection
</x-admin-master>
