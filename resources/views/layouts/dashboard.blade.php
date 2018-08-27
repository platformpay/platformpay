<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Platformpay</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('dashboard/assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('dashboard/assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('dashboard/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/01.jpg">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="https://platformpay.ru">
                    <img src="{{ asset('dashboard/assets/img/logo.png') }}" width="200px" alt="">
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ route('dashboard.index') }}">
                        <i class="pe-7s-home"></i>
                        <p>Главная</p>
                    </a>
                </li>
								<li>
										<a href="{{ route('dashboard.stats') }}">
												<i class="pe-7s-display1"></i>
												<p>Моя статистика</p>
										</a>
								</li>
								<li>
										<a href="{{ route('dashboard.shops') }}">
												<i class="pe-7s-cart"></i>
												<p>Мои магазины</p>
										</a>
								</li>
								<li>
										<a href="{{ route('dashboard.balance') }}">
												<i class="pe-7s-diamond"></i>
												<p>Мои финансы</p>
										</a>
								</li>
								<li>
										<a href="{{ route('dashboard.settings') }}">
												<i class="pe-7s-tools"></i>
												<p>Настройки аккаунта</p>
										</a>
								</li>
								<li>
										<a href="{{ route('dashboard.help') }}">
												<i class="pe-7s-help1"></i>
												<p>Справка platformpay</p>
										</a>
								</li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Панель управления</a>
                </div>
                <div class="collapse navbar-collapse">
									<div class="top-group">
										<span>Баланс {{ Auth::user()->balance }}  р</span>
<img src="{{ asset('dashboard/assets/img/user.png')}}" alt="" class="hidden-sm hidden-xs">


            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Выход
            </a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
						</form>

</div>
</div>
            </div>
        </nav>

  @yield('content')




    </div>

</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('dashboard/assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('dashboard/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>



    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ asset('dashboard/assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>



</html>
