<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href=" {{ asset( 'property/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset( 'property/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset( 'property/css/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset( 'property/css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset( 'property/css/style.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>
      Site de vente et acquisition de propriété
    </title>
    <style>
.slider-rtl {
    display: flex;
    flex-direction: row-reverse;
}
.slick-prev,
.slick-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
    background-color: transparent;
    border: none;
    color: #000;
    font-size: 18px;
    cursor: pointer;
}

.slick-prev {
    left: 15px;
}

.slick-next {
    right: 15px;
}
    </style>
  </head>
  <body>
    <!-- section header -->
    @include('partialsVisitor.header')

    @yield('content') 
    <!-- section hero -->
    {{-- @include('partialsVisitor.hero')
    <!-- section popular property -->
    @include('partialsVisitor.popularP')
    <!-- include feature -->
    @include('partialsVisitor.feature')

    
    <!-- trois personnes  -->
    @include('partialsVisitor.lastpost') --}}


    <!-- /.site-footer -->
    @include('partialsVisitor.footer')
  @yield('scripts');
    <script src={{asset('property/js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('property/js/tiny-slider.js')}}></script>
    <script src={{asset('property/js/aos.js')}}></script>
    <script src={{asset('property/js/navbar.js')}}></script>
    <script src={{asset('property/js/counter.js')}}></script>
    <script src={{asset('property/js/custom.js')}}></script>
          <!-- Inclure jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Inclure Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  </body>
</html>
