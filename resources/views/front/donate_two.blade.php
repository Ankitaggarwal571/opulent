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
							<!-- <h2>Register Your Organization</h2> -->
							<!-- <p>If you have any questions please fell free to contact with us.</p> -->
							<!-- Form -->
							<form class="form" method="post" action="{{url('/donate-update/'.$id)}}">
								@csrf
								<input type="hidden" name="id" value="{{$id}}">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" name="fname" value="{{old('fname')}}" placeholder="First Name">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" name="lname" value="{{old('lname')}}"  placeholder="Last Name">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Phone/Mobile</label>
											<input type="text" name="phone" value="{{old('phone')}}" placeholder="Mobile" >
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Email Address</label>
											<input type="text" name="email" value="{{old('email')}}" placeholder="Your Email">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Street Address</label>
											<input type="text" value="{{old('address')}}"  name="address" placeholder="Address">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Zip</label>
											<input type="text" value="{{old('zip')}}" name="zip" placeholder="Zip" id="zip">

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>City</label>
											<input type="text" name="city"  value="{{old('city')}}" placeholder="City"  id="city">

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>State</label>
											<input type="text" name="state"  value="{{old('state')}}"  placeholder="State"  id="state">

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Country</label>
											<select class="nice-select form-control wide" tabindex="0" name="country" >
												<option value="india">India</option>
											</select>
											
										</div>
										<div class="container">
											<div class="row p-3">
												<div class="col text-start">
												<a href="{{route('donatate_step_one')}}">
														<button class="btn btn-primary">Previous</button>
													</a>
												</div>
												<div class="col text-end">
												
														<button type="submit" class="btn btn-primary">Next</button>
												
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


	<script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
	<script>
	$(document).ready(function() {
    $('#submit-btn').click(function(e) {
        e.preventDefault(); 
        var formData = new FormData($('#signup-form')[0]); // Create FormData object
        $.ajax({
            type: 'POST',
            url: $('#signup-form').attr('action'),
            data: formData,
            processData: false, // Prevent jQuery from processing the data
            contentType: false, // Prevent jQuery from setting the Content-Type
            success: function(response) {
                window.location.href = "{{ route('login') }}";
            },
            error: function(xhr, status, error) {
                var errors = JSON.parse(xhr.responseText);
                $.each(errors.errors, function(key, value) {
                    $('#' + key + '_error').text(value);
                });
            }
        });
    });
});



		$(document).ready(function(){
    $("#zip").change(function(){ // Change event for zip input
        var zip = $(this).val();
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{route('get.data')}}",
            method: 'post',
            data: {
                zip: zip,
                _token: csrfToken
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(result) {
                console.log(result); // Log the response for debugging

                if(result === 'No') {
                    alert("Wrong PIN Code Entered!");
                    $("#state").val('');
                    $("#city").val('');
                } else {
                    $("#state").val(result.state);
                    $("#city").val(result.block);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", xhr.responseText);
            }
        });
    });
});
    </script>
	<!--/ End Contact Us -->
@endsection