@extends('home.master')

@section('card')
<div class="container mt-5">
	<div class="card-deck">
	  <div class="card">
	    <img src="{{asset('img/polytron.jpeg')}}" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">POLYTRON</h5>
	      <p class="card-text">TV bekas.</p>
	      <span class="badge badge-warning">Rp. 1.500.000</span>
	      <p class="card-text"><small class="text-muted">3 hours ago</small></p>
	      <span class="badge badge-primary" type="submit">Beli</span>
	    </div>
	  </div>
	  <div class="card">
	    <img src="{{asset('img/polytron.jpeg')}}" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">POLYTRON</h5>
	      <p class="card-text">TV bekas.</p>
	      <span class="badge badge-warning">Rp. 1.500.000</span>
	      <p class="card-text"><small class="text-muted">35 minutes ago</small></p>
	      <span class="badge badge-primary" type="submit">Beli</span>
	    </div>
	  </div>
	  <div class="card">
	    <img src="{{asset('img/polytron.jpeg')}}" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">POLYTRON</h5>
	      <p class="card-text">TV bekas.</p>
	      <span class="badge badge-warning">Rp. 1.500.000</span>
	      <p class="card-text"><small class="text-muted">2 hours ago</small></p>
	      <span class="badge badge-primary" type="submit">Beli</span>
	    </div>
	  </div>
	</div>
</div>
@endsection
