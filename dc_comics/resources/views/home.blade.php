@extends("layouts.main");

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
                    <h3>{{ $comic["title"] }}</h3>
                    <img src="serie.thumb" alt="serie.series" />
                    <h5> serie.series</h5>
                </div>
             @endforeach

              </div>
            </div>
      
            <div class="tag btn">
              LOAD MORE
            </div>
          </div>
@endsection

