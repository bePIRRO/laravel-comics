@extends("layouts.main");
@section("title", "Comic");

@section("content")
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    ACTION COMICS #1000: THE DELUXE EDITION
                </h2>

                <div class="buy">
                    <div class="">
                        <span class="avaible">U.S. Price:</span>$19.99
                    </div>

                    <div class="">
                        <span class="avaible">AVAIBLE</span>
                        <select name="check-av" id="check">
                            <option value="1">Check Availability</option>
                        </select>
                    </div>
                </div>
                <p class="description">
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                </p>
            </div>
        </div>
    </div>
@endsection