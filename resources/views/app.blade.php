<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{ isset($title) ? $title . ' - ' : null }}Falcon Player</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Falcon Player - Falcon Christmas">
	<meta name="keywords" content="fpp, falcon player, falcon christmas, raspberry pi">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}">
	<link rel="apple-touch-icon" href="/favicon.png">
</head>
<body class="@yield('body-class', 'docs') language-php">

	<span class="overlay"></span>

	<nav class="main">
		<div class="container">
			<a href="/" class="brand">
				<img src="/assets/img/logo.png" height="55" alt="Falcon Christmas logo">
				Falcon Christmas
			</a>

			<div class="responsive-sidebar-nav">
				<a href="#" class="toggle-slide menu-link btn">&#9776;</a>
			</div>

			@if (Request::is('docs*') && isset($currentVersion))
				@include('partials.switcher')
			@endif

			<ul class="main-nav">
				@include('partials.main-nav')
			</ul>
		</div>
	</nav>

	@yield('content')

	<footer class="main">
		<ul>
			@include('partials.main-nav')
		</ul>
		
	</footer>

	@if (Request::is('docs*') && isset($currentVersion))
	<script>
		var algolia_app_id      = '<?php echo Config::get('algolia.connections.main.id', false); ?>';
		var algolia_search_key  = '<?php echo Config::get('algolia.connections.main.search_key', false); ?>';
		var version             = '<?php echo $currentVersion; ?>';
	</script>

		@include('partials.algolia_template')
	@endif

	<script src="{{ elixir('assets/js/app.js') }}"></script>
	<script src="/assets/js/viewport-units-buggyfill.js"></script>
	<script>window.viewportUnitsBuggyfill.init();</script>

</body>
</html>