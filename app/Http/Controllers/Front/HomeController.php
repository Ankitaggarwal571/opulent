<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OrganizaionCat;
use App\Models\Organization;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function donatate_step_one()
    {
        $organizationCat = OrganizaionCat::get();
        return view('front.donate_one',compact('organizationCat'));
    }
    public function donatate_step_two()
    {
        return view('front.donate_two');
    }
    public function donatate_step_three()
    {
        return view('front.donate_three');
    }
}
