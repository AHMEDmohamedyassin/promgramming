@extends('Thelayouts.header&footer')
@section('content')

<div class="container examchoose">
    @if ($exam)
        @foreach ($exam as $examination)

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <h5 class="card-title">{{$examination->title}}</h5>
                            <p class="card-text">exam duration : {{$examination->duration}}</p>
                            <p class="card-text">exam price : {{$examination->price}} L.E </p>
                        </div>
                        <div class="col-md">
                            <p class="card-text">exam started at : {{$examination->start}}</p>
                            <p class="card-text">exam ended at : {{$examination->end}}</p>
                            @if (!(in_array($examination->id , $user_grade)))
                            @if ($paid != '[]' && in_array($examination->id , $paid))
                            <a href="{{route('exam.view' , $examination->id )}}" class="btn btn-primary">Go exam</a>
                            @elseif ($examination->price == 0)
                            <a href="{{route('exam.view' , $examination->id )}}" class="btn btn-primary">Go exam</a>
                            @else
                            <form method="post" action="{{route('paying')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="type" value="exam">
                                <input type="hidden" name="id" value="{{$examination->id}}">
                                <input type="string" name="code" placeholder="enter code here">
                                <button class="btn btn-info">Buy NOW</button>
                            </form>
                            @endif
                            @else
                            <span class="alert alert-success p-2">exam done
                                @if ($examination->state == '1')
                                grade : {{$examination->grade()->where(['user_id' => Auth()->user()->id])->first()['grade'] }}
                                @endif
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    @endif


</div>

@endsection
