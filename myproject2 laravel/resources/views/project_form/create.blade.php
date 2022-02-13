@include('layouts.apps')

@section('content')

{{-- <form method="POST" action="/Post">
    <input type="text" name="name" placeholder="name">
    <input type="submit" name="submit">
    @csrf
</form> --}}

{!! Form::open(['method'=>'POST' , 'action' => 'App\Http\Controllers\Project_form@store' ,'files' => true ]) !!}

{!! Form::label('name','name:') !!}
{!! Form::text('name' , null , ['class' => 'form-control']) !!} <br>
{!! Form::file('file' , ['class' => 'form-control']) !!} <br>
{!! Form::submit('insert' , ['class' => 'btn btn-primary']) !!} <br>

{!! Form::close() !!}

{{-- الأخطاء --}}

@if (count($errors) > 0)  
    @foreach ($errors->all() as $errors)
        <h3>{{ $errors }}</h3>
    @endforeach
@endif

<hr>

<a href="/Post"> الرئيسية </a>