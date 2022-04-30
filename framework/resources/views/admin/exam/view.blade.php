@extends('admin.layout.header$footer')
@section('content')

<div class="container examchoose">

    <div class="row">
        <div class="col-md">
            <a href="{{route('exam.add.admin')}}" class="btn btn-primary m-3 translate" langAR='إضافة إمتحان' langEN='add exam'></a>
        </div>
        <form action="{{route('search')}}" method="POST" enctype="multipart/form-data" class="col-md p-3 search-form">
            @csrf
            <input type="hidden" value="exam" name="type">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search"  aria-describedby="button-addon2" name="search">
                <button class="btn btn-outline-secondary translate" langAR='بحث' langEN='search' id="button-addon2"></button>
            </div>
        </form>
    </div>

    @foreach ($exam as $examination)

        <div class="card">
            <div class="card-body">
                <h5 class="">{{$examination->title}}</h5>
                <div class="row">
                    <div class="col">
                        <div><span class=" translate" langAR='سعر الإمتحان : ' langEN='exam price : '></span>{{$examination->price}} <span class=" translate" langAR=' ج.م' langEN=' L.E.'></span></div>
                        <div><span class=" translate" langAR='الصف الدراسي : ' langEN='students : '></span>{{$examination->student}}</div>
                    </div>
                    <div class="col">
                        <div><span class=" translate" langAR='بداية الإمتحان : ' langEN='exam start : '></span>{{$examination->start}}</div>
                        <div><span class=" translate" langAR='نهاية الإمتحان : ' langEN='exam end : '></span>{{$examination->end}}</div>
                        <div><span class=" translate" langAR='زمن الإمتحان : ' langEN='exam duration : '></span>{{$examination->duration}} <span class=" translate" langAR=' دفيقة' langEN=' minutes'></span></div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{route('exam.update' , $examination->id )}}" class="btn btn-info translate" langAR='تعديل' langEN='update'></a>
                <a href="{{route('exam.delete' , $examination->id )}}" class="btn btn-danger translate" langAR='حذف' langEN='delete'></a>
            </div>
        </div>

    @endforeach


</div>


@endsection
