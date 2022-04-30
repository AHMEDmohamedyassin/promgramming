@extends('Thelayouts.header&footer')
@section('content')
{{-- <input type="hidden" value="{{$exam->exam}}" id="theexamstring"> --}}
<script>
    let ExamStringFormDatabase = '{{$exam->exam}}';
    let Examduration = {{$exam->duration}} * 60000 ;
</script>

<form method="POST" action="{{route('grade.save')}}" enctype="multipart/form-data" id="formforexam">
    @csrf
    <input type="hidden" name="grade" id="examgrade">
    <input type="hidden" name="user" value="{{Auth()->user()->id}}">
    <input type="hidden" name="exam" value="{{$exam->id}}">
    <button id="sendgrade" hidden></button>
</form>

<div class="container">
    <div class="exam_details row">
        <div class="col">title : {{$exam->title}}</div>
        <div class="col duration">duration : {{$exam->duration}} minutes</div>
        <div class="col">grade : {{$exam->student}}</div>
    </div>
</div>

<div class="container exam-container">
    <div class="the-exam">
        {{-- <div class="part container">
            <label class="form-label">the question</label>
            <p class="the-question">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quisquam, vero consequatur optio ipsa dolores rerum delectus, tempore voluptatum non voluptatibus? Corporis deserunt, natus in facilis tempore voluptatum. Accusamus, dolorum?</p>
            <label class="form-label">choose the answer</label>
            <ul class="the-answer">
                <li class="row">
                    <input type="checkbox" class="col-1">
                    <p class="answer col-11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cumque assumenda amet voluptatem reiciendis impedit, voluptate aspernatur possimus quidem saepe obcaecati delectus nisi nihil similique laboriosam sed consectetur, itaque quae.</p>
                </li>
                <li class="row">
                    <input type="checkbox" class="col-1">
                    <p class="answer col-11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cumque assumenda amet voluptatem reiciendis impedit, voluptate aspernatur possimus quidem saepe obcaecati delectus nisi nihil similique laboriosam sed consectetur, itaque quae.</p>
                </li>
                <li class="row">
                    <input type="checkbox" class="col-1">
                    <p class="answer col-11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cumque assumenda amet voluptatem reiciendis impedit, voluptate aspernatur possimus quidem saepe obcaecati delectus nisi nihil similique laboriosam sed consectetur, itaque quae.</p>
                </li>
            </ul>
        </div> --}}
    </div>
    <button class="btn btn-info" id="exam-submit">submit</button>
</div>

<script>
    document.addEventListener('contextmenu' , function(e){
    e.preventDefault();
});
    window.addEventListener('beforeunload', (event) => {
    event.preventDefault();
    event.returnValue = '';
});
setTimeout(()=>{
    window.addEventListener('beforeunload', (event) => {
    event.Default();
});
document.getElementById('exam-submit').click();
}
    ,Examduration
);
</script>

@endsection
