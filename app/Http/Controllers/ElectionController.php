<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\LGA;
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
        // Paginate the polling units by ward_id (10 units per page)
        $pollingUnits = PollingUnit::where('ward_id', $wardId)
            ->with(['announcedPuResults' => function ($query) {
                // Select all columns from the AnnouncedPuResult model
                $query->select('*');
            }]) // Eager load the related AnnouncedPuResult details
            ->paginate(10);
    
        // Return the view and pass the polling units data along with other parameters
        return view('polling-unit-details', compact('pollingUnits', 'stateId', 'lgaId', 'wardId'));
    }    
      
}
