@include('layouts.apps')

@section('content')

<h1>edit post</h1>

{{-- <form method="POST" action="/Post/{{$post->id}}">

    <input type="hidden" name="_method" value="PUT">

    <input type="text" name="name" placeholder="name" value="{{$post->name}}">
    <input type="submit" name="submit">
    @csrf
</form>
<br><hr><br>
<h1>deleting</h1>

<form  method="POST" action="/Post/{{$post->id}}">
    <input type="hidden"  name="_method"  value="DELETE">
    <input type="submit">
    @csrf
</form> --}}

{!! Form::model($post , ['method'=>'PATCH' , 'action' => ['App\Http\Controllers\Project_form@update' , $post->id ]]) !!}

{!! Form::label('name','name:') !!}
{!! Form::text('name' , null , ['class' => 'form-control']) !!}
{!! Form::submit('insert' , ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


{!! Form::open(['method'=>'DELETE' , 'action' => ['App\Http\Controllers\Project_form@destroy' , $post->id]]) !!}

{!! Form::submit('delete' , ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

<hr>

<a href="/Post"> الرئيسية </a> <br><br><br>
<a href="/Post/create"> إضافة </a>