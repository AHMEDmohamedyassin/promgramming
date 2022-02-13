@include('layouts.apps')

@section('content')

<h1><a href="{{route( 'Post.edit' , $post->id)}}">{{$post->name}}</a></h1>
