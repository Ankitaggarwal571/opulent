@extends('front.layouts.app')
@section('content')

@if(session('message'))

	<h3 style="text-align: center; color:green">{{ session('message')}}</h3>
	
@endif
<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Login</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Login</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact Us -->
	<section class="contact-us section">
		<div class="container">

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<div class="inner">
						<div class="contact-us-form">
							<h2>Login Your Organization</h2>
							@if(Session::has('success'))
              <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{Session::get('success')}}
              </div>
              @elseif(Session::has('failed'))
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{Session::get('failed')}}
              </div>
              @endif
							<form class="form" method="post" action="{{route('signin')}}">
								@csrf
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Email Address</label>
											<input type="text" name="email" value="" placeholder="Email">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Password</label>
											<input type="text" name="password" placeholder="Password">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<button class="btn" type="submit">Send</button>
										</div>
										<!-- <div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div> -->
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
			<div class="contact-info">
				<div class="row">
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="icofont icofont-ui-call"></i>
							<div class="content">
								<h3>+(000) 1234 56789</h3>
								<p>info@company.com</p>
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="icofont-google-map"></i>
							<div class="content">
								<h3>2 Fir e Brigade Road</h3>
								<p>Chittagonj, Lakshmipur</p>
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="icofont icofont-wall-clock"></i>
							<div class="content">
								<h3>Mon - Sat: 8am - 5pm</h3>
								<p>Sunday Closed</p>
							</div>
						</div>
					</div>
					<!--/End single-info -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Contact Us -->

@endsection