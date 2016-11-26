<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog Demo | Find All Together</title>

		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

		<!-- Plugin CSS -->
		<link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
		{{--<link rel="stylesheet" href="{{ url('css/animate.min.css') }}" type="text/css">--}}

		<!-- Custom CSS -->
		<link href="{{ asset('/css/creative.css') }}" rel="stylesheet">
		{{--<link rel="stylesheet" href="css/creative.css" type="text/css">--}}


				<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="/bootstrap.min.css" type="text/css">
{{--		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">--}}


		{{--<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">--}}

		<!-- Custom Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">





		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

		<![endif]-->
	</head>

	<body id="page-top">
		{{--<nav class="navbar navbar-default">--}}
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					{{--<a class="navbar-brand" href="http://www.findalltogether.com">Find All Together</a>--}}
						<a class="navbar-brand page-scroll" href="#page-top">
					<span>
							{{--<a class="navbar-brand page-scroll" href="#page-top">VTU Blog</a>--}}
						<img src="/img/logo.png"  width="30" height="30" >
					</span>
							&nbsp; VTU Blog
							</a>

				</div>

				{{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					{{--<ul class="nav navbar-nav">--}}
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="{{ url('/') }}">Home</a>
						</li>
						<li>
							<a class="page-scroll" href="#about">About</a>
						</li>
						<li>
							<a class="page-scroll" href="#services">Services</a>
						</li>
						<li>
							<a class="page-scroll" href="#portfolio">Portfolio</a>
						</li>
						<li>
							<a class="page-scroll" href="#contact">Contact</a>
						</li>



						@if (Auth::guest())


							<li>
								<a href="{{ url('/auth/login') }}">Login</a>
							</li>


							<li>
								{{--<a class="page-scroll" href="{{ url('/auth/register') }}", #register>Register</a>--}}
								<a class="page-scroll" href=" {{ url('/auth/register') }}">Register</a>

							</li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{  "Welcome ".Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									@if (Auth::user()->can_post())
										<li>
											<a href="{{ url('/new-post') }}">Add new post</a>
										</li>
										<li>
											<a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
										</li>
									@endif
									<li>
										<a href="{{ url('/user/'.Auth::id()) }}">My Profile</a>
									</li>
									<li>
										<a href="{{ url('/auth/logout') }}">Logout</a>
									</li>
								</ul>
							</li>
						@endif

					</ul>
				</div>
			</div>
		</nav>







		<header>
			<div class="header-content">
				<div class="header-content-inner">
					<h1>Visvesvaraya Technological University</h1> <br>
					<h1>Belagavi-590018</h1>
					<hr>
					<p>MCA Students</p>
					<a href=  "http://vtu.ac.in/" target="_blank" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
				</div>
			</div>
		</header>





					<div class="container">
			@if (Session::has('message'))
			<div class="flash alert-info">
				<p class="panel-body">
					{{ Session::get('message') }}
				</p>
			</div>
			@endif
			@if ($errors->any())
			<div class='flash alert-danger'>
				<ul class="panel-body">
					@foreach ( $errors->all() as $error )
					<li>
						{{ $error }}
					</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>@yield('title')</h2>
							@yield('title-meta')
						</div>
						<div class="panel-body">
							@yield('content')
						</div>
					</div>
				</div>
			</div>

		</div>


		<section class="no-padding" id="portfolio">
			<div class="container-fluid">
				<div class="row no-gutter">
					<div class="col-lg-4 col-sm-6">
						<a href="#" class="portfolio-box">
							{{--<img src="img/portfolio/1.jpg" class="img-responsive" alt="">--}}
							<img src="/img/vtuportfolio/auditorium.JPG" class="img-responsive" alt="">



							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded">

									</div>
									<div class="project-name">
										Auditorium
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a href="#" class="portfolio-box">
							<img src="/img/portfolio/PG1.jpg" class="img-responsive" alt="">
							{{--<img src="img/vtuportfolio/PG1.jpg" class="img-responsive" alt="">--}}
							{{--<a href="#" ><img class="img-responsive" src="{{asset('img/vtuportfolio/PG1.jpg')}}" alt=""></a>--}}
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded">

									</div>
									<div class="project-name">
										PG Block
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a href="#" class="portfolio-box">

                            <img src="/img/portfolio/senatehall.JPG" class="img-responsive" alt="">
{{--							<a href="#" ><img class="img-responsive" src="{{asset('img/vtuportfolio/senatehall.JPG')}}" alt=""></a>--}}

							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded">

									</div>
									<div class="project-name">
										Senate Hall
									</div>
								</div>
							</div>
						</a>
					</div>
				</section>

					<aside class="bg-dark">
						<div class="container text-center">
							<div class="call-to-action">
								<h2>Department of PG Studies- Belagavi!</h2>
								<a href=  "http://pgbelgaum.vtu.ac.in/" class="btn btn-default btn-xl wow tada" target="_blank" >Click Here!</a>
							</div>
						</div>
					</aside>

					<section id="contact">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2 text-center">
									<h2 class="section-heading">Let's Get In Touch!</h2>
									<hr class="primary">
									<p> Its a mini project submitting to VTU !!<br> Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
								</div>
								<div class="col-lg-4 col-lg-offset-2 text-center">
									<i class="fa fa-phone fa-3x wow bounceIn"></i>
									<p>Sanjay Shiradwade +918867082139</p>
									<p>Bharat Mane +918971954157</p>
								</div>
								<div class="col-lg-4 text-center">
									<i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
									<p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
								</div>
							</div>
						</div>
					</section>

					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<p>Copyright &copy; 2016 | <a href="#">VTU MCA Students</a></p>
						</div>
					</div>

					<!-- Scripts -->
					{{--<script src="js/jquery.js"></script>--}}
					<script src="{{ asset('/js/jquery.js') }}"></script>

					<!-- Bootstrap Core JavaScript -->
					<script src="{{ asset('/js/bootstrap.min-3.3.1.js') }}"></script>

					<!-- Plugin JavaScript -->
					<script src="js/jquery.easing.min.js"></script>
					<script src="{{ asset('/js/jquery.easing.min.js') }}"></script>


					<script src="js/jquery.fittext.js"></script>
					<script src="{{ asset('/js/jquery.fittext.js') }}"></script>


					<script src="js/wow.min.js"></script>
					<script src="{{ asset('/js/wow.min.js') }}"></script>


					<!-- Custom Theme JavaScript -->
					<script src="js/creative.js"></script>
					<script src="{{ asset('/js/creative.js') }}"></script>




					<script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script>

					<!-- Bootstrap Core JavaScript -->
					<script src="js/bootstrap.min.js"></script>
					<script src="{{ asset('/js/bootstrap.min.js') }}"></script>


	</body>
</html>
