<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Upcomingevents\StoreUpcomingEventRequest;
use App\Http\Requests\Upcomingevents\UpdateUpcomingEventRequest;
use App\Models\UpcomingEvent;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UpcomingEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $upcomingEvents=UpcomingEvent::latest()->get();
        return view('admin.upcomingevents.index',compact('upcomingEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $upcomingEvents=UpcomingEvent::get();
        return view('admin.upcomingevents.create',compact('upcomingEvents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpcomingEventRequest $request)
    {
        UpcomingEvent::create($request->validated());
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
    $upcomingevent=UpcomingEvent::findOrFail($id);
        return view('admin.upcomingevents.edit',compact('upcomingevent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUpcomingEventRequest $request, $id)
    {
        $upcomingevent= UpcomingEvent::findOrFail($id);
        $upcomingevent->update($request->validated());
        Alert::success('Data updated successfully');
        return redirect()->route('admin.upcomingevents.index');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UpcomingEvent $upcomingevent)
    {
        $upcomingevent->delete();//model name singular xa so variable ni singular huna parxxa
        Alert::success('Data is deleted succesfully');
        return back();

    }
}
