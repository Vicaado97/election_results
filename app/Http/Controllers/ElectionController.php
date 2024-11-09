<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Lga;
use App\Models\Ward;
use App\Models\PollingUnit;

class ElectionController extends Controller
{
    public function showStates()
    {
        $states = State::all();
        return view('states', compact('states'));
    }

    public function showLGAs($stateId)
    {
        $lgas = LGA::where('state_id', $stateId)->get();
        return view('lga-list', compact('lgas', 'stateId'));
    }

    public function showWards($stateId, $lgaId)
    {
       
        $wards = Ward::where('lga_id', $lgaId)->get();
    
        return view('ward-details', compact('wards', 'stateId', 'lgaId'));
    }

    public function showPollingUnits($stateId, $lgaId, $wardId)
    {
        // Fetch polling units in the specified ward with related announced results
        $pollingUnits = PollingUnit::where('ward_id', $wardId)
            ->with(['announcedPuResults'])
            ->paginate(50);
    
        // Calculate total votes for each party within these polling units
        $partyTotals = $pollingUnits->flatMap(function ($unit) {
            return $unit->announcedPuResults;
        })
        ->groupBy('party_abbreviation')
        ->map(function ($results) {
            return $results->sum('party_score');
        });
    
        // Pass totals to the view
        return view('polling-unit-details', compact('pollingUnits', 'partyTotals', 'stateId', 'lgaId', 'wardId'));
    }
    
      
}
