<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Customer;
use App\Models\GoldenMember;
use App\Models\Review;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function profile(Request $request)
    {
        return view('admin.profile',[
            'user'=>$request->user(),
        ]);
    }
    public function profileUpdate(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated()); 
        $request->user()->save(); 
        Alert::success('profile updated successfully');
        return redirect(route('admin.profile.update')); 
    }
    public function logout()
    {
         
        Auth::guard('web')->logout(); 
        return redirect(route('welcome')); 
    }
public function dashboard()
{
    $subjectCount = Subject::count();
    $customerCount = Customer::count();
    $goldenMemberCount = GoldenMember::count();
    $reviewCount = Review::count();
    $userCount = User::count();

    return view('dashboard', compact(
        'subjectCount',
        'customerCount',
        'goldenMemberCount',
        'reviewCount',
        'userCount'
    ));
}


}
