<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Priznak;

class MarketingController extends Controller
{
    public function getMarketingListPage(){
        return view('admin.home');
    }

    public function getPriznaksListPage(){
        $priznaks = Priznak::with('getOption')->get();

        return view('admin.priznaks',compact('priznaks'));
    }
}
