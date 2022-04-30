@extends('Thelayouts.header&footer')
@section('content')

<div class="container account">
    <div class="accountimage">
        @if ($info->image->first())
            <img src="/image/{{$info->image[0]->path}}">
        @endif
    </div>
    <div class="accountimagelist row">
        @foreach ($info->image as $image)
        <div class="col"><img src="/image/{{$image->path}}" alt="image" width="100px"></div>
        @endforeach
    </div>
    <div class="accountinfo">
        <div>
            <div class="accountname">{{$info->firstname}}</div>
            <div class="accountrole">{{$info->role}}</div>
        </div>
        <div class="accountemail">{{$info->phone}}</div>
    </div>
    <div class="accountlog">
        <a href="{{route('auth.logout')}}" class="btn btn-danger">logout</a>
    </div>
</div>






@endsection
