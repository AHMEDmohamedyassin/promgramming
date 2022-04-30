@extends('admin.layout.header$footer')
@section('content')

<div class="container">

    @if ($freeimage != '[]' || $paidimage != '[]')
    <form method="post" action="{{route('images.delete')}}" enctype="multipart/form-data" class="form">
        @csrf
        <div class="row">
        @if ($freeimage != '[]')
        <div class="alert alert-info p-3">free media</div>
        @foreach ($freeimage as $image)
            <div class="col-md-3 col-lg-2 col-sm-4">
                <div class="card">
                    <img src="/image/{{$image->path}}" alt="" class="card-img-top m-auto">
                    <div class="card-body">
                        <a class="btn btn-info" href="{{route('item.update' , $image->imagable->id)}}">{{$image->imagable->name}}</a>
                        <a href="{{route('image.delete' , $image->id)}}" class="btn btn-danger m-auto">delete</a>
                        <input type="checkbox" name="id[]" value="{{$image->id}}" class="checkbox m-auto">
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        @if ($paidimage != '[]')
        <hr>
        <div class="alert alert-info p-3">paid media</div>
        @foreach ($paidimage as $image)
            <div class="col-md-3 col-lg-2 col-sm-4">
                <div class="card">
                    <img src="/image/{{$image->path}}" alt="" class="card-img-top m-auto">
                    <div class="card-body">
                        <a class="btn btn-info" href="{{route('item.update' , $image->imagable->id)}}">{{$image->imagable->name}}</a>
                        <a href="{{route('image.delete' , $image->id)}}" class="btn btn-danger m-auto">delete</a>
                        <input type="checkbox" name="id[]" value="{{$image->id}}" class="checkbox m-auto">
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        </div>
        <button class="btn btn-danger">submit delete</button>
    </form>
    @endif

</div>


@endsection
