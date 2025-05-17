<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\about\StoreAboutRequest;
use App\Http\Requests\about\UpdateAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::get()->all();
        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $aboutsCount = About::count();
       if ($aboutsCount >= 1) {
    Alert::error('Limit Reached', 'You cannot add more than 1 about data');
    return redirect()->route('admin.about.index');
}

return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        About::create($request->validated());
        Alert::success('Data stored successfully');
        return back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $about->update($request->validated());
        Alert::success('Data updated successfully');
        return redirect(route('admin.about.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        Alert::success('Data deleted successfully');
        return back();
    }
}
