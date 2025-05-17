<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Welcome\StoreWelcomeRequest;
use App\Http\Requests\Welcome\UpdateWelcomeRequest;
use App\Models\Welcome;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $welcomes = Welcome::all();
        return view('admin.welcome.index',compact('welcomes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.welcome.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWelcomeRequest $request)
    {
         Welcome::create($request->validated());
         Alert::success('Data stores successfully');
         return back();
          
    }

    /**
     * Display the specified resource.
     */
    public function show(Welcome $welcome)
    {
        return view('admin.welcome.show',compact('welcome'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Welcome $welcome)
    {
        return view('admin.welcome.edit',compact('welcome'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWelcomeRequest $request, Welcome $welcome)
    {
    $welcome->update($request->validated()); 
      Alert::success('Data updataed successfuly');
      return redirect(route("admin.welcome.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Welcome $welcome)
    {
        $welcome->delete();
        Alert::success("Data deleted successfully");
        return back();
    }
}
