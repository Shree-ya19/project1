<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function programs()
    {
        return view("frontend.programs");
    }
    public function admission()
    {
        return view("frontend.admission");
    }
    public function news_events()
    {
        return view("frontend.news_event");
    }
    public function golden_family()
    {
        return view("frontend.golden_family");
    }
    public function event_calander()
    {
        return view("frontend.event_calander");
    }
    public function beyond_acedemics()
    {
        return view("frontend.beyond_acedemics");
    }
    public function contact_us()
    {
        return view("frontend.contact_us");
    }
    public function core_values()
    {
        return view("frontend.core_values");
    }
  
    public function student_login()
    {
        return view("frontend.student_login");
    }
    public function about_us()
    {
        return view("frontend.about_us");
    }
    public function home()
    {
        return view("welcome");
    }
    public function form_of_interest()
    {
        return view("frontend.form_of_interest");
    }
    public function student_register()
    {
        return view("frontend.student_register");
    }
}
