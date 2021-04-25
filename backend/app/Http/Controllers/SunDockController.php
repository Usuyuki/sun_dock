<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Identifier;
use App\Models\SunDock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
class SunDockController extends Controller
{
    /**
     * メイン画面表示
     *
     * @param Request $request
     * @return void
     */
  
    public function show(Request $request){
        //識別子持っているか？
        
        //URLパラーメタからuuid拾ってデーターベースと照らし合わせる
        // $uuid =$request->id;
        $dt=new Carbon();
        $before_a_week=$dt->subWeek();

        // $sunDocks = SunDock::all();
        $sunDocks = SunDock::where('created_at', '>', $before_a_week)->get();
        Log::debug( $sunDocks );
        $this->deleteAfterAWeek();//1週間より古いもの削除処理
        $data=[
            'sunDocks'=>$sunDocks,
            'is_identifier'=> $request->is_identifier,
        ];

        return view('sunDock/sunDock',$data);
    }


    


    /**
     * 投稿作成ページを表示
     *
     * @param Request $request
     * @return void
     */
    public function makeToPost(Request $request){
        return view('sunDock/makeToPost',[ 'is_identifier'=>$request->is_identifier,]);
    }



    /**
     * 
     * 投稿詳細ページの表示
     *
     * @param [type] $uuid
     * @return void
     */
    public function detail(Request $request,$uuid){
        $sunDock=SunDock::where("uuid",$uuid)->first();
        Log::debug($sunDock);
        $comments=Comment::where("sunDock_id", $sunDock->id)->get();
        $data=[
            'sunDock'=>$sunDock,
            'comments'=>$comments,
            'is_identifier'=>$request->is_identifier,
        ];
        Log::debug($data);
        return view('sunDock/detail',$data);
    }

    /**
     * 投稿されたpostメソッドからDBに挿入
     *
     * @param Request $request
     * @return void
     */
    public function post(Request $request){
        $this->validate($request,SunDock::$rules);
        $identifier=Identifier::where("identifier",$request->cookie("sun_dock_identifier"))->first();
        $identifier_id=$identifier->id;
        $uuid=Str::uuid();
        $form=[
            "content"=>$request->content,
            "identifier_id"=>$identifier_id,
            'reaction_count_heart'=>0,
            'reaction_count_cheer'=>0,
            'reaction_count_tear'=>0,
            'uuid'=>$uuid,
        ];
        SunDock::create($form);
        return redirect("/SunDock");
        
    }


    /**
     * いいねの数などを増やす関数
     * 
     *
     * @return void
     */
    public function update(){
        
    }



    
    /**
     * 一週間より前のデータを削除
     *
     * @return void
     */
    public function deleteAfterAWeek(){
        $dt=new Carbon();
        $before_a_week=$dt->subWeek();
        SunDock::where('created_at', '<', $before_a_week)->delete();
    }
}