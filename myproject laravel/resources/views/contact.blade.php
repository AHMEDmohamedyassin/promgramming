@extends('layouts.app')

@section('content')

        <h1>{{$str}}</h1>

    @forelse ($lang as $lang)
        <li>{{$lang}}</li>
    @empty
        <h3>there is no parameters </h3>
    @endforelse

@stop

@section('footer')

        {{-- <script>alert('hello')</script> --}}

@endsection   <!-- طريقة أخري لإنهاء الجزء -->