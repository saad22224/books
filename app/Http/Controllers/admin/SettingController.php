<?php

namespace App\Http\Controllers\admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(){
        return view('dashboard.sitesetting');
    }
    public function viewfont(){
        return view('dashboard.fontsitesetting');
    }
    public function viewfeatures(){
        return view('dashboard.feauters');
    }

    public function store(Request $request){
        $request->validate([  
            'site_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'site_retinalogo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $site_logo = $request->file('site_logo');
        $site_retinalogo = $request->file('site_retinalogo');
        $site_logo_name = time() . '.' . $site_logo->getClientOriginalExtension();
        $site_retinalogo_name = time() . '.' . $site_retinalogo->getClientOriginalExtension();
        $site_logo->storeAs('logos', $site_logo_name);
        $site_retinalogo->storeAs('retinalogos', $site_retinalogo_name);
       $logopath = 'logos/' . $site_logo_name;
       $retinalogopath = 'retinalogos/' . $site_logo_name;

       Setting::updateOrCreate(
        [],  // If no conditions are set, it'll update the first record it finds or create one
        [
            'logo' => $logopath,
            'retinalogo' => $retinalogopath,
        ]
    );
        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
