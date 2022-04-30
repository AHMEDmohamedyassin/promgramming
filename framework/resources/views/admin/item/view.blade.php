@extends('admin.layout.header$footer')
@section('content')

{{-- @foreach ($item as $item)
    <div>{{$item->name}}</div>
    <div>{{$item->body}}</div>
    <div>{{$item->owner->name}}</div>
    <ul>
        @foreach ($item->category as $category)
            <li>{{$category->name}}</li>
        @endforeach
    </ul>
    <a href="{{route('item.update' , $item->id)}}">update</a>
    <a href="{{route('item.delete' , $item->id)}}">delete</a>
@endforeach --}}

<div class="container">


    <div class="row">
        <div class="col-md">
        <a href="{{route('item.create')}}" class="btn btn-primary m-3 translate" langAR='إنشاء عنصر' langEN='Add element'></a>
        </div>
        <form action="{{route('search')}}" method="POST" enctype="multipart/form-data" class="col-md p-3 search-form">
            @csrf
            <input type="hidden" value="item" name="type">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search"  aria-describedby="button-addon2" name="search">
                <button class="btn btn-outline-secondary translate" langAR='بحث' langEN='search' id="button-addon2"></button>
            </div>
        </form>
    </div>


@foreach ($item as $item)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <div>
                    @foreach ($item->image as $image)
                        <img src="/image/{{$image->path}}" alt="" class="card-img">
                    @endforeach
                </div>
                <span class=" translate" langAR='السعر : ' langEN='the price : '></span> <div style="display: inline">{{$item->price}} </div> <span class=" translate" langAR=' ج.م' langEN=' L.E.'></span><br>
                <p class="card-text">{{$item->body}}</p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <span class=" translate" langAR='الناشر : ' langEN='Publisher : '></span>
                        <div class="owner">{{$item->owner->firstname}} {{$item->owner->lastname}}</div>
                    </div>
                    <div class="col">
                        <div class="category">
                            <span class=" translate" langAR='الأقسام : ' langEN='Categories : '></span>
                            <ul>
                                @foreach ($item->category as $category)
                                    <li>{{$category->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                        <div class="links">
                        <a href="{{route('item.update' , $item->id)}}" class="btn btn-primary translate" langAR='تعديل' langEN='update'></a>
                        <a href="{{route('item.delete' , $item->id)}}" class="btn btn-danger translate" langAR='حذف' langEN='delete'></a>
                    </div>
            </div>
        </div>
@endforeach

</div>

@endsection
