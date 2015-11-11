<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bersantap</title>
<script
	src="https://maps.googleapis.com/maps/api/js?v=3&signed_in=true&libraries=places"></script>
<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/angular 1.4.7.min.js"></script>
<script src="../js/angular-route.min.js"></script>
<script src="../js/controller.js"></script>
<script src="../js/service.js"></script>
<script src="../js/app.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/app.css" />
</head>
<body ng-app="bersantapApp">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Bersantap</a>
			</div>

			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="/status">About</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="manage map hidden">
		<div id="kotak-peta"></div>

		<div class="panel-body">
			Cari lokasi : <input type="text" id="text-cari" class="form-control" />
		</div>
	</div>

	<a href="#status">Show status</a>
	<a href="#client-type">Show client type</a>
	<a href="#client">Show client</a>
	<div ng-view></div>
</body>
</html>
