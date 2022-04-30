@extends('admin.layout.header$footer')
@section('content')

<div class="container">
    <form method="post" action="{{route('user.edite')}}" enctype="multipart/form-data" class="form-control form">
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}" class="form-control">
        <input type="text" name="firstname" placeholder="{{$user->firstname}}" class="form-control">
        <input type="text" name="lastname" placeholder="{{$user->lastname}}" class="form-control">
        <input type="text" name="role" placeholder="{{$user->role}}" class="form-control">

        <input list="student" name="grad" class="form-control" id="grad" placeholder="@if ($user->StudentClass){{$user->StudentClass->class}}@else enter user class here @endif
        ">
            <datalist id="student">
                <option value="secondary1">
                <option value="secondary2">
                <option value="secondary3">
                <option value="preparatory1">
                <option value="preparatory2">
                <option value="preparatory3">
                <option value="primary1">
                <option value="primary2">
                <option value="primary3">
                <option value="primary4">
                <option value="primary5">
                <option value="primary6">
            </datalist>

        <input type="text" name="email" placeholder="@if ($user->email){{$user->email}}@else no email given @endif" class="form-control">
        <input type="text" name="phone" placeholder="{{$user->phone}}" class="form-control">
        <input type="text" name="password" placeholder="password" class="form-control">
        <input type="file" name="image[]" multiple="multiple" class="form-control"><br>
        <button class="btn btn-primary">submit</button>
    </form>

        <form method="post" action="{{route('images.delete')}}" enctype="multipart/form-data" class="form">
            @csrf
            <div class="row">
                @foreach ($user->image as $image)
                    <div class="col-md-3 col-lg-2 col-sm-4 card m-2">
                        <img src="/image/{{$image->path}}" alt="" class="card-img-top m-auto">
                        <div class="card-body">
                            <a href="{{route('image.delete' , $image->id)}}" class="btn btn-danger m-auto">delete</a>
                            <input type="checkbox" name="id[]" value="{{$image->id}}" class="checkbox m-auto">
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-danger">image delete</button>
        </form>
</div>
@endsection
