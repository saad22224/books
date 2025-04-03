<?php

namespace App\Http\Controllers\admin;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::all();
        return view('dashboard.subscriptionplan', compact('plans'));
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
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Plan $plan)
    {
        $plan = Plan::find($plan->id);
      
    }


    public function status($id, Request $request)
    {
        $plan = Plan::findOrFail($id);
    
        // تبديل الحالة
        $plan->status = ($plan->status === 'active') ? 'disactive' : 'active';
        $plan->save();
    
        return response()->json([
            'success' => true,
            'new_status' => $plan->status,
            'message' => 'Plan status updated successfully',
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        // return $plan;
        $plan->delete();
        return redirect()->back()->with('success', 'Plan deleted successfully');
    }
}
