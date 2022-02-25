<x-admin-master>
    @section('admin_content')
    <h3>hello {{$user->name}}</h3>

    <div class="col-sm-2">
        <img src="https://source.unsplash.com/QAB-WJcbgJk/60x60" width="100" alt="image">
    </div><br>

    <div class="col-sm-6">

        <form action="{{route('user.update' , $user->id)}}" method="POST">
            @csrf
            @method('PUT')
            {{-- <div class="form-group">
                <input type="file">
            </div> --}}
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="form-grou">
                <label for="name" >name</label>
                <input type="name" value="{{$user->name }} " id="name" class="form-control
                {{$errors->has('name') ? 'is-invalid' : '' }}" name="name">
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror



                <label for="email" >email</label>

                <input
                type="email"
                value="{{$user->email }} "
                id="email"
                class="form-control @error('email') is-invalid @enderror"
                name="email">

                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror



                <label for="pass" >password</label>
                <input type="password"  id="pass" class="form-control" name="password" value="{{$user->password}}">
                @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="passc" >confirm password</label>
                <input type="password"   id="passc" class="form-control" name="password_confirmation" value="{{$user->password}}">
                @error('password_confirmation')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

            </div><br>

            {{-- <button class="btn btn-danger">submit</button> --}}
            <input type="submit">
        </form>
    </div>
    @can('view' , $user)


    <div class="card shadow mb-4">
        <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>check</th>
                <th>role name</th>
                <th>attach</th>
                <th>deattach</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($role as $role)
                <tr>
                    <td><input type="checkbox"
                        @foreach ($user->role as $user_role)
                            @if ($role->name == $user_role->name)
                            checked
                            @endif
                        @endforeach
                        ></td>
                    <td>{{$role->name}}</td>
                    <td>
                        <form method="POST" action="{{route('attach' , $user->id )}}">
                            @csrf @method('put')
                            <input type="hidden" name="role" value="{{$role->id}}">
                            <button class="btn btn-primary">attach</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('deattach' , $user->id)}}">
                            @csrf @method('delete')
                            <input type="hidden" name="role" value="{{$role->id}}">
                            <button class="btn btn-danger">deattach </button></td>
                        </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div></div>
@endcan
    @endsection
</x-admin-master>
