<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="ml-5">
                <i class="fab fa-jenkins fa-5x"></i>
            </div>
            <div class="ml-5">
                <span>FC Chelsea shop</span>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <form class="form-inline">
                <input type="text" class="form-control mr-3 w-75" placeholder="search">
                <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
            </form>
        </div>
        <div class="col-md-3 mt-4">
            <i class="fas fa-lock-open"></i>
            Login (<a href="">Logout</a>)
        </div>
    </div>
    <div class="main-content mt-3 row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills">
                <a class="nav-link" href="/admin">Admin</a>
                <a class="nav-link active" href="">Product Management</a>

            </div>
        </div>
        <div class="col-md-9">
            @section('content')
            @show()
        </div>
    </div>
    <footer class="text-center mt-5">

        <p>@Chelsea shop</p>
    </footer>
</div>
</body>
</html>