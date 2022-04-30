@extends('admin.layout.header$footer')
@section('content')

<div class="container exam-detail">
    <h3>create an exam</h3>
    <form method="post" action="{{route('exam.save.admin')}}" enctype="multipart/form-data">
        @csrf
        <label for="text" class="form-label">enter title here</label>
        <input type="text" name="title" class="form-control" id="text" class="form-control">

        <label for="grad" class="form-label">grade</label>
        <input list="student" name="student" class="form-control" id="grad">
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
        <input type="number" class="form-control" name="price" id="price">

        <label for="duration" class="form-label">duration in minutes</label>
        <input type="number" class="form-control" name="duration" id="duration">

        <label for="startdate" class="form-label">start date</label>
        <input type="date" class="form-control" name="start" id="startdate">

        <label for="enddate" class="form-label">end date</label>
        <input type="date" class="form-control" name="end" id="enddate">

        <div class="row container">
            <div class="col">
                <input type="radio" name="state" value="1" id="trueRadio">
                <label class="form-label" for="trueRadio">with grade</label>
            </div>
            <div class="col">
                <input type="radio" name="state" value="0" id="falseRadio">
                <label class="form-label" for="falseRadio">without grade</label>
            </div>
        </div>

        <input type="hidden" name="exam" id="examContent">

        <button class="exam-submit" style="display:none" id="examButton"></button>
    </form>

    <div class="theexam">
        {{-- يوجد عكة هنا بالجافا اسكربت  --}}


        {{-- <div class="collection">
            <div class="row">
                <label for="question" class="form-label">the question</label>
                <div class=" col-md-10">
                    <textarea class="form-control" rows="3" id="question">enter question here</textarea>
                </div>
                <div class=" col-md-2">
                    <button class="btn btn-danger question-delete-button">delete</button>
                </div>
            </div>
            <ul class="list-group" id="answer">
                <label for="answer" class="form-label">the answers</label>
                <li>
                    <div class="row">
                        <div class="col-md-1">
                            <input type="checkbox">
                        </div>
                        <div class=" col-md-9">
                                <input type="text" class="form-control">
                        </div>
                        <div class=" col-md-2">
                            <button class="btn btn-danger answer-delete-button">delete</button>
                        </div>
                    </div>
                </li>
            </ul>
            <button class="btn btn-primary answer answer-add-button">add answer</button>
        </div> --}}


    </div>
    <button class="btn btn-secondary question question-button">add question</button>
    <button class="btn btn-success submit">submit</button>

</div>


@endsection
