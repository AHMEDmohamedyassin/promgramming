@extends('admin.layout.header$footer')
@section('content')

{{-- @foreach ($user as $user)
    <div>{{$user->name}}</div>
    <div>{{$user->email}}</div>
    <div>{{$user->role}}</div>
    <a href="{{route('user.update' , $user->id)}}">update</a>
    <a href="{{route('user.delete' , $user->id)}}">delete</a>
@endforeach --}}


<div class="container">

    <div class="row">
        <div class="col-md">
            <a href="{{route('user.create')}}" class="btn btn-primary m-3 translate" langAR='إنشاء مستخدم' langEN='Add user'></a>
        </div>
        <form action="{{route('search')}}" method="POST" enctype="multipart/form-data" class="col-md p-3 search-form">
            @csrf
            <input type="hidden" value="user" name="type">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search"  aria-describedby="button-addon2" name="search">
                <button class="btn btn-outline-secondary translate" langAR='بحث' langEN='search' id="button-addon2"></button>
            </div>
        </form>
    </div>

@foreach ($user as $user)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class=" translate" langAR='الاسم : ' langEN='Name : '></span>
                        <p class="card-text">{{$user->firstname .' '. $user->lastname}}</p><br>
                        <span class=" translate" langAR='الهاتف : ' langEN='Phone : '></span>
                        <p class="card-text">{{$user->phone}}</p><br>
                        @if ($user->email)
                        <span class=" translate" langAR='البريد الإليكتروني : ' langEN='email : '></span>
                        <p class="card-text">{{$user->email}}</p>
                        @endif
                    </div>
                    <div class="col">
                        @foreach ($user->image as $image)
                            <img src="/image/{{$image->path}}" alt="" class="card-img">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <span  class="translate" langAR='الدور : ' langEN='Role : '></span>
                <div class="role">{{$user->role}}</div>
                <div class="links">
                    <a href="{{route('user.update' , $user->id)}}" class="btn btn-primary translate" langAR='تعديل' langEN='Update'></a>
                    <a href="{{route('user.delete' , $user->id)}}" class="btn btn-danger translate" langAR='حذف' langEN='Delete'></a>
                </div>
            </div>
        </div>
@endforeach
</div>


@endsection
