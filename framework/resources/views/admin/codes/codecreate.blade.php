@extends('admin.layout.header$footer')
@section('content')

<div class="container payingcode">
    <h3>add paying codes</h3>
    <form method="post" action="{{route('code.save')}}" enctype="multipart/form-data" class="form-control form">
        @csrf
        <div class="row">
            <div class="col">
            <input type="number" name="value" placeholder="enter value here">
            </div>
            <div class="col">
            <input type="number" name="number" placeholder="enter number of codes here">
            </div>
            <div class="col"
            style="
            display: flex;
            justify-content: center;
            align-items: center;">
            <button class="btn btn-primary">submit</button>
            </div>
        </div>
    </form>
</div>

@endsection
