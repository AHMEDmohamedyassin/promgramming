@extends('Thelayouts.header&footer')
@section('content')

    <div class="container">
        <h1>home page</h1>
        @foreach ($items as $item)
            <h5>name : {{$item->name}}</h5>
            <p>body : {{$item->body}}</p>
            <p>owner : {{$item->owner->firstname}} {{$item->owner->lastname}}</p>
            <p>price : {{$item->price}}</p>
            <a href="{{route('item.page' , $item->id)}}">open</a>
            <hr/>
        @endforeach

    </div>
<span class="pagination">{{ $items->links() }}</span>

@endsection
