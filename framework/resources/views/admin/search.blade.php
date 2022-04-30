@extends('admin.layout.header$footer')
@section('content')

<div class="container search-page">


    <div class="row">
        <form action="{{route('search')}}" method="POST" enctype="multipart/form-data" class="col p-3 search-form">
            @csrf
            <input type="hidden" value="{{$type}}" name="type">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search"  aria-describedby="button-addon2" name="search">
                <button class="btn btn-outline-secondary"  id="button-addon2">search</button>
            </div>
        </form>
    </div>

    @if ($type == 'code')
    <div class="row codeview">
        @foreach ($result as $cod)
        <div class="col">
            <div class="card">
                    <div><span>the code : </span>{{$cod->code}}</div>
                    <div><span>code value : </span>{{$cod->value}}</div>
                    <div class="button"><a href="{{route('code.delete' , $cod->id)}}" class="btn btn-danger">delete</a></div>
            </div>
        </div>
        @endforeach
        </div>
    @else
    @foreach ($result as $item)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                @if ($type == 'user')
                <div class="row">
                    <div class="col">
                        <span>Name : </span>
                        <p class="card-text">{{$item->firstname .' '. $item->lastname}}</p><br>
                        <span>phone : </span>
                        <p class="card-text">{{$item->phone}}</p><br>
                        @if ($item->email)
                        <span>email : </span>
                        <p class="card-text">{{$item->email}}</p>
                        @endif
                    </div>
                    <div class="col">
                        @foreach ($item->image as $image)
                            <img src="/image/{{$image->path}}" alt="" class="card-img">
                        @endforeach
                    </div>
                </div>
                @elseif ($type == 'item')
                <span>the price is : </span> <div style="display: inline">{{$item->price}} </div> <span> L.E</span><br>
                <p class="card-text">{{$item->body}}</p>
                @elseif ($type == 'exam')
                <h5 class="">{{$item->title}}</h5>
                <div class="row">
                    <div class="col">
                        <div class="">exam price : {{$item->price}} L.E.</div>
                        <div class="">students : {{$item->student}}</div>
                    </div>
                    <div class="col">
                        <div class="">exam start : {{$item->start}}</div>
                        <div class="">exam end : {{$item->end}}</div>
                        <div class="">exam duration : {{$item->duration}}</div>
                    </div>
                </div>
                @endif
            </div>
            <div class="card-footer">
                        <div class="links">
                        <a href="{{route( $type . '.update' , $item->id)}}" class="btn btn-primary">update</a>
                        <a href="{{route( $type . '.delete' , $item->id)}}" class="btn btn-danger">delete</a>
                    </div>
            </div>
        </div>
@endforeach

@endif

</div>


@endsection
