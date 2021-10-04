@extends("layouts.main");
@section("title", "Comics");

@section("content")
<main class="comics">

  <!-- current series tag -->
  <div class="tag current">
    CURRENT SERIES
  </div>
  
  <!-- cards container -->
  <div class="container">
    <div class="row">
      <div class="col">
        
        @foreach ($comics as $comic)
        <div class="card">
          <a href="{{ url("/comics/$loop->index") }}">
            <figure>
              <img src="{{ $comic["thumb"]}}" alt="{{ $comic["series"]}}" />
              <h5>{{ $comic["title"]}}</h5>
            </figure>
          </a>
        </div>
        @endforeach
        
      </div>
    </div>
    
    <div class="tag btn">
      LOAD MORE
    </div>
  </div>
</main>
@endsection