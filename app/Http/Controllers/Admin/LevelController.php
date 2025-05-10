<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Level\StoreLevelRequest;
use App\Http\Requests\Level\UpdateLevelRequest;
use App\Models\Level;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::whereNotNull('level_id')->get();  
        return view('admin.level.index',compact('levels'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $levels = Level::with('levels')->where('level_id',NULL)->get(); // Fetch all categories
        return view('admin.level.create', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLevelRequest $request)
    {
        Level::create($request->validated());
        Alert::success('Level created successfully');
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
    public function edit(Level $level)
    {
        $levels = Level::with('levels')->where('level_id',NULL)->get(); // Fetch all categories
         return view('admin.level.edit', compact('levels','level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLevelRequest $request, Level $level)
    {
        $level->update($request->validated());
        Alert::success('Data updated successfully');
        return redirect(route('admin.level.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Level $level)
    {
        $level->delete();
        Alert::success('Data deleted successfully');
        return back();

    }
}
