<?php

namespace App\Http\Controllers;

use App\Models\GoldenMember;
use Illuminate\Http\Request;
use App\Models\Member; // Make sure you have a Member model or adjust based on your setup

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search');

        $results = GoldenMember::where('name', 'like', "%{$query}%")
                        ->orWhere('description', 'like', "%{$query}%")
                        ->get();

        $resultsCount = $results->count();

        if ($results->isEmpty()) {
            return view('frontend.search', [
                'message' => 'No member found.',
                'resultsCount' => $resultsCount
            ]);
        }

        return view('frontend.search', [
            'results' => $results,
            'resultsCount' => $resultsCount
        ]);
    }
}
