@extends('front.layouts.app')
@section('content')
<!-- Start Schedule Area -->
<section class="schedule">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 ">
                    <!-- single-schedule -->
                    <div class="single-schedule first">
                        <div class="inner">
                            <div class="icon">
                            </div>
                            <div class="single-content text-center">
                                <!-- <span>Lorem Amet</span> -->
                                <img src="{{asset('assets/front/img/images/donate-icon.png')}}" alt="icon" height="200px" width="200px"><br>
                                <h4>Services for Donors.</h4><br>
                                <a href="{{route('donatate_step_one')}}">Donate<i class="fa fa-long-arrow-right"></i></a><br>
                                <a href="#">Download Donation Receipt<i class="fa fa-long-arrow-right"></i></a><br>
                                <a href="#">Guidance<i class="fa fa-long-arrow-right"></i></a><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule middle">
                        <div class="inner">
                            <div class="icon">
                            </div>
                            <div class="single-content text-center">
                                <!-- <span>Lorem Amet</span> -->
                                <img src="{{asset('assets/front/img/images/d.webp')}}" alt="icon" height="175px" width="175px"><br>
                                <h4>Donation Receiving Services</h4><br>
                                <a href="{{route('register')}}">Registration<i class="fa fa-long-arrow-right"></i></a><br>
                                <a href="{{route('login')}}">Login<i class="fa fa-long-arrow-right"></i></a><br>
                                <a href="#">Guidance<i class="fa fa-long-arrow-right"></i></a><br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!--/End Start schedule Area -->
@endsection