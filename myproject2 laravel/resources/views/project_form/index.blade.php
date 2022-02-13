@include('layouts.apps')

@section('content')

@foreach($post as $posts)

    {{-- <li><a href="Post/{{$posts->id}}">{{$posts->name}}</a></li> --}}
    <li><a href="{{route('Post.show' , $posts->id)}}">{{$posts->name}}</a></li>  {{-- عن طريق استخدام اسم الرابط --}}
    <img src="/picture/{{$posts->path}}" alt="">
@endforeach


<hr>
<a href="/Post/create"> إضافة </a>