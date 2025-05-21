<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $reviews = Review::orderBy('created_at', 'desc')->get(); // Make sure it's fetching all
    return view("admin.review.index", compact('reviews'));
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
    $review = Review::findOrFail($id);
    return view('admin.review.show', compact('review'));
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
    public function destroy(Review $review)
    {
        $review->delete();
        Alert::success('Data deleted successfully');
        return back();
    }

    public function approve(Review $review)
{
    $review->update([
        'is_approved' => true,
    ]);

    return redirect()->route('admin.review.index')->with('success', 'Review approved successfully.');
}


}
