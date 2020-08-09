
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themes.iamabdus.com/royal/1.3/course-grid-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Apr 2018 17:37:12 GMT -->
<!-- Added by HTTrack -->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type"><!-- /Added by HTTrack -->
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>@yield('title')</title>
	<link href="{{url('user/img/favicon.png')}}" rel="icon" type="image/png">
	<link href="{{url('user/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('user/plugins/selectbox/select_option1.css')}}" rel="stylesheet">
	<link href="{{url('user/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{url('user/plugins/flexslider/flexslider.css')}}" media="screen" rel="stylesheet" type="text/css">
	<link href="{{url('user/plugins/calender/fullcalendar.min.css')}}" rel="stylesheet">
	<link href="{{url('user/plugins/animate.css')}}" rel="stylesheet">
	<link href="{{url('user/plugins/pop-up/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{url('user/plugins/rs-plugin/css/settings.css')}}" media="screen" rel="stylesheet" type="text/css">
	<link href="{{url('user/plugins/owl-carousel/owl.carousel.css')}}" media="screen" rel="stylesheet" type="text/css"><!-- GOOGLE FONT -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'><!-- CUSTOM CSS -->
	<link href="{{url('user/css/style.css')}}" rel="stylesheet">
	<link href="{{url('user/css/default.css')}}" id="option_color" rel="stylesheet"><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
  <![endif]-->

	<style>
	.vertical-menu {
	   height: 100%;
	   overflow-y: auto;
	   position: fixed;
	}

	.vertical-menu a:hover {
	   background-color: #ccc;
	}

	.vertical-menu a.active {
	   background-color: #4CAF50;
	   color: white;
	}
	</style>
</head>
<body class="body-wrapper">
	<div class="main_wrapper">
		<header class="header-wrapper">
			<div class="header clearfix">
				<nav class="navbar navbar-main navbar-default">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="header_inner">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#main-nav" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand logo clearfix" href="{{url('/')}}"><img alt="" class="img-responsive" src="{{url('user/logo2.png')}}"></a>
									</div><!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="main-nav">
										<ul id="nav" class="nav navbar-nav navbar-right">
											<li @if($active == 1) class="active" @endif>
												<a aria-expanded="false" aria-haspopup="true"  href="{{url('/')}}" role="button">Home</a>
											</li>
											<li class="dropdown @if($active == 2) active @endif  ">
												<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Courses</a>
												<ul class="dropdown-menu">
													@foreach($courses as $course)
													<li class="dropdown">
														<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">{{$course->course_name}}</a>
														<ul class="dropdown-menu">
															@foreach($course->category as $category)
															<li><a href="{{url('/course/'.$category->id)}}">{{$category->category_name}}</a></li>
															@endforeach
														</ul>
													</li>
													@endforeach
												</ul>
											</li>
											<li  @if($active == 3) class="active" @endif>
												<a  href="{{url('/contact')}}" role="button">Contact Us</a>
											</li>
										</ul>
									</div><!-- navbar-collapse -->
								</div>
							</div>
						</div>
					</div><!-- /.container -->
				</nav><!-- navbar -->
			</div>
		</header>
		@yield('content')
		<f
			<div class="footer clearfix" style="position: relative;z-index: 33">
				<div class="container">
					<div class="row clearfix">
						<div class="col-sm-6 col-xs-12 copyRight">
							<p><a href="http://www.cse.mbstu.ac.bd/">© 2018 Copyright CSE MBSTU</a></p>
						</div><!-- col-sm-6 col-xs-12 -->
						<div class="col-sm-6 col-xs-12 privacy_policy">
							<a href="{{url('/contact')}}">Contact us</a>
						</div><!-- col-sm-6 col-xs-12 -->
					</div><!-- row clearfix -->
				</div><!-- container -->
			</div><!-- footer -->
		</footer>
	</div><!-- JQUERY SCRIPTS -->
	@yield('script')
	<script src="{{url('user/plugins/jquery/jquery-1.11.1.min.js')}}">
	</script> 
	<script src="{{url('user/plugins/bootstrap/js/bootstrap.min.js')}}">
	</script> 
	<script src="{{url('user/plugins/flexslider/jquery.flexslider.js')}}">
	</script> 
	<script src="{{url('user/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}">
	</script> 
	<script src="{{url('user/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}">
	</script> 
	<script src="{{url('user/plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}">
	</script> 
	<script src="{{url('user/plugins/pop-up/jquery.magnific-popup.js')}}">
	</script> 
	<script src="{{url('user/plugins/animation/waypoints.min.js')}}">
	</script> 
	<script src="{{url('user/plugins/count-up/jquery.counterup.js')}}">
	</script> 
	<script src="{{url('user/plugins/animation/wow.min.js')}}">
	</script> 
	<script src="{{url('user/plugins/animation/moment.min.js')}}">
	</script> 
	<script src="{{url('user/plugins/calender/fullcalendar.min.js')}}">
	</script> 
	<script src="{{url('user/plugins/owl-carousel/owl.carousel.js')}}">
	</script> 
	<script src="{{url('user/plugins/timer/jquery.syotimer.js')}}">
	</script> 
	<script src="{{url('user/plugins/smoothscroll/SmoothScroll.js')}}">
	</script> 
	<script src="{{url('user/js/custom.js')}}">
	</script>
	<script>
	  function initMap() {
	    var myLatLng = {lat: 24.2353838, lng: 89.8916568};

	    // Create a map object and specify the DOM element
	    // for display.
	    var map = new google.maps.Map(document.getElementById('map'), {
	      center: myLatLng,
	      zoom: 15
	    });

	    // Create a marker and set its position.
	    var marker = new google.maps.Marker({
	      map: map,
	      position: myLatLng,
	      title: 'Hello World!'
	    });
	  }

	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=#&callback=initMap"
    async defer></script>

</body>
</html>