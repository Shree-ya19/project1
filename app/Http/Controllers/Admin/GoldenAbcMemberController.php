<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoldenMember\StoreGoldenMemberRequest;
use App\Http\Requests\GoldenMember\UpdateGoldenMemberRequest;
use App\Models\GoldenFamily;
use App\Models\GoldenMember;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GoldenAbcMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goldenmembers=GoldenMember::all();
        return view('admin.goldenmember.index',compact('goldenmembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.goldenmember.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoldenMemberRequest $request)
    {
        GoldenMember::create($request->validated());
        Alert::success("Member created succesfully.");
        return back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $goldenmember = GoldenMember::findOrFail($id);
        return view('admin.goldenmember.show', compact('goldenmember'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $goldenmember=GoldenMember::findOrFail($id);
        return view('admin.goldenmember.edit',compact('goldenmember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoldenMemberRequest $request, $id)
    {
        $goldenmember=GoldenMember::findOrFail($id);
        $goldenmember->update($request->validated());
        Alert::success('Data updated succesfully');
        return redirect(route('admin.goldenmember.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GoldenMember $goldenmember)
    {
        $goldenmember->delete();
        Alert::success('Member deleted succesfully');
return back();

    }
}
