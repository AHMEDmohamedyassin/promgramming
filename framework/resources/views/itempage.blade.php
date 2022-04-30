@extends('Thelayouts.header&footer')
@section('content')


<div class="container itempage">

    <h5>name : {{$item->name}}</h5>
    <p>owner : {{$item->owner->firstname}} {{$item->owner->lastname}}</p>
    <p>description : {{$item->body}}</p>
    <p>price : {{$item->price}}</p>


    <ul>
            @foreach ($image as $image)
                <li><img src="/image/{{$image->path}}" alt="image" width="50px"></li>
            @endforeach
    </ul>
    @if ( !in_array($item->id , $items) )
        <form method="POST" action="{{route('paying')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="item">
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="text" name="code" placeholder="enter code here">
            <button class="btn btn-info">Buy NOW</button>
        </form>
    @else
    <div class="paid alert alert-success">paid</div>
    <a class="btn btn-primary" href="{{route('item.page.paid' , $item->id)}}">open</a>   {{--  paid text here  --}}
    @endif


</div>

@endsection
