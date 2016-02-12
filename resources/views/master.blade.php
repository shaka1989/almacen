<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Almacen</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="{{ asset('bower/animate.css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('bower/sweetalert/dist/sweetalert.css') }}">

		<link rel="stylesheet" href="{{ asset('css/all.css') }}">


	</head>
	<body>


		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{ route('products.index') }}">Almacen</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li><a href="{{ route('products.index') }}">Ver Productos <span class="sr-only">(current)</span></a></li>
		        <li ><a href="{{ route('products.create') }}">Agregar Producto <span class="sr-only">(current)</span></a></li>
		        <li ><a href="{{ route('chart') }}">Generar Estadísticas <span class="sr-only">(current)</span></a></li>
		        <li><a href="{{ route('pdf') }}">Generar Pdf</a></li>
		        <!-- <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li> -->
		      </ul>
		      <!-- <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form> -->
		      <ul class="nav navbar-nav navbar-right">
		       <!--  <li><a href="#">Link</a></li> -->
		       @if (!Auth::guest())
						<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="{{ url('/auth/logout') }}">Salir</a></li>
				           
				          </ul>
				        </li>
			
				@endif
		      </ul>
		    </div>
		  </div>
		</nav>

		@yield('content')



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<script src="{{ asset('bower/sweetalert/dist/sweetalert.min.js') }}"></script>

		@yield('scripts')

	</body>
</html>