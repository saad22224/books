<?php

namespace App\Http\Controllers\admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(){
        $logo = Setting::where('logo' ,  '!=' ,  null)->first();
        $retinalogo = Setting::where('retinalogo' ,  '!=' ,  null)->first();
        return view('dashboard.sitesetting' , [
            'logo' => $logo,
            'retinalogo' => $retinalogo,
        ]);
    }
    public function viewfont(){
        $settings = Setting::first();
        return view('dashboard.fontsitesetting' , [
            'seettings' => $settings,
        ]);
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


    public function updatefont(Request $request){
   
        $settings = Setting::first();
        Setting::updateOrCreate(
            [], // إذا كنت لا تحتاج إلى شروط معينة للبحث
            [
                'fontfamily' => $request->input('fontfamily'),
                'font_h1' => $request->input('h1'),
                'font_h2' => $request->input('h2'),
                'font_h3' => $request->input('h3'),
                'font_h4' => $request->input('h4'),
                'font_h5' => $request->input('h5'),
                'font_paragraph' => $request->input('para'),
                'body' => $request->input('body'),
                'heading' => $request->input('heading'),
                'para' => $request->input('paracolor'),
                'button' => $request->input('button'),
            ]
        );
    
        return redirect()->back()->with('success', 'Font updated successfully.');

        // dd($request->all());
    }
}
