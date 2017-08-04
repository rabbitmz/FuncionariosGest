<html>
<head>
<title>FuncionariosGest - @yield('title')</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('bootstrap-datepicker-1.6.4/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
<link href="{{ asset('footable-bootstrap/css/footable.bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/swiss.css') }}" rel="stylesheet" />
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand menuTitle" href="#">{{ __('messages.appName') }} </a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
					<a class="dropdown-toggle"
						data-toggle="dropdown" href="#">{{ __('messages.employeeManagement') }} 
						<span class="caret">
						</span>
					</a>
						<ul class="dropdown-menu">
							<li><a href="/createColaborator">{{ __('messages.createEmployee') }}</a></li>
							<li><a href="/editColaborator">{{ __('messages.editEmployee') }}</a></li>
							<li><a href="/viewColaborator">{{ __('messages.viewEmployee') }}</a></li>
							<li><a href="/listAll">{{ __('messages.search') }}</a></li>
						</ul>
						</li>
					<li><a href="/report">{{ __('messages.report') }}</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<div class="container">@yield('content')</div>

	<!-- jQuery -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('bootstrap-datepicker-1.6.4/js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('footable-bootstrap/js/footable.min.js') }}"></script>
	<script src="{{ asset('footable-bootstrap/js/moment.min.js') }}"></script>
	@yield('scripts')
</body>
</html>