@extends("layouts.main");
@section("title", "Comic");

@section("content")
<div class="card">
      <figure>
        <img src="{{ $comic['thumb']}}" alt="{{ $comic['series'] }}" />
        <h5>{{ $comic['title'] }}</h5>
      </figure>
    </div>
@endsection