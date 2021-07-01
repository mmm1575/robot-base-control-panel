<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\base;

class enginesController extends Controller
{
    public function save(Request $request){
        return view($request);
        DB::table('base')->update(array('directions' => 0));
        
        engine::where('engineNumber', 6)
            ->update(['value'=> $request->engine6
        ]);
        return redirect()->route('/');
    }
    public function turn_on(){
        $engine= engine::first();
        if($engine->on ==1){
            DB::table('engines')->update(array('on' => 0));
            return redirect()->route('/');
        }
        else{
            DB::table('engines')->update(array('on' => 1));
            return redirect()->route('/');
        }
    }
}