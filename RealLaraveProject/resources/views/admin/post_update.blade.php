<x-admin-master>
    @section('admin_content')
        <h1 class="h3 mb-4 text-gray-800">updating posts</h1>
        <div style="display: block; margin-bottom: 5%">
            <form method="POST" action="{{route('post.delete')}}" enctype="multipart/form-data" class="form-control">
                @csrf
                @method('DELETE')
                <input type="hidden" value="{{$post->id}}" name="id">
                <input type="hidden" value="{{$post->image}}" name="oldImage">
                <input type="submit" name="delete" value="delete" class="btn btn-danger">
            </form>
        </div>
    <div style="display: block">
        <form method="POST" action="{{route('post.edit')}}" enctype="multipart/form-data" class="form-control">
            @csrf
            <input type="hidden" value="{{$post->id}}" name="id">
            <input type="hidden" value="{{$post->image}}" name="oldImage">
            <input type="text" value="{{$post->title}}" name="title" class="form-text"><br>
            <input type="file" name="images" class="form-control-file"><br>
            <input type="submit"  class="form-check"><br>
            <textarea cols="60" rows="20" class="form-text" name="content" placeholder="{{$post->content}}" ></textarea><br>
        </form>
    </div>
    @endsection
</x-admin-master>
