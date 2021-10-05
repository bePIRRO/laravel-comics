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
@endsection