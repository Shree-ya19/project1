<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calendar\StoreCalendarRequest;
use App\Http\Requests\Calendar\UpdateCalendarRequest;
use App\Models\Calendar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Retrieve all calendar entries
    $calendars = Calendar::all();

    // Pass the data to the view
    return view('admin.calendar.index', compact('calendars'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.calendar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCalendarRequest $request)
    {
    Calendar::create($request->validated());
    Alert::success('Data created Succesfully');
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
    public function edit(Calendar $calendar) 
{ 
return view('admin.calendar.edit',compact('calendar')); 
} 

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCalendarRequest $request, 
    Calendar $calendar) 
    { 
    $calendar->update($request->validated()); 
    Alert::success('Data updated succesfully');
    return redirect(route('admin.calendar.create')); 
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendar $calendar)
    {
        $calendar->delete();
        Alert::success("data deleted successfully");
        return back();

    }
}
