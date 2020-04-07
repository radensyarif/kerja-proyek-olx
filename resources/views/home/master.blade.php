<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<title>OLX Toko Online</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/fontawesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="container">
		  <a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('img/olxLogo.png')}}" width="50"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <form class="form-inline w-100 justify-content-end">
		     	<input class="form-control mr-sm-2" style="width: 100vh;" type="search" placeholder="Temukan Mobil, Motor, Handphone, dan Lainnya..." aria-label="Search">
		     	<button class="btn btn-outline-primary my-2 my-sm-0 mr-sm-2" type="submit">Search</button>
		   		<button class="btn btn-primary mr-sm-2" type="button" data-toggle="modal" data-target="#exampleModal">Login / Register</button>
		   		<button class="btn btn-warning mr-sm-2" type="submit">Jual</button>
		   </form>
		   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header bg-warning">
			        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1">
					  </div>
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-primary">Login</button>
			      </div>
			    </div>
			  </div>
			</div>
		  </div>
		</div>
	</nav>
	<ul class="nav justify-content-center navbar-light bg-light">
	  <li class="nav-item">
	    <a class="nav-link" href="{{ route('mobil') }}">Mobil bekas</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="{{ route('motor') }}">Motor bekas</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="{{ route('handphone') }}">Handphone</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="{{ route('televisi') }}">TV & Audio, Video</a>
	  </li>
	</ul>
	@yield('carousel')

	@yield('card')

	<footer class="footer">
		<ul class="nav justify-content-center mb-2">
		  <li class="nav-item mr-sm-2">
		    <a href="github.com/radensyarif/kerja-proyek-olx"><img src="{{asset('img/logo.png')}}" width="25"></a>
		  </li>
		  <li class="nav-item mr-sm-2">
		    <a href="instagram.com/rplwikrama"><img src="{{asset('img/instagram.png')}}" width="25"></a>
		  </li>
		  <li class="nav-item mr-sm-2">
		    <a href="web-whatsapp.com"><img src="{{asset('img/whatsapp.png')}}" width="25"></a>
		  </li>
		  <li class="nav-item">
		    <a href="gmail.com"><img src="{{asset('img/gmail.png')}}" width="25"></a>
		  </li>
		</ul>
	</footer>
</body>
    <script src="https://kit.fontawesome.com/cbaf4ebba0.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>
