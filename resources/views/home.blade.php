@extends ('layout.app')

@section ('title','Travel Box Home')

@section('content')

<h1>Travel Box</h1>

<div class="container">
    @foreach($boxes as $box)
        <div class="card">
            <img src="{{$box->poster}}" alt="">
            <h2>{{$box->duration}}</h2>
            <h3>{{$box->place}}</h3>
            <div class="brand">
                <h3>{{$box->brand}}</h3>
            </div>
            <div class="description">
                <div>{{$box->offer}}</div>
                <span>{{$box->price}} &euro;</span>
            </div>
        </div>
    @endforeach
</div>


@endsection
