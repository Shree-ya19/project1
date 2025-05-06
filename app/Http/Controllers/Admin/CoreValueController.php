<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoreValue\StoreCoreValueRequest;
use App\Http\Requests\CoreValue\UpdateCoreValueRequest;
use App\Models\CoreValue;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CoreValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $corevalues = CoreValue::get()->all();
        return view('admin.corevalue.index',compact('corevalues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.corevalue.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoreValueRequest $request)
    {
        CoreValue :: create($request->validated());
        Alert::success('CoreValue added succesfully.');
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
    public function edit(CoreValue $corevalue)
    {
        return view('admin.corevalue.edit',compact('corevalue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoreValueRequest $request, CoreValue $corevalue)
    {
        $corevalue->update($request->validated());
        Alert::success('Data updated succesfully.');
        return redirect(route('admin.corevalue.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoreValue $corevalue)
    {
        $corevalue->delete();
        Alert::success('Data deleted succesfully');
        return back();
    }
}
