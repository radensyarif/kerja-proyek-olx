@extends('master')

@section('carousel')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/harley.jpg')}}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Motor Bekas</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/car.jpg')}}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mobil Bekas</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/phone.jpg')}}" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>HandPhone</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container mt-5 mb-5">
	<div class="card-deck">
	  <div class="card">
	    <img src="{{asset('img/harley.jpg')}}" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Motor</h5>
	      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	      <span class="badge badge-warning">Rp. 1.500.000</span>
	      <p class="card-text"><small class="text-muted">3 hours ago</small></p>
	      <span class="badge badge-primary" type="submit">Beli</span>
	    </div>
	  </div>
	  <div class="card">
	    <img src="{{asset('img/harley.jpg')}}" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Mobil</h5>
	      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	      <span class="badge badge-warning">Rp. 1.500.000</span>
	      <p class="card-text"><small class="text-muted">35 minutes ago</small></p>
	      <span class="badge badge-primary" type="submit">Beli</span>
	    </div>
	  </div>
	  <div class="card">
	    <img src="{{asset('img/harley.jpg')}}" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Handphone</h5>
	      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	      <span class="badge badge-warning">Rp. 1.500.000</span>
	      <p class="card-text"><small class="text-muted">2 hours ago</small></p>
	      <span class="badge badge-primary" type="submit">Beli</span>
	    </div>
	  </div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection