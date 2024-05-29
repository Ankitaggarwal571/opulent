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
	<section class="donate-section section">
    <div class="container">
        <h6 class="mb-3">Where Want To Donate?</h6>
        <div>
            @foreach($organizationCat as $res)
                <label>
                    <input type="radio" name="option" value="form{{$res->id}}" onclick="showForm('form{{$res->id}}')"> {{$res->name}}
					<br>
                </label>
            @endforeach
        </div>

        @foreach($organizationCat as $res)
            <div id="form{{$res->id}}" class="form-popup" style="display: none;">
                <form class="form" method="post" action="{{route('donate')}}">
					@csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 mx-0 px-0">
                            <div class="form-group">
                                <h6 class="mb-2">{{$res->name}}</h6>
                                    <select name="organization_name">
										<option value="">Select {{$res->name}} To Donate</option>
										@php
										$religiousOrganizations = App\Models\Organization::where('organization_cat',$res->id)->get();
										@endphp
                                        @foreach($religiousOrganizations as $org)
                                            <option value="{{$org->id}}" class="option">{{$org->o_name}}</option>
                                        @endforeach
									</select>
									@if($errors->has('organization_name'))
									<div class="invalid-feedback">{{ $errors->first('organization_name') }}</div>
									@enderror

                            </div>
                        </div>
                    </div>
					<div class="row p-3">
						<div class="next-btn text-end">
								<button type="submit" class="btn btn">Next</button>
						</div>
					</div>
                </form>
            </div>
        @endforeach

       
    </div>
</section>

	
	<script>
		function showForm(formId) {
    // Hide all forms
    document.querySelectorAll('.form-popup').forEach(function (form) {
        form.style.display = 'none';
    });

    // Show the selected form
    document.getElementById(formId).style.display = 'block';
}

	</script>
	<!--/ End Contact Us -->
@endsection