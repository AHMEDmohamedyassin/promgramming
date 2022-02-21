<x-admin-master>
    @section('admin_content')
    <h1 class="h3 mb-4 text-gray-800">adding posts</h1>
        <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data" class="form-control">
            @csrf
            <input type="text" placeholder="add title here" name="title" class="form-text"><br>
            <input type="file" name="images" class="form-control-file"><br>
            <input type="submit" placeholder="insert post" class="form-check"><br>
            <textarea cols="60" rows="20" class="form-text" name="content"></textarea><br>
        </form>
    @endsection
</x-admin-master>
