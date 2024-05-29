@extends('front.layouts.app')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Registration</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Registration</li>
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
							<h2>Register Your Organization</h2>
							<!-- Form -->
							<form id="signup-form" class="form" method="post" action="{{ route('sign-up.store') }}" enctype="multipart/form-data">

                                @csrf
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Organization Name</label>
											<input type="text" value="{{old('o_name')}}" name="o_name" placeholder="Organization Name">
											<div class="invalid-feedback" id="o_name_error"></div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Organization Category</label>
											<select name="organization_cat">
												<option value="">--select--</option>
												@foreach($organizationCat as $res)
												<option value="{{$res->id}}">{{$res->name}}</option>
												@endforeach
											</select>
											<div class="invalid-feedback" id="organization_cat_error"></div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Organization Phone/Mobile</label>
											<input type="text" value="{{old('o_mobile')}}" name="o_mobile" placeholder="Organization Phone/Mobile">
											<div class="invalid-feedback" id="o_mobile_error"></div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Organization Email Address</label>
											<input type="text" value="{{old('o_email')}}"  name="o_email" placeholder="Organization Email">
											<div class="invalid-feedback" id="o_email_error"></div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Organization Photo</label>
											<input type="file" value="{{old('o_photo')}}"  name="o_photo" placeholder="Organization Photo">
											<div class="invalid-feedback" id="o_photo_error"></div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Organization location</label>
											<input type="file" value="{{old('o_photo')}}"  name="o_photo" placeholder="Organization Photo">
											<div class="invalid-feedback" id="o_photo_error"></div>

										</div>
									</div>

									<div class="col-lg-6">
									<div class="form-group">
											<label>Organization Photo</label>
											<input type="text"   name="addredd" id="autocomplete" placeholder="Organization Photo">
											<div class="invalid-feedback" id="o_photo_error"></div>

										</div>
									</div>
									<div class="form-group" id="latitudeArea">
											<label>Latitude</label>
											<input type="text" id="latitude" name="latitude" class="form-control">
										</div>
										<div class="form-group" id="longtitudeArea">
											<label>Longitude</label>
											<input type="text" name="longitude" id="longitude" class="form-control">
										</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Authorised Person Name</label>
											<input type="text" value="{{old('auth_name')}}" name="auth_name" placeholder="Your Name">
											<div class="invalid-feedback" id="auth_name_error"></div>

										</div>
									</div>
									
									
									<div class="col-lg-6">
										<div class="form-group">
											<label>Authorised Person Your Email</label>
											<input type="text"  value="{{old('auth_email')}}"  name="auth_email" placeholder="Email Address">
											<div class="invalid-feedback" id="auth_email_error"></div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Your Personal Phone/Mobile</label>
											<input type="text" value="{{old('p_mobile')}}"  name="p_mobile" placeholder="Mobile Number">
											<div class="invalid-feedback" id="p_mobile_error"></div>

										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label>Organization PAN</label>
											<input type="text" value="{{old('o_pan_no')}}" name="o_pan_no" placeholder="PAN">
											<div class="invalid-feedback" id="o_pan_no_error"></div>

										</div>
									</div>
									
									<div class="col-lg-6">
										<div class="form-group">
											<label>Aadhaar No.</label>
											<input type="text"  value="{{old('aadhar')}}" name="aadhar" placeholder="Aadhaar No.">
											<div class="invalid-feedback" id="aadhar_error"></div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Your PAN No</label>
											<input type="text" value="{{old('pan_no')}}"  name="pan_no" placeholder="PAN" >
											<div class="invalid-feedback" id="pan_no_error"></div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Upload Organization PAN</label>
											<input type="file" value="{{old('upload_o_pan')}}" name="upload_o_pan">
											<div class="invalid-feedback" id="upload_o_pan_error"></div>

										</div>
									</div>
									
									<div class="col-lg-6">
										<div class="form-group">
											<label>Upload Aadhaar</label>
											<input type="file" value="{{old('upload_Aadhar')}}" name="upload_Aadhar">
											<div class="invalid-feedback" id="upload_Aadhar_error"></div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Upload Personal PAN</label>
											<input type="file" value="{{old('upload_personal_pan')}}" name="upload_personal_pan">
											<div class="invalid-feedback" id="upload_personal_pan_error"></div>

										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
										<button id="submit-btn"  class="btn" type="button">Send</button>
                                            
										</div>
										
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

<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=Your_Google_Key=places&callback=initAutocomplete"></script>
    <script>
        $(document).ready(function () {
            $("#latitudeArea").addClass("d-none");
            $("#longtitudeArea").addClass("d-none");
        });
    </script>
    <script>
        google.maps.event.addDomListener(window, 'load', initialize);
        function initialize() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());
                $("#latitudeArea").removeClass("d-none");
                $("#longtitudeArea").removeClass("d-none");
            });
        }
    </script>

@endsection