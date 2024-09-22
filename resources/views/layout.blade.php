<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <title>@yield('title', 'Webpage SIT')</title>

</head>

<body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      @auth
      <div class="col-10" style="padding: 0;">
        @include('include.sidebar')
        <div class="top-0 inset-x-0 flex flex-wrap">
          @include('include.header')
        </div>
      </div>
      <!-- Header hanya muncul saat user login -->
      <div class="w-full px-4 py-10 pt-6 sm:px-6 md:px-8 lg:ps-72" bis_skin_checked="1">
        @yield('content')
      </div>
    </div>
  </div>
  
  
  @endauth

<!-- Main Content -->
  @yield('acontent')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>