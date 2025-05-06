<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feature\StoreFeatureRequest;
use App\Http\Requests\Feature\UpdateFeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::get()->all();
        return view('admin.feature.index',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $featureCount = Feature::count();

    if ($featureCount >= 4) {
        Alert::error('Feature Limit Reached', 'You cannot add more than 4 features.');
        return redirect()->route('admin.feature.index');
    }

    return view('admin.feature.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatureRequest $request)
    {
        Feature ::create($request->validated());
        Alert::success('Feature added succesfully.');
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
    public function edit(Feature $feature)
    {
        return view('admin.feature.edit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        $feature->update($request->validated());
        Alert::success('Data updated succesfully');
        return redirect(route('admin.feature.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        Alert::success('Data deletedd succesfully');
        return back();
    }
}
