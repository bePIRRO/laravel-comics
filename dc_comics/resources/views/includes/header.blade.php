<header>
    <!-- navbar -->
    <div class="navbar">
      <div class="row">
        <div class="col">
          <a href=" {{ url('/') }} " id="logo"
            ><img src="../../../images/dc-logo.png" alt="DC Comics"
          /></a>
        </div>
        <div class="col">
          <ul>
            <li><a href=" {{ url('/') }} ">Characters</a></li>
            <li><a href=" {{ url('/comics') }} ">Comics</a></li>
            <li><a href=" {{ url('/') }} ">Movies</a></li>
            <li><a href=" {{ url('/') }} ">TV</a></li>
            <li><a href=" {{ url('/') }} ">Games</a></li>
            <li><a href=" {{ url('/') }} ">Collectibles</a></li>
            <li><a href=" {{ url('/') }} ">Videos</a></li>
            <li><a href=" {{ url('/') }} ">Fans</a></li>
            <li><a href=" {{ url('/') }} ">News</a></li>
            <li><a href=" {{ url('/') }} ">Shop</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- hero -->

    <div id="hero"></div>
  </header>

  <style>
    .navbar {
    background-color: #fff;
    }

.navbar .row {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 100px;
}

.active,
a:hover:not(#logo) {
    color: #0282f9;
    border-bottom: 2px solid #0282f9;
}

.row div {
    display: inline-block;
    height: auto;
}

img {
    width: auto;
    max-height: 80px;
}

.col,
ul,
li {
    height: auto;
}

li {
    list-style-type: none;
    display: inline;
}

a {
    color: #000;
    text-decoration: none;
    margin: 0 10px;
}

#hero {
    width: 100%;
    height: 400px;
    background-image: url("../../../images/jumbotron.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

  </style>