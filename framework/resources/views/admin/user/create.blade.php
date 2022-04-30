@extends('admin.layout.header$footer')
@section('content')

<div class="container">
    <form method="post" action="{{route('user.save')}}" enctype="multipart/form-data" class="form-control form">
        @csrf
        <input type="text" name="firstname" placeholder="first name" class="form-control">
        <input type="text" name="lastname" placeholder="last name" class="form-control">
        <input type="text" name="role" placeholder="role" class="form-control">
        <input type="text" name="email" placeholder="email ( optional )" class="form-control">
        <input type="text" name="phone" placeholder="phone" class="form-control">
        <input type="text" name="password" placeholder="password" class="form-control">
        <input type="file" name="image[]" multiple="multiple" class="form-control"><br>
        <button class="btn btn-primary">submit</button>
    </form>
</div>

@endsection
