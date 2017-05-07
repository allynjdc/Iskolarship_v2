<!DOCTYPE html>
<html>
<head>
	<title>Iskolarship</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="/css/app.css"/>
	<link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="/css/index.css"/>
	<link rel="stylesheet" type="text/css" href="/css/register.css"/>
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="home.html" class="navbar-brand">Iskolarship</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
				</div>
				<div class="collapse navbar-collapse" id="app-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html" data-toggle="tooltip" data-placement="bottom" title="Login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
						<li class="dropdown active">
							<a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user register"><span class="register-icon">+</span></span>&nbsp;&nbsp;Register <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Register as?</li>
								<li><a href="student_register.html"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;Student</a></li>
								<li><a href="sponsor_register.html"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;Sponsor</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="container main-container">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="unmargined txt-success">Register<small> as a Sponsor <span class="glyphicon glyphicon-briefcase"></span></small></h1>
				</div>
				<form action="/registration/Sponsor" method="post">
					{{ csrf_field() }}

					<div class="panel-body">
						<h2 class="unmargined"><small><span class="glyphicon glyphicon-list-alt"></span> Personal Information</small><span class="section well">1</span></h2>
						<div class="form-group">
							<label>Name:</label>
							<div class="input-group 
							{{ 
								$errors->has('fname') ? ' has-error' : '',
								$errors->has('lname') ? ' has-error' : ''
							}}" >

								<input type="text" name="fname" placeholder="First Name" class="form-control" value="{{ old('fname') }}" />

								@if ($errors->has('fname'))
									<span class="help-block">
										<strong>{{ $errors->first('fname') }}</strong>
									</span>
								@endif

								<!-- <span class="input-group-addon"></span> -->


								<input type="text" name="lname" placeholder="Last Name" class="form-control" value="{{ old('lname') }}" />

								@if ($errors->has('lname'))
									<span class="help-block">
										<strong>{{ $errors->first('lname') }}</strong>
									</span>
								@endif

							</div>

							<label>Address:</label>
							<div class="input-group {{ $errors->has('address') ? ' has-error' : '' }} ">
								<input type="text" name="address" placeholder="e.g. Quitoles Street, San Pedro, San Jose, Antique" class="form-control" value="{{ old('address') }}"/>

								@if ($errors->has('address'))
									<span class="help-block">
										<strong>{{ $errors->first('address') }}</strong>
									</span>
								@endif

							</div>
							<label>Contact Number:</label>
							<div class="input-group {{ $errors->has('contact') ? ' has-error' : '' }} ">
								<input type="text" name="contact" placeholder="09-XXXXXXXXX" class="form-control" value="{{ old('contact') }} "/>

								@if ($errors->has('contact'))
									<span class="help-block">
										<strong>{{ $errors->first('contact') }}</strong>
									</span>
								@endif

							</div>
						</div>
						<hr/>
						<h2 class="unmargined"><small><span class="glyphicon glyphicon-user"></span> Account Details</small><span class="section well">2</span></h2>
						<div class="form-group">
							<label><span class="glyphicon glyphicon-envelope"></span> Email Address:</label>
							<div class="input-group {{ $errors->has('email') ? ' has-error' : '' }} ">
								<input type="text" name="email" placeholder="What's your email Address?" class="form-control" value="{{ old('email') }}"/>

								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif

							</div>
							<label><span class="glyphicon glyphicon-lock"></span> Password:</label>
							<div class="input-group {{ $errors->has('password') ? ' has-error' : '' }} ">
								<input type="password" name="password" placeholder="Create a secure password. Minimum of 6 characters" class="form-control" />

								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif

							</div>
							<label><span class="glyphicon glyphicon-lock"></span> Re-type Password</label>
							<div class="input-group {{ $errors->has('repassword') ? ' has-error' : '' }} ">
								<input type="password" name="repassword" placeholder="Create a secure password. Minimum of 6 characters" class="form-control" />

								@if ($errors->has('repassword'))
									<span class="help-block">
										<strong>{{ $errors->first('repassword') }}</strong>
									</span>
								@endif

							</div>
						</div>
						<hr/>
						<h2 class="unmargined"><small><span class="glyphicon glyphicon-briefcase"></span> Current Agency</small><span class="section well">3</span></h2>
						<div class="form-group">
							<label>Agency Name:</label>
							<div class="input-group {{ $errors->has('curr_agency') ? ' has-error' : '' }} ">
								<input type="text" name="curr_agency" placeholder="e.g. University of Sample, College of Sample" class="form-control" value="{{ old('curr_agency') }}"/>

								@if ($errors->has('curr_agency'))
									<span class="help-block">
										<strong>{{ $errors->first('curr_agency') }}</strong>
									</span>
								@endif

							</div>
							<label>Agency Address:</label>
							<div class="input-group {{ $errors->has('addr_agency') ? ' has-error' : '' }} ">
								<input type="text" name="addr_agency" placeholder="First Name" class="form-control" value="{{ old('addr_agency') }}"/>

								@if ($errors->has('addr_agency'))
									<span class="help-block">
										<strong>{{ $errors->first('addr_agency') }}</strong>
									</span>
								@endif

							</div>
							<label>Job Title:</label>
							<div class="input-group {{ $errors->has('job_title') ? ' has-error' : '' }} ">
								<input type="text" name="job_title" placeholder="e.g. III, IV" class="form-control" value="{{ old('job_title') }}"/>

								@if ($errors->has('job_title'))
									<span class="help-block">
										<strong>{{ $errors->first('job_title') }}</strong>
									</span>
								@endif

							</div>
						</div>
					</div>
					<div class="panel-footer overflow-a">
						<button type="submit" class="btn btn-success pull-right">
							<span class="glyphicon glyphicon-user register"><span class="register-icon">+</span></span>&nbsp;&nbsp;Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script>
		$(document).ready(function(){$('[data-toggle="popover"]').popover();});
		$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});
	</script>
</body>
</html>