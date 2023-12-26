<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Admin</title>
  <style>
    body {
        font-family: "Lato", sans-serif;
    }
    
    .sidenav {
        width: 15%;
        height: 100%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }
    
    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
    }
    
    .sidenav a:hover {
        color: #f1f1f1;
    }
    
    .main {
        margin-left: 10%; /* Same as the width of the sidenav */
        padding: 0px 10px;
    }
    
    </style>
  </head>
<body>
  <div class="sidenav">
    <a href="{{route('admin.post.index')}}">Опубликованные посты</a>
    <a href="#">Посты в ожидании</a>
    <a href="#">Аналитика</a>
  </div>

  <div class="main">
    @yield('content')
  </div>
</body>
</html>