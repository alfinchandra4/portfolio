<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 

    <title>@yield('title')</title>
  </head>
  <body>

    <div class="container pt-5">
      <div class="row">
        <div class="col-md-4 border-end mb-5">
          <div id="profile" class="p-3">
            <div class="motto h3 fw-bold">
              Never ending story
            </div>
            <div class="list" style="font-size: 10pt">
              <div class="list-group list-group-horizontal">
                <a href="{{ route('project') }}" class="list-group-item text-dark">Projects</a>
                <a href="{{ route('profile') }}" class="list-group-item text-dark">About me</a>
                <a href="#" class="list-group-item text-white bg-secondary">Curriculum Vitae</a>
              </div>
            </div>
            <div class="photo mt-4">
              <img src="https://jasafotosemarang.files.wordpress.com/2016/10/rizky.jpg" 
                   height="200px" 
                   width="150px" 
                   class="rounded mx-auto d-block">
            </div>
            <div class="name fw-bold mt-2 fs-3 mx-auto text-center">
              Alfin Chandra
            </div>
            <div class="vision ps-4 pe-4 fw-light text-justify" style="font-size: 11pt">
              Web Developer, tertarik mempelajari teknologi baru dan ilmu programming. <br/>
              Aktif berbagi ilmu di forum internet dan membuat artikel tutorial pemrograman
            </div>
            <div class="footer text-muted p-3 mt-5 text-center" style="font-size:9pt">
              Powered by Laravel & Bootstrap &bull; 2021  
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div id="content">
            @yield('content')
          <div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
