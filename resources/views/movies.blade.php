@extends('layout.main')

@section('content')

<div class="container">
    <h1>i nostri film</h1>
        <div class="row">
          @foreach ($movies as $movie)
          <div class="col-5">
            <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">{{$movie->title}}</div>
              <div class="card-body">
                <h5 class="card-title text-center">Nationality: {{$movie->nationality}}</h5>
                <p class="card-text text-center">vote: {{$movie->vote}}</p>
              </div>
            </div> 
          </div>             
          @endforeach
        </div>  


@endsection