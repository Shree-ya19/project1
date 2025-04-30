<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Latestnews\StoreLatestNewsrequest;
use App\Http\Requests\Latestnews\UpdateLatestNewsrequest;
use App\Models\LatestNews;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LatestNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestNews = LatestNews::all();
        return view('admin.latestnews.index', compact('latestNews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.latestnews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLatestNewsrequest $request)
    {
        LatestNews::create($request->validated());
        Alert::success('Data created succesfully');
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
    public function edit(string $id)
    {
        $latestNews = LatestNews::findOrFail($id);
        return view('admin.latestNews.edit',compact('latestNews'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLatestNewsrequest $request, LatestNews $latestnews)
{
    // Update the record with validated data
    $latestnews->update($request->validated());
    
    Alert::success('Data updated successfully');
    
    return redirect(route('admin.latestnews.index'));  // Redirect back to the index after update
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LatestNews $latestnews)
    {
        $latestnews->delete();
        Alert::success('Data deletesd successfully');
        return back();
    }
}
