<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->paginate(20);
        return view('dashboard.user', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plans = Plan::all();
        return view('dashboard.createuser', compact('plans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'subscription' => 'required', 
        ]);

        // إنشاء المستخدم
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        // إضافة الاشتراك للمستخدم
        $user->subscriptions()->create([
            'user_id' => $user->id,
            'plan_id' => $request->subscription,  // هنا إزالتها ووضعت الـ plan_id فقط
            'start_date' => now(),
            'end_date' => now()->addMonth(),
            'status' => 'active',
        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully');
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
    public function edit(string $id)
    {
        $user = User::find($id);
        $plans = Plan::all();
        if ($user) {
            return view('dashboard.edituser', [
                'user' => $user,
                'plans' => $plans,
            ]);
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'role' => 'required',
            'subscription' => 'required',
        ]);
    
        $user = User::find($id);
    
        if ($user) {
            // تحديث بيانات المستخدم
            $user->update([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'role' => $request->role,
                'password' => $request->password ? bcrypt($request->password) : $user->password, // إذا لم يتم إدخال كلمة مرور جديدة، احتفظ بكلمة المرور القديمة
            ]);
    
            // التأكد إذا كان للمستخدم اشتراك بالفعل
            $subscription = $user->subscriptions()->first(); // الحصول على الاشتراك المرتبط بالمستخدم
    
            if ($subscription) {
                // إذا كان لديه اشتراك، قم بتحديثه
                $subscription->update([
                    'plan_id' => $request->subscription,
                    'start_date' => now(),
                    'end_date' => now()->addMonth(),
                    'status' => 'active',
                ]);
            } else {
                // إذا لم يكن لديه اشتراك، قم بإنشاء اشتراك جديد
                $user->subscriptions()->updateOrCreate(
                    [
                        'user_id' => $user->id,
                        'plan_id' => $request->subscription, // التأكد من أن الـ plan_id يتوافق مع الـ user_id
                    ],
                    [
                        'start_date' => now(),
                        'end_date' => now()->addMonth(),
                        'status' => 'active',
                    ]
                );
                
                
            }
    
            return redirect()->route('user.index')->with('success', 'User updated successfully');
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return $id;
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully');
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }
}
