<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admission\StoreAdmissionRequest;
use App\Http\Requests\Admission\UpdateAdmissionRequest;
use App\Models\Admission;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // To get a specific number of records (e.g., 5 records)
$admissions = Admission::take(5)->get();

        return view('admin.admission.index',compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdmissionRequest $request)
    {
        Admission::create($request->validated());
        Alert::success("Data Created Succesfully");
        return Back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $admissions = Admission::findOrFail($id);  // Fetch admission by ID
        return view('admin.admission.show', compact('admissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admission $admission)
    {
        return view('admin.admission.edit',compact('admission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdmissionRequest $request, Admission $admission){

        $admission->update($request->validated());
        Alert::success("Data Updated Succesfully");
        return redirect(route('admin.admission.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        $admission->delete();
        Alert::success("Data deletesd Succesfully");
        return back();
    }
}
