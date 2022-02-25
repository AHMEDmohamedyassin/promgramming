<x-admin-master>
    @section('admin_content')
    <h3>role</h3>
    <div class="row container">
        <div class="col-sm-3">
            <form method="POST" action="{{route($redirection)}}">
                @csrf
                @if ($redirection == 'role.edit')
                <input type="hidden" name="id" value="{{$id}}">
                <h1 class="alert">Editing {{$role_name}}</h1>
                @endif
                <input type="text" name="name" placeholder="enter role name" class="form-control"><br>

                <input list="permissions" name="permission" class="form-control"><br>
                <datalist id="permissions">
                    @foreach ($permission as $permission)
                        <option value="{{$permission->name}}">
                    @endforeach
                </datalist>

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
                        <th>role_id</th>
                        <th>role name</th>
                        <th>role slug</th>
                        <th>permissions</th>
                        <th>created_at</th>
                        <th>delete</th>
                        <th>update</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($role as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->slug}}</td>
                            <td>
                                @foreach ($role->permission as $permission)
                                    {{$permission->name}}
                                    <a href="{{route('delete.role.permission' , [$role->id , $permission->id])}}"
                                        class="btn btn-danger" width='5px'
                                        style="padding: 5px; font-size:12px; margin:3px;">delete
                                    </a> <br>
                                @endforeach
                            </td>
                            <td>{{$role->created_at}}</td>
                            <td>
                                <form method="POST" action="{{route('role.delete' , $role->id)}}">
                                    @csrf @method('delete')
                                    <button class="btn btn-danger">delete</button>
                                </form>
                            </td>
                            <td><a href="{{route('role.update' , $role->id )}}" class="btn btn-primary">update</a></td>
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
