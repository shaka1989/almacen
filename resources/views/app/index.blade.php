<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="{{ asset('bower/animate.css/animate.css') }}">

		<link rel="stylesheet" href="{{ asset('css/all.css') }}">


	</head>
	<body>


		
		<div class="container-fluid container-login  animated slideInDown">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">Ingreso</div>
						<div class="panel-body">
							@if (count($errors) > 0)
								<div class="alert alert-warning">
									Se encontraron los siguientes errores.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="form-group">
									<label class="col-md-4 control-label">Correo Electrónico</label>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" value="{{ old('email') }}">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Contraseña</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password">
									</div>
								</div>

							<!-- 	<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember"> Remember Me
											</label>
										</div>
									</div>
								</div> -->

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary">Ingresar</button>

										<!-- <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a> -->
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<script src="{{ asset('js/login.js') }}"></script>

	</body>
</html>


	


