<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CarsApp</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style type="text/css">

      @import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap');

      a.navbar-brand {
        font-family: 'Dancing Script', cursive;
        font-size: 36px;
        font-weight: 700;
        letter-spacing: 1px;
      }

      body {
        overflow: hidden;
      }


      img {
        height: 90vh;
      }

      div.carousel-caption > h3 {
        font-family: 'Dancing Script', cursive;
        font-size: 80px;
      }
      
      div.carousel-caption > p {
        font-family: sans-serif;
        font-size: 60px;
      }
    

    </style>
      

</head>
<body>
    
  @include('inc.navbar')  
  
  
    
    <div id="myCarousel" class="carousel slide bg-inverse w-100" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('img/img1.jpg') }}" alt="First slide">
            <div class="carousel-caption">
              <h3>First slide</h3>
              <p>This is the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/img2.jpg') }}" alt="Second slide">
            <div class="carousel-caption">
              <h3>Second slide</h3>
              <p>This is the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/img3.jpg') }}" alt="Third slide">
            <div class="carousel-caption">
              <h3>Third slide</h3>
              <p>This is the third slide.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/img4.jpg') }}" alt="Third slide">
            <div class="carousel-caption">
              <h3>Forth slide</h3>
              <p>This is the forth slide.</p>
            </div>
        </div> 
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/img5.jpg') }}" alt="Third slide">
            <div class="carousel-caption">
              <h3>Fifth slide</h3>
              <p>This is the fifth slide.</p>
            </div>
        </div> 
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    

  
  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script>
      // Initialize tooltip component
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

      // Initialize popover component
      $(function () {
        $('[data-toggle="popover"]').popover()
      })
  </script>


</body>
</html>







