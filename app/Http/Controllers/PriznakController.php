<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Priznak;
use App\Models\Option;

class PriznakController extends Controller
{
    public function getCreatePriznakPage(){
        return view('admin.priznakForm');
    }

    public function addPriznakOption(Request $request){
        $result = Option::create(['priznak_id'=>$request->priznak_id,'text'=>$request->text]);

        if($result){
            return back();
        }
    }

    public function editPriznakByProduct(Request $request){
        $priznak_id = $request->priznak_id;
        //return $request->baza2023_0;

        $update_priznak = Priznak::where('priznak_id',$priznak_id)->first();
        $update_priznak->baza = $request->baza2023_0;
        $update_priznak->etiketka_1l = $request->etiketka1l_23g_0;
        $update_priznak->etiketka_5l = $request->etiketka5l_23g_0;
        $update_priznak->etiketka_10l = $request->etiketka10l_23g_0;

        $update_priznak->save();
        return back();
    }

    public function getPriznakSinglePage($priznak_id){
        $priznak = Priznak::where('priznak_id',$priznak_id)->first();
        return view('admin.priznak_single',compact('priznak'));
    }
}
