<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="" />
	<link rel="icon" type="image/png" href="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<!-- Bootstrap core CSS     -->
	<?php echo link_tag('Assets/css/bootstrap.min.css'); ?>

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	@stack('css') {{--CSS For Individual Page--}}
</head>

<body >

<div class="wrapper">
	<div class="container">
		@yield('content')
	</div>
</div>
</body>

@include('layouts.includes.javaScripts')

@stack('scripts')
</html>
