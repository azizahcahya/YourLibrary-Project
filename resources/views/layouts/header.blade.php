<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Library</title>
    <link rel="icon" type="image/x-icon" href="./asset/icon.png"><!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper --><!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style-main.css')?>" type="text/css"> 

    @yield('styling')
</head>
<body>
    <header>
        <img class="navbar-brand" href="#" src="./asset/icon.png">
        <nav class="navbar">
            <a href="home" class="{{Request::is('home')? 'active' : ''}} ms-3">Home</a>
            <a href="yourbooks" class="{{Request::is('yourbooks')? 'active' : ''}} ms-3">YourBook</a>
            <a href="books" class="{{Request::is('book')? 'active' : ''}} ms-3">Books</a>
            <div class="searchbox ms-3">
            <a>
                <div class="input-group">
                    <input class="form-control border-end-0 border rounded-pill" type="text" value="" id="example-search-input">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
            </a>
        </nav>
    </header>
    @yield('Container')
</body>