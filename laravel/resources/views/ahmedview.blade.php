@extends('layout.headerfooterbootstrapland')

@section('content')

@if ($id == 5)

    <p>the admin is {{$name}}</p>
    
@elseif ($id == 6)

    <p>the id  is not admin </p>

@else

    <p>{{$name}} is not admin</p>

@endif
    <p>{{$id}}</p>
    <p>{{$name}}</p>
    <p>{{$age}}</p>


<?php $array = array('ahemd' , 'mohamed' , 'yassin'); 
      $array2=array();
?>
<h1>the array</h1>

@foreach ($array as $array)

    <p>{{$array}}</p>    

@endforeach

@forelse ($array2 as $array)  <!-- لاستعراض المصفوفة إذا كان بها محتوي و يعرض الرسالة إذا لم يكن بها محتوي --> 
    <p>{{$array}}</p>
@empty
    <p>the array is empty</p>
@endforelse

@stop
