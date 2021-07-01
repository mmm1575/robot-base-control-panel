<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\base;

class baseController extends Controller
{
    public function start(){
        return view('index');
    }
    public function forward(Request $request){
        DB::table('base')->update(array('directions' => 'f'));
        return redirect()->route('/');
    }
    public function left(Request $request){
        DB::table('base')->update(array('directions' => 'l'));
        return redirect()->route('/');
    }
    public function stop(Request $request){
        DB::table('base')->update(array('directions' => 's'));
        return redirect()->route('/');
    }
    public function right(Request $request){
        DB::table('base')->update(array('directions' => 'r'));
        return redirect()->route('/');
    }
    public function backward(Request $request){
        DB::table('base')->update(array('directions' => 'b'));
        return redirect()->route('/');
    }

    public function retrieve(){
        $base= DB::table('base')->first();
        return view('retrieve', compact('base'));
    }
    
    
    
}