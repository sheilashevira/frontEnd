<!DOCTYPE html>
<html lang="ja">
<head>
<title>Tasting Cars</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="Cars">
<meta name="Description" content="Tasting the cars">
{{-- Image --}}
<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
{{-- CSS --}}
<link rel="stylesheet" href="{{asset('css/cssreset-min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
{{-- JS --}}
<script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>

<body>
  <style>
    .carousel-item{
      height:32rem;
      background: #777;
      color:white;
      position: relative;
    }
  </style>

<!-- Navigation -->
<nav class="navbar navbar-expand-md static-top navbar-dark" style="background-color: #406A7F;">
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/logo/tc-white-logo.svg')}}" alt="" height="50">
              </a>
          </div>
        </div>
        <div class="row align-items-end flex-column">
          <div class="col">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto ">
                <li class="n nav-item">
                  <a class="nav-link border border-white border-2 fs-8" aria-current="page" href="#">
                    WISHLIST
                    <img src="{{asset('img/icon/arrowButton.png')}}" alt="" height="20">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="#" >HOME</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#" >SEARCH</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#" >FAVORITE</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#" >NEWS</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#" >ABOUT</a>
                  </li>
                </ul>
            </div>
          </div>
        </div>
    </div>
</nav>
<!-- Slide -->
<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
  <ol class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img alt="First slide" class="d-block w-100" src="{{asset('img/catalog/slideshow/top/car1.jpg')}}">
      <div class="carousel-caption d-none d-md-block">
        <h5>One</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img alt="Second slide" class="d-block w-100" src="{{asset('img/catalog/slideshow/top/car2.jpg')}}">
      <div class="carousel-caption d-none d-md-block">
        <h5>Two</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img alt="Third slide" class="d-block w-100" src="{{asset('img/catalog/slideshow/top/car3.jpg')}}">
      <div class="carousel-caption d-none d-md-block">
        <h5>Three</h5>
      </div>
    </div>
</div>

</body>

</html>