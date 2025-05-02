<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BeyondAcademic\StoreBeyondAcademicRequest;
use App\Http\Requests\BeyondAcademic\UpdateBeyondAcademicRequest;
use App\Models\BeyondAcademic;
use App\Models\ActivityImage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BeyondAcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beyondacademics = BeyondAcademic::with('images')->get();
        
        return view('admin.beyondacademic.index',compact('beyondacademics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.beyondacademic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeyondAcademicRequest $request)
    {
        // Validate and store the BeyondAcademic data
        $validatedData = $request->validated();
        $beyondAcademic = BeyondAcademic::create([
            'activity' => $validatedData['activity'],
            'detail' => $validatedData['detail'],
        ]);

        // Handle image upload and store images related to the BeyondAcademic activity
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                // Store each image in the 'public/activity_images' folder
                $imagePath = $image->store('activity_images', 'public');

                // Store the image reference in the ActivityImage table
                ActivityImage::create([
                    'activity_id' => $beyondAcademic->id,
                    'image' => $imagePath,
                ]);
            }
        }

        Alert::success('BeyondAcademic data created successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $beyondacademic = BeyondAcademic::with('images')->findOrFail($id);
        return view('admin.beyondacademic.show', compact('beyondacademic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BeyondAcademic $beyondacademic)
    {
        return view('admin.beyondacademic.edit',compact('beyondacademic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeyondAcademicRequest $request, BeyondAcademic $beyondacademic)
    {
        $beyondacademic->update($request->validated());
        Alert::success('Data updated successfully');
        return redirect(route('admin.beyondacademic.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BeyondAcademic $beyondacademic)
    {
        // Delete related images before deleting the BeyondAcademic record
        $beyondacademic->images->each(function ($image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($image->image);  // Delete the file from storage
        });

        // Delete the BeyondAcademic record
        $beyondacademic->delete();
        Alert::success('Data deleted successfully');
        return back();
    }
}
