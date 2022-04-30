@extends('admin.layout.header$footer')
@section('content')

<div class="container exam-detail">
    <h3>create an exam</h3>
    <form method="post" action="{{route('exam.edite.admin')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$exam->id}}" name="id">
        <input type="hidden" value="{{Auth()->user()->id}}" name="user">

        <label for="text" class="form-label">enter title here</label>
        <input type="text" name="title" class="form-control" id="text" class="form-control" placeholder="{{$exam->title}}">

        <label for="grad" class="form-label">grade</label>
        <input list="student" name="student" class="form-control" id="grad" placeholder="{{$exam->student}}">
        <datalist id="student">
            <option value="secondary1">
            <option value="secondary2">
            <option value="secondary3">
            <option value="preparatory1">
            <option value="preparatory2">
            <option value="preparatory3">
            <option value="primary1">
            <option value="primary2">
            <option value="primary3">
            <option value="primary4">
            <option value="primary5">
            <option value="primary6">
        </datalist>

        <label for="price" class="form-label">the price</label>
        <input type="number" class="form-control" name="price" id="price" placeholder="{{$exam->price}}">

        <label for="duration" class="form-label">duration in minutes</label>
        <input type="number" class="form-control" name="duration" id="duration"  placeholder="{{$exam->duration}}">

        <label for="startdate" class="form-label">start date</label>
        <input type="date" class="form-control" name="start" id="startdate">

        <label for="enddate" class="form-label">end date</label>
        <input type="date" class="form-control" name="end" id="enddate">
        <br>

        <div class="row container">
            <div class="col">
                <input type="radio" name="state" value="1" id="trueRadio"
                @if ($exam->state == '1')
                checked
                @endif
                >
                <label class="form-label" for="trueRadio">with grade</label>
            </div>
            <div class="col">
                <input type="radio" name="state" value="0" id="falseRadio"
                @if ($exam->state == '0')
                    checked
                @endif
                >
                <label class="form-label" for="falseRadio">without grade</label>
            </div>
        </div>

        <input type="hidden" name="exam" id="examContent">

        <button class="btn btn-success"  id="examButton">update</button>
    </form>


</div>


@endsection
