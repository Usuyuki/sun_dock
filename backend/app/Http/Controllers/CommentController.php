<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Identifier;
use App\Models\SunDock;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class CommentController extends Controller
{
    public function post(Request $request){
        // バリデーション
        $this->validate($request,Comment::$rules);
        // クッキーから識別子
        $identifier=Identifier::where("identifier",$request->cookie("sun_dock_identifier"))->first();
        
        Log::debug("uuid");
        Log::debug($request->uuid);

        // uuidから投稿の記事取得
        $sunDock=SunDock::where("uuid",$request->uuid)->first();

        $identifier_id=$identifier->id;
        $sunDock_id=$sunDock->id;
        $form=[
            "content"=>$request->content,
            "identifier_id"=>$identifier_id,
            "sunDock_id"=>$sunDock_id,
        ];
        Comment::create($form);
        return redirect("/SunDock/post/".$request->uuid); 
    }
}