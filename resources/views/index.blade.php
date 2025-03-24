@extends('layouts.master')

@section("title", "I miei film su Laravel")

@section("content")

<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{$movie["title"]}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$movie["original_title"]}}</h6>
                    <p class="card-text">Nazionalità: {{$movie["nationality"]}}</p>
                    <p class="card-text">Data: {{$movie["date"]}}</p>
                    <p class="card-text">
                        Voto:
                        @for ($i = 0; $i < floor($movie["vote"]); $i++) <span style="background-color: red;">⭐</span> @endfor
                            @if ($movie["vote"] - floor($movie["vote"])>= 0.5)
                            <span style="background-color: red;">⭐</span>
                            @endif
                            @for ($i = 0; $i < (10 - ceil($movie["vote"])); $i++) <span style="color: red;">☆</span> @endfor
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
