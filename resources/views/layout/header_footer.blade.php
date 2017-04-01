<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="../image/logo.png" type="image/png">

    <title>Ozyornoe</title>
    <link href="https://fonts.googleapis.com/css?family=Homenaje" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <a href="#up" class="up" title="На верх"></a>
  <div id="social">
    <a href="https://vk.com/ozyorno_e" class="vk"></a>
    <a href="https://www.facebook.com/ozyornoe2014/" class="fb"></a>
    <a href="https://www.instagram.com/explore/tags/ozyornoe/" class="instagram"></a>
    <a href="http://geometria.ru/events/high-life/2014/7/20/796904" class="geometria"></a>
  </div>
  <header id="up" class="dark">
    <div class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">OZYORNOE</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/menu">Menu</a></li>
              <!-- <li><a href="#">Wellness</a></li>
              <li><a href="#">Spa</a></li>
              <li><a href="#">Кулинария</a></li>
              <li><a href="#">Бизнес</a></li>
              <li><a href="#">Галерея</a></li>
              <li><a href="#">Контакты</a></li> -->
            </ul>
                              <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
        </div> 
    </div>
      
    <!-- <div class="container-fluid"> -->
      <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <h1>OZYORNOE</h1>
                <p class="title">Spa & Wellness</p>
            </div>  
      </div>  
    <!-- </div>  -->
    </header>
    <div id="wraper">
    @yield('content')
    
        </div>
  <footer>
        <div class="row dark">
            <div class="col-xs-3 col-xs-offset-1" style="height: 100px; padding-top: 30px;"><h4>Партнёры: </h4></div>
            <div id="photo6" class="col-xs-2" style="margin-top: 15px;" title="Geometria"></div>
            <div id="photo7" class="col-xs-2" style="margin-top: 15px;" title="Le Nez Du Vin"></div>
            <div id="photo8" class="col-xs-2" style="margin-top: 15px;" title="Gusto Coffee"></div>
            <hr />
            <div class="col-xs-10 col-xs-offset-2" style="padding-bottom: 20px;">
                <ul>
                    <li>Copyright Ozyornoe 2017</li>
                    <li>Ozyornoe Spa & Wellness</li>
                    <li>ул. Комарова, 28-Г</li>
                    <li>г. Черновцы</li>
                    <li>тел. (095) 346 31 54, (095) 28 28 201, (096) 28 28 201</li>
                </ul>
            </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>