@extends("layouts.main");
@section("title", "Comics")

@section("content")
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
                        
                        <img src="{{ $comic["thumb"]}}" alt="{{ $comic["series"]}}" />
                        <h5>{{ $comic["title"]}}</h5>
                    </div>
                 @endforeach
    
                  </div>
                </div>
          
                <div class="tag btn">
                  LOAD MORE
                </div>
              </div>
@endsection