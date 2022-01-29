<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\App;

class HomeController extends Controller
{

    public function index(){
        return view('AhmedPanel.home');
    }
    public function lang(){
        if(session('my_locale','en') =='en'){
            session(['my_locale' => 'ar']);
        }else{
            session(['my_locale' => 'en']);
        }
        App::setLocale(session('my_locale'));
        return redirect()->back();
    }
}
