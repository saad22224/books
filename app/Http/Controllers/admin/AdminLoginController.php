<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        // الكود الخاص بتسجيل الدخول للمشرفين
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $admin = User::where('email', $request->email)->where('role' , 'admin')->first();
        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::guard()->login($admin);
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin');
    }
}
