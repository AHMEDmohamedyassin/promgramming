@extends('admin.layout.header$footer')
@section('content')

<div class="container">
    <form method="post" action="{{route('item.save')}}" enctype="multipart/form-data" class="form-control form">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="item name here">
        <input type="text" name="body" class="form-control" placeholder="body">
        <input type="number" name="price" class="form-control" placeholder="price in L.E.">
        <input type="file" name="image[]" multiple="multiple" class="form-control">
        <input type="file" name="imagepaid[]" multiple="multiple" class="form-control">

        @foreach ($category as $category)
            <div>
                <input type="checkbox" value="{{$category->id}}" name="category[]" class="checkbox">
                <label>{{$category->name}}</label>
                <a href="{{route('category.delete' , $category->id)}}" class="btn btn-danger"> delete </a>
            </div>
        @endforeach
        <button class="btn btn-primary">submit</button>
    </form>

    <form method="POST" action="{{route('category.add')}}" enctype="multipart/form-data" class="form-control form">
        @csrf
        <label>add category</label>
        <input type="text" name="name" class="form-control" placeholder="category name here">
        <button class="btn btn-primary">add category</button>
    </form>
</div>

@endsection
