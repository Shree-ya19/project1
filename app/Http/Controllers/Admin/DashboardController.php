<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
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
        return redirect(route('login')); 
    }
}
