@extends('admin.layout.header$footer')
@section('content')
<div class="container codeview">


    <div class="row">
        <div class="col-md">
            <a href="{{route('code.create')}}" class="btn btn-primary m-3 translate" langAR='إضافة كود' langEN='add codes'></a>
        </div>
        <form action="{{route('search')}}" method="POST" enctype="multipart/form-data" class="col-md p-3 search-form">
            @csrf
            <input type="hidden" value="code" name="type">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search"  aria-describedby="button-addon2" name="search">
                <button class="btn btn-outline-secondary translate" langAR='بحث' langEN='search' id="button-addon2"></button>
            </div>
        </form>
    </div>


    <div class="row">
    @foreach ($code as $cod)
    <div class="col">
        <div class="card">
                <div><span class=" translate" langAR='الكود : ' langEN='the code : '></span>{{$cod->code}}</div>
                <div><span class=" translate" langAR='القيمة : ' langEN='code value : '></span>{{$cod->value}}</div>
                <div class="button"><a href="{{route('code.delete' , $cod->id)}}" class="btn btn-danger">delete</a></div>
        </div>
    </div>
    @endforeach
    </div>
</div>

@endsection
