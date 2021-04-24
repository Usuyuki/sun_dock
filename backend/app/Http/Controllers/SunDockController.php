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

        return view('sunDock/sunDock',$data);
    }
    public function makeToPost(Request $request){
        return view('sunDock/makeToPost');
    }
    public function post(Request $request){
        $this->validate($request,SunDock::$rules);
        $sunDock=new SunDock;
        $content=$request->content;
        $identifier_id=;
        $form={
            "content"=>$content,
            "identifier_id"=>$identifier_id,
        };
        unset($form["_token"]);//CSRF用の非表示フィールドなので予め削除
        return redirect("/sunDock");
        
    }
}