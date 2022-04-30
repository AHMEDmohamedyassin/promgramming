@extends('Thelayouts.header&footer')
@section('content')

    <div class="container">
        <h1>my courses</h1>
        @foreach ($items as $item)
            <h5>name : {{$item->name}}</h5>
            <p>body : {{$item->body}}</p>
            <p>owner : {{$item->owner->firstname}} {{$item->owner->lastname}}</p>
            <a class="btn btn-primary" href="{{route('item.page.paid' , $item->id)}}">open</a>
            <hr/>
        @endforeach
    </div>

@endsection
