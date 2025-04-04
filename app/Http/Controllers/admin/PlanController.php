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
        return view('dashboard.createplan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric',
            'status' => 'required|in:active,disactive',
        ]);
        Plan::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);
        return redirect()->route('plans.index')->with('success', 'Plan created successfully');
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
    public function edit(Plan $plan)
    {
        $plan = Plan::find($plan->id);
        return view('dashboard.editplan', compact('plan'));
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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric',
            'status' => 'required|in:active,disactive',
        ]);
        $plan->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);
        return redirect()->route('plans.index')->with('success', 'Plan updated successfully');
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
