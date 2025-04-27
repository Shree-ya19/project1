<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SystemSetting\StoreSystemSettingRequest;
use App\Http\Requests\SystemSetting\UpdateSystemSettingRequest;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SystemSettingController extends Controller
{
    
    public function index()
    {
        $systemSettings = SystemSetting::all();
       return view('admin.systemSetting.index', compact('systemSettings'));
    }

    public function create()
    {
        $systemSettings = SystemSetting::get(); 
       return view('admin.systemSetting.create',compact('systemSettings')); 
    
    }

   
    public function store(StoreSystemSettingRequest $request)
    {
        SystemSetting::create($request->validated()); 
        Alert::success("Data created succsessfully.");
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
        $systemSetting = SystemSetting::findOrFail($id);
        return view('admin.systemSetting.edit',compact('systemSetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSystemSettingRequest $request, SystemSetting $systemSetting)
    {
        $systemSetting->update($request->validated());
        Alert::success('Data updated succesfully'); 
        return redirect(route('admin.systemSetting.create')); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SystemSetting $systemSetting)
    {
        $systemSetting->delete();
        Alert::success('Data deleted succesfully');
        return back();
        
    }
}
