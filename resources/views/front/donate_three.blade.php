@extends('front.layouts.app')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Donate</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Donate</li>
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
				<div class="col-lg-12">
					<div class="">
						<div class="contact-us-form">
							<form class="form" method="post" action="{{url('/donates-save/'.$id)}}">
								@csrf
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<h6 class="mb-2">Amount</h6>
											<input type="number" name="amount" placeholder="Enter Amount" required="">
										</div>
									</div>
									<div class="col-lg-12">
										<h6 class="mb-2">Your Preferred Method of Donation</h6>
										<div class="form-check" style="padding-left: 20px;">
											<input class="form-check-input"  value="online"type="radio" name="payment_method"
												id="flexCheckDefault">
											<label class="form-check-label" for="flexCheckDefault">
												online
											</label>
										</div>
										

										<div class="container">
									<div class="row p-3">
										<div class="col text-start">
										<a href="{{route('donatate_step_two')}}">
												<button class="btn btn-primary">Previous</button>
											</a>
										</div>
										<div class="col text-end">
												<button type="submit" class=" btn btn-primary">Donate</button>
										</div>
									</div>
								</div>
										
										
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!--/ End Contact Us -->
@endsection