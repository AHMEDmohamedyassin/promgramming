@extends('admin.layout.header$footer')
@section('content')

<div class="container">
    <form method="post" action="{{route('item.edite')}}" enctype="multipart/form-data" class="form-control form">
        @csrf
        <input type="hidden" name="id" value="{{$item->id}}" class="form-control">
        <input type="text" name="name" placeholder="{{$item->name}}" class="form-control">
        <input type="text" name="body" placeholder="{{$item->body}}" class="form-control">
        <input type="number" name="price" placeholder="{{$item->price}}" class="form-control">
        <input type="file" name="image[]" multiple="multiple" class="form-control">
        <input type="file" name="imagepaid[]" multiple="multiple" class="form-control">
        @foreach ($category as $category)
            <div>
                <input type="checkbox" value="{{$category->id}}" name="category[]"
                @foreach ($item->category as $categor)
                    @if ($categor->name == $category->name)
                        checked
                    @endif
                @endforeach
                class="checkbox">
                <label>{{$category->name}}</label>
            </div>
        @endforeach

        <button class="btn btn-primary">submit</button>
    </form>

        @if ($item->image != '[]')
        <form method="post" action="{{route('images.delete')}}" enctype="multipart/form-data" class="form">
            @csrf
            <div class="row">
            @if ($item->image()->where(['freeorpaid' => 0])->get() != '[]')
            <div class="alert alert-info p-3">free media</div>
            @foreach ($item->image()->where(['freeorpaid' => 0])->get() as $image)
                <div class="col-md-3 col-lg-2 col-sm-4">
                    {{-- <img src="/image/{{$image->path}}" alt="image" width="100px">
                    <a href="{{route('image.delete' , $image->id)}}">delete</a>
                    <input type="checkbox" name="id[]" value="{{$image->id}}"> --}}
                    <div class="card">
                        <img src="/image/{{$image->path}}" alt="" class="card-img-top m-auto">
                        <div class="card-body">
                            <a href="{{route('image.delete' , $image->id)}}" class="btn btn-danger m-auto">delete</a>
                            <input type="checkbox" name="id[]" value="{{$image->id}}" class="checkbox m-auto">
                        </div>
                    </div>
                </div>
            @endforeach
            @endif

            @if ($item->image()->where(['freeorpaid' => 1])->get() != '[]')
            <div class="alert alert-info p-3">paid media</div>
            @foreach ($item->image()->where(['freeorpaid' => 1])->get() as $image)
                <div class="col-md-3 col-lg-2 col-sm-4">
                    {{-- <img src="/image/{{$image->path}}" alt="image" width="100px">
                    <a href="{{route('image.delete' , $image->id)}}">delete</a>
                    <input type="checkbox" name="id[]" value="{{$image->id}}"> --}}
                    <div class="card">
                        <img src="/image/{{$image->path}}" alt="" class="card-img-top m-auto">
                        <div class="card-body">
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
