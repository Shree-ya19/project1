<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\LoginCustomerRequest;
use App\Http\Requests\Customer\RegisterCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerAuthController extends Controller
{
    public function registerPage()
    {
        return view('customer.auth.register');
    }

	 public function LoginPage()
    {
        return view('customer.auth.login');
    }
    
	public function register(RegisterCustomerRequest $request)
{
    $data = $request->validated();
    $data['password'] = Hash::make($data['password']); // ✅ Hash the password

    Customer::create($data);

    return redirect(route('customer.loginPage'))->with('success', 'Your account has been registered successfully');
}

	public function login(LoginCustomerRequest $request): RedirectResponse
    {
            $request->authenticate();
    
            $request->session()->regenerate();
    
            return redirect(route('welcome'))->with('success','Your account has been logged in');
    
    }
    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect(route('customer.loginPage'))->with('success','Your account has been logged out');
    }


}