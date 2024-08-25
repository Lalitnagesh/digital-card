<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.index');
    }
    public function about(){
        return view('site.about');
    }
    public function service(){
        return view('site.service');
    }
    public function contactUs(){
        return view('site.contact');
    }

    public function leadStore(Request $request){
        $leads = new Lead();
        $leads->name = $request->name;
        $leads->email = $request->email;
        $leads->phone = $request->phone;
        $leads->address = $request->address;
        $leads->description = $request->description;
        $leads->save();
        return redirect()->route('thank-you');
    }

    public function thankYou(){
        return view('site.thank-you');
    }
}
