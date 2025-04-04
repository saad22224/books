<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
  
        $newusers = User::where('created_at', '>=', now()->subDays(30))->count();
        return view('dashboard.index' , [
            'users' => $users,
            'newusers' => $newusers,
        ]);
    }

    // public function login()
    // {
    //     return view('dashboard.login');
    // }

    // public function logout()
    // {
    //     // Logic for logging out the admin
    //     return redirect()->route('admin');
    // }
}
