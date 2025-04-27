<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InterestForm;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InterestFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interests = InterestForm::latest()->get();
        return view('admin.interestform.index',compact('interests'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $interest = InterestForm::findOrFail($id);

        // If the message is unseen, mark it as seen
        if (!$interest->status) {
            $interest->status = 1;
            $interest->save();
        }
    
        return view('admin.interestform.show', compact('interest'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InterestForm $interestFrom)
    {
        $interestFrom->delete();
        Alert::success('Data deleted succesfully');
        return back();
    }
}
