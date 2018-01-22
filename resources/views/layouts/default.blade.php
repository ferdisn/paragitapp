<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>{{ config('app.name', 'Laravel') }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="{{ config('app.url') }}/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{ config('app.url') }}/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="{{ config('app.url') }}/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="{{ config('app.url') }}/assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="@yield('bodyclass')">
			<div id="page-wrapper">
					@include('layouts.inc.header')

					@yield('banner')

					@yield('main')    
				
					@yield('cta')

			<!-- Footer -->
            <footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>
	
					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
	
				</footer>
			</div>

		<!-- Scripts -->
        <script src="{{ config('app.url') }}/assets/js/jquery.min.js"></script>
        <script src="{{ config('app.url') }}/assets/js/jquery.dropotron.min.js"></script>
        <script src="{{ config('app.url') }}/assets/js/jquery.scrolly.min.js"></script>
        <script src="{{ config('app.url') }}/assets/js/jquery.scrollgress.min.js"></script>
        <script src="{{ config('app.url') }}/assets/js/skel.min.js"></script>
        <script src="{{ config('app.url') }}/assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="{{ config('app.url') }}/assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="{{ config('app.url') }}/assets/js/main.js"></script>
	</body>
</html>