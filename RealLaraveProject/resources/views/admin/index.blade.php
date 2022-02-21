<x-admin-master>
    @section('admin_content')
        <div class="container-fluid">

            <!-- Page Heading -->
            @if(auth()->user()->UserHasRole('Admin'))

            <h1 class="h3 mb-4 text-gray-800">Dashboard Page</h1>

            @endif
        </div>
    @endsection
</x-admin-master>
