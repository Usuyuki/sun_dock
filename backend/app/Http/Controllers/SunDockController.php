<?php

namespace App\Http\Controllers;

use App\Models\SunDock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class SunDockController extends Controller
{
    public function show(Request $request){

        // //識別子持っているか？
        // if(){
        //     Identifier::
        // }
        //URLパラーメタからuuid拾ってデーターベースと照らし合わせる
        // $uuid =$request->id;
        $dt=new Carbon();
        $before_a_week=$dt->subWeek();
        Log::debug($before_a_week);
        // $sunDocks = SunDock::all();
        $sunDocks = SunDock::where('created_at', '>', $before_a_week)->get();
        Log::debug( $sunDocks );
  

        $data=[
            'sunDocks'=>$sunDocks,
        ];

        return view('sunDock',$data);
    }
}