<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use \App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $newusers = User::where('created_at', '>=', now()->subDays(7))->get();
        $totalsubscribers = User::whereHas('subscriptions', function($query) {
            $query->whereDoesntHave('plan', function($query) {
                $query->where('name', 'Free Plan');
            });
        })->count();
        
        $unsupscribers  = User::whereHas('subscriptions', function($query) {
            $query->whereHas('plan', function($query) {
                $query->where('name', 'Free Plan');
            });
        })->count();
        
        $free = Subscription::whereHas('plan', function($query) {
            $query->where('name', 'Free Plan');
        })->count();
    
        $basic = Subscription::whereHas('plan', function($query) {
            $query->where('name', 'Basic Plan');
        })->count();
    
        $pro = Subscription::whereHas('plan', function($query) {
            $query->where('name', 'Pro Plan');
        })->count();
    
        $lifetime = Subscription::whereHas('plan', function($query) {
            $query->where('name', 'Lifetime Plan');
        })->count();
    
        // Check if $totalsubscribers is zero before performing division
        $totalsubscribers2 = $totalsubscribers == 0 ? 1 : $totalsubscribers;
    
        // Calculate the percentages
        $freepercent = ($free / $totalsubscribers2) * 100;
        $basicpercent = ($basic / $totalsubscribers2) * 100;
        $propercent = ($pro / $totalsubscribers2) * 100;
        $lifetimepercent = ($lifetime / $totalsubscribers2) * 100;
        return view('dashboard.index', [
            'users' => $users,
            'newusers' => $newusers,
            'totalsubscribers' => $totalsubscribers,
            'unsupscribers' => $unsupscribers,
            'free' => $freepercent,
            'basic' => $basicpercent,
            'Pro' => $propercent,
            'Lifetime' => $lifetimepercent,
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
