<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Admin Site</title>

    <strong><script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script></strong>
    <script>
        tinymce.init({
            selector: "#mytextarea",
            plugins: 'lists',
            toolbar: 'undo redo | bold italic underline | numlist bullist | styleselect',
            menubar:false,
            branding: false
        });
    </script>
    <style>
        .mce-notification {display: none !important;}
    </style>
    
  </head>
  <body style="background-color: #f6f6f6" >
    @include('admin.navbar')
    
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
