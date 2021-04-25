<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Identifier;
use App\Models\SunDock;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function post(Request $request,$uuid){
        $this->validate($request,Comment::$rules);
        $identifier=Identifier::where("identifier",$request->cookie("sun_dock_identifier"))->first();
        $sunDock=SunDock::where("uuid",$uuid)->first();
        $identifier_id=$identifier->id;
        $sunDock_id=$sunDock->id;
        $form=[
            "content"=>$request->content,
            "identifier_id"=>$identifier_id,
            "sunDock_id"=>$sunDock_id,

            'uuid'=>$uuid,
        ];
        Comment::create($form);
        return redirect("/SunDock/".$uuid); 
    }
}
