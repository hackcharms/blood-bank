<?php

namespace App\Http\Controllers;

use App\Models\BloodRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsumerController extends Controller
{
    public function bankIndex()
    {
        $hospitals = User::hospital()->get();
        $hospital = $hospitals->first();
        $available_blood_groups = $hospital->blood_store->where('unit', '>', 0);
        return view('consumer', compact('hospitals', 'available_blood_groups'));
    }
    public function showBank(Request $request, User $hospital)
    {
        // dd($hospital->blood_store);  
        $availableBlood = $hospital->blood_store()->available()->get();
        return view('show-bank', compact(['hospital', 'availableBlood']));
    }
    public function sendRequest(Request $request, User $hospital)
    {
        $request->validate([
            'blood_group' => 'required|string|max:3|min:2',
            'unit' => 'required|numeric'
        ]);
        $user = Auth::user();
        if ($hospital->blood_store()->whereBloodGroup($request->blood_group)->first()->unit > $request->unit) {
            BloodRequest::create([
                'consumer_id' => $user->id,
                'hospital_id' => $hospital->id,
                'blood_group' => $request->blood_group,
                'unit' => $request->unit
            ]);
            return back()->with('success', 'Request Generated');
        }
        return back()->with('error', 'Insufficient Blood');
    }
}
