<?php

namespace App\Http\Controllers;

use App\Models\Identifier;
use App\Models\SunDock;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReactionController extends Controller
{
    public function update(Request $request){
             // バリデーション
             $this->validate($request,SunDock::$rules_reaction);

            //  Log::debug("uuid");
            //  Log::debug($request->uuid);
     
             // uuidから投稿の記事取得
             $sunDock=SunDock::where("uuid",$request->uuid)->first();
             
             //いいね数の追加
             if($request->is_reaction_count_heart){
                 $update_content=[
                     'reaction_count_heart'=>$sunDock->reaction_count_heart+1,
                 ];
             }elseif($request->is_reaction_count_cheer){
                $update_content=[
                    'reaction_count_cheer'=>$sunDock->reaction_count_cheer+1,
                ];
             }elseif($request->is_reaction_count_tear){
                $update_content=[
                    'reaction_count_tear'=>$sunDock->reaction_count_tear+1,
                ];
             }

             //DBへの挿入
             $sunDock=SunDock::where("uuid",$request->uuid)->update($update_content);

             return redirect("/SunDock"); 
    }
}