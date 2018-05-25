<!DOCTYPE html>
<html>
<head>
	<title>Ahsanullah University of Science and Technology</title>

	<!--Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>

<body>

	<!--header start-->
	<header>

		<div class="logo_name">
			<div class="logo_div">
				<img class="logo" src="{{ asset('images/logo/aust_logo.jpg') }}">
			</div>

			<div class="aust_name">
				<h2>Ahsanullah University of Science and Technology</h2>
			</div>

			<div class="search">
				<input class="search-box" type="text" placeholder="Search the University">
			</div>
		</div>

		<div class="banner">
			<img class="canvas" src="{{ asset('images/canvas.jpg') }}">
			<img class="canvas" src="{{ asset('images/canvas1.jpg') }}">
			<img class="canvas" src="{{ asset('images/canvas2.jpg') }}">
			<img class="canvas" src="{{ asset('images/canvas3.jpg') }}">
			<img class="canvas" src="{{ asset('images/canvas4.jpg') }}">
		</div>

	</header>
	<!--header end-->

	<!--navbar start-->
	<nav class="navbar navbar-color navbar-default">
  		<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
      			</button>
    		</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class=""><a class="nav-color" href="#">About <span class="sr-only"></span></a></li>
		        <li class="dropdown">
		          <a class="nav-color" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academic <span class="caret nav-color"></span></a>
		          <ul class="dropdown-menu">
		            <li><a class="nav-color" href="#">EEE</a></li>
		            <li><a class="nav-color" href="#">CSE</a></li>
		            <li><a class="nav-color" href="#">CIVIL</a></li>
		            <li><a class="nav-color" href="#">MPE</a></li>
		            <li><a class="nav-color" href="#">TE</a></li>
		            <li><a class="nav-color" href="#">ARCHITECTURE</a></li>
		            <li><a class="nav-color" href="#">BBA</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		        <li><a class="nav-color" href="#">Admission</a></li>
		        <li><a class="nav-color" href="#">Research</a></li>
		        <li><a class="nav-color" href="#">Job Opportunities</a></li>
		        <li><a class="nav-color" href="{{ route('login')}}">Login</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>

	<h1>hello</h1>


	<!--bootstrap javascripts-->
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
