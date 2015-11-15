<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Nyari!</title>
	<script	src="https://maps.googleapis.com/maps/api/js?v=3&signed_in=true&libraries=places"></script>
	<script src="../js/jquery-2.1.4.min.js"></script>
	<script src="../js/angular 1.4.7.min.js"></script>
	<script src="../js/angular-route.min.js"></script>
	<script src="../js/controller.js"></script>
	<script src="../js/service.js"></script>
	<script src="../js/app.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/app.css" />
</head>
<body ng-app="NyariApp">
<div class="">
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">My App</a>
			    </div>			    
				
				<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="main-navbar">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="#">Pencarian<span class="sr-only">(current)</span></a></li>
			        <li><a href="#">Tentang kami</a></li>
			      </ul>
			    </div>
			</div>
		</nav>
	</header>
			    
	<div class="container">	
		<div id="kategori-area" class="col-xs-12 col-md-3" ng-controller="kategoriCtrl">
			<ul class="list-group">
				<li class="list-group-item" ng-repeat="item in KategoriData">{{ item.Nama }}</li>
			</ul>
		</div>
		<div id="peta-area" class="col-xs-12 col-md-6"></div>
		<div id="deskripsi-area" class="col-xs-12 col-md-3">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Bengkel Eksotis</h3>
			  </div>
			  <div class="panel-body">
			    <div id="detail-alamat">			    
			    		Alamat: <br>
			    		Jl Harapan Palsu <br>
			    		Jakarta Utara			    	
			    </div>
			    <br>
			    <div id="detail-layanan">
			    	Melayani: <br>
			    	- Service berat <br>
			    	- Service ringan <br>
			    	- Ganti oli <br>
			    	- Ganti kabel <br>
			    	- Permak <br>
			    	- Cat
			    </div>
			    <br>
			    <div id="detail-kontak">
			    	0873 2342 2323 <br>
			    	(021) 2344 423424
			    </div>
			    
			    <div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Komentar</h3>
				  </div>
				  <div class="panel-body">
				  	<div>
				  		<p>Encep</p>
				  		<p>Pelayanan yang bagus om</p>
				  	</div>
				  	<div>
				  		<p>Encep</p>
				  		<p>Pelayanan yang bagus om</p>
				  	</div>
				  	<div>
				  		<p>Encep</p>
				  		<p>Pelayanan yang bagus om</p>
				  	</div>
				  </div>
				 </div>				 
			  </div>
			</div>
		</div>
	</div>
	
</div>
</body>
</html>
