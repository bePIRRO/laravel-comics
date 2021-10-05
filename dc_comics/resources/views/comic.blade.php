@extends("layouts.main");
@section("title", "Comic");

@section("content")
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    {{ $comic['title']}}
                </h2>

                <div class="buy">
                    <div class="">
                        <span class="avaible">U.S. Price:</span>{{ $comic['price']}}
                    </div>

                    <div class="">
                        <span class="avaible">AVAIBLE</span>
                        <select name="check-av" id="check">
                            <option value="1">Check Availability</option>
                        </select>
                    </div>
                </div>
                <p class="description">
                    {{ $comic['description']}}
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">

            <div class="row info">
                <div class="col talent">
                    <h2>Talent</h2>
                    <hr class="divide">
                    <div class="row">
                        
                        
                        <div class="artists">
                            <h4>Art by:</h4>

                            @foreach ($comic["artists"] as $artist)
                            <span>{{$artist}}</span>,
                            @endforeach
                        </div>
                    </div>
                    
                    <hr class="divide">
                    <div class="row">
                        

                        <div class="writers">
                            <h4>Art by:</h4>

                            @foreach ($comic["writers"] as $writer)
                            <span>{{$writer}}</span>,
                            @endforeach
                        </div>
                    </div>
                    <hr class="divide">
                </div>
                
                
                <div class="col">
                    <h2>Specs</h2>
                    <hr class="divide">
                    <div class="row">
                        
                        <div>
                            <h4>Series:</h4>

                            <span>{{$comic["series"]}}</span>
                        </div>
                    </div>
                    
                    <hr class="divide">
                    <div class="row">
                        
                        <div>
                            <h4>U.S. Price:</h4>

                           <span>{{$comic["price"]}}</span>
                        </div>
                    </div>
                    <hr class="divide">

                    <div class="row">
                        
                        <div>
                            <h4>On Sale Date:</h4>

                           <span>{{$comic["sale_date"]}}</span>
                        </div>
                    </div>
                    <hr class="divide">
                </div>
            </div>
        </div>
    </div>
            @endsection