<?php

namespace App\Http\Controllers;

use App\Models\Identifier;
use Illuminate\Http\Request;

class SunDockController extends Controller
{
    public function show(Request $request){

        // //識別子持っているか？
        // if(){
        //     Identifier::
        // }
        // //URLパラーメタからuuid拾ってデーターベースと照らし合わせる
        // $uuid =$request->id;
        // $user = Mail::where('uuid', '=', $uuid)->first();
        // $fold = Fold::where('id','=',$user->fold_id)->first();
        // $scent =Scent::where('id','=',$user->scent_id)->first();
        // $flower =Flower::where('id','=',$user->flower_id)->first();
        // $sheet =Sheet::where('id','=',$user->sheet_id)->first();


        // $data=[
        //     'for'=>$user->for,
        //     'from'=>$user->from,
        //     'text'=>$user->text,
        //     'fold'=>$fold,
        //     'scent'=>$scent,
        //     'flower'=>$flower,
        //     'sheet'=>$sheet
        // ];

        return view('index');
    }
}