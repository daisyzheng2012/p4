<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield('title','P4 - Daisys Cafe House')
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/p4.css" type='text/css' rel='stylesheet'>


    <style>
      /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>

    
</head>
<body>
    <nav class="navbar navbar-default narbar-fixed-top">
        <div class="container-fluid header-color">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-band myLogo" href="/">
                    <img src="images/cafe_logo_cp.png" alt="cafe logo" class="img-circle" height="50px">
                </a>
                <!-- <a class="navbar-brand" href="#">Daisys Cafe</a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Home</a></li> -->
                <li><a href="/ourstory">OUR STORY</a></li>
                <li><a href="/foods">ORDER ONLINE</a></li>
                @if(Auth::check())
                <li><a href="orderhistory">ORDERS HISTORY</a></li>
                @endif
<!--                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MY CAFE <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/register"><button class="btn btn-primary dropdown-toggle">
                        Join now ...
                        </button></a>
                        </li>
                        <li><p>Already have an account? <a href='/login'>Sign in</a></p></li>
                    </ul>
                </li> -->
              </ul>
              <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li><a href="#">HEY {{Auth::user()->name}}</a></li>
                <li><a href="/logout">LOG OUT</a></li>
                @else
                <li><a href="/register">JOIN NOW</a></li>
                <li><a href="/login">SIGNN IN</a></li>
                @endif
              </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <header>
        @yield('header')
    </header>
    <hr>
    <div class="container">
        <section>
            {{-- main content --}}
            @yield('content')

        </section>
    </div>
    <hr>
    <div class="footer">
        <div class="container-fluid text-center">
          <p class="text-muted">daisy@dynamic web application, {{date('Y')}}</p>
        </div>
    </div>


</body>
</html>
