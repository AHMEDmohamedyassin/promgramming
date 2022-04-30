@extends('Thelayouts.header&footer')
@section('content')

<div class="container itempagepaid">
    <h2>item page</h2>
<a href="{{route('mainpage')}}" class="btn btn-primary">main page</a>
<h5>name : {{$item->name}}</h5>
<p>body : {{$item->body}}</p>
<p>owner : {{$item->owner->firstname}} {{$item->owner->lastname}}</p>
<ul>
    @foreach ($item->image as $image)
    <li>
            <img src="/image/{{$image->path}}" alt="image" width="50px">
    </li>
    @endforeach
</ul>
</div>

@endsection
