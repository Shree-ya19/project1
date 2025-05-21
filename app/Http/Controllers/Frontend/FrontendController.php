<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Requests\InterestForm\StoreInterestRequest;
use App\Http\Requests\Review\StoreSubmitReview;
use App\Models\About;
use App\Models\Admission;
use App\Models\BeyondAcademic;
use App\Models\Calendar;
use App\Models\Contact;
use App\Models\CoreValue;
use App\Models\Feature;
use App\Models\GoldenMember;
use App\Models\InterestForm;
use App\Models\LatestNews;
use App\Models\Review;
use App\Models\SystemSetting;
use App\Models\UpcomingEvent;
use App\Models\Welcome;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function programs()
    {
        return view("frontend.programs");
    }
    public function admission()
    {   
        $admission = Admission::first(); // Get one record
        $systemsetting = SystemSetting::first();
       return view('frontend.admission', compact('admission', 'systemsetting'));
    }
    public function news_events()
    {
        $latestNews = LatestNews::all();
        $upcomingEvents =UpcomingEvent::all();
        return view("frontend.news_event", ['latestNews' => $latestNews],['upcomingEvents' => $upcomingEvents]);
    }
    public function golden_family()
    {
        $goldenmembers = GoldenMember::all();
    
        // Filter the members by role
        $principal = $goldenmembers->where('role', 'principal');
        $teachers = $goldenmembers->where('role', 'teacher');
        $shareholders = $goldenmembers->where('role', 'shareholder');
        $dedicated = $goldenmembers->where('role', 'other');
    
        // Pass the filtered data to the view
        return view("frontend.golden_family", compact('principal', 'teachers', 'shareholders', 'dedicated'));
    }
    
    
    public function event_calander()
    {
        $calendar = Calendar::latest()->first(); // fetch latest calendar data
        
    return view("frontend.event_calander", compact('calendar'));
    }
    public function beyond_acedemics()
    {
        $beyondacademics = BeyondAcademic::all();
        return view("frontend.beyond_acedemics",compact('beyondacademics'));
    }
    public function contact_us()
    {
        return view("frontend.contact_us");
    }
    public function storeContactMessage(StoreContactRequest $request)
{
    // Check if the user is logged in as a customer
    if (!auth('customer')->check()) {
        return redirect()->route('customer.loginPage')
                         ->with('error', 'You must login first to submit the contact form.');
    }

    Contact::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'message' => $request->message,
    ]);

    return redirect()->back()->with('success', 'Message sent successfully!');
}

   public function storeInterestForm(StoreInterestRequest $request)
{
    // Check if the user is logged in as a customer
    if (!auth('customer')->check()) {
        return redirect()->route('customer.loginPage')
                         ->with('error', 'You must login first to submit the interest form.');
    }

    InterestForm::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'interest' => $request->interest,
        'message' => $request->message,
    ]);

    return redirect()->back()->with('success', 'Your interest has been submitted successfully!');
}


    
        
    
    public function core_values()
    {
        $corevalues=CoreValue::all();
        return view("frontend.core_values", compact('corevalues'));
    }
  
    public function student_login()
    {
        return view("frontend.student_login");
    }
    public function about_us()
    {
        $abouts=About::limit(1)->get();
        $systemsetting = SystemSetting::first();
        return view("frontend.about_us",compact('abouts','systemsetting'));
    }
    public function home()
    {
        $reviews = Review::where('is_approved', true)->latest()->limit(10)->get();
        $welcomes=Welcome::all();
        $features=Feature::limit(4)->get();
        return view("welcome",compact('features','welcomes','reviews'));
    }
    public function form_of_interest()
    {
        return view("frontend.form_of_interest");
    }
    public function student_register()
    {
        return view("frontend.student_register");
    }
    public function reviewall()
    {    
        $reviews = Review::where('is_approved', true)->get();

    return view('frontend.reviewall', compact('reviews'));
    }

    // Show the review form (GET request)
public function give_review()
{
    $reviews = Review::latest()->limit(2)->get();
    return view("frontend.give_review",compact('reviews'));
}

// Handle the review form submission (POST request)
public function storeSubmitReview(StoreSubmitReview $request)
{
    Review::create([
        'name' => $request->name,
        'relation' => $request->relation,
        'message' => $request->message,
        'is_approved' => false,  // default to pending approval
    ]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Thank you! Your review will be shown after admin approval.');
}

}
