<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SunDock extends Model
{
    public static $rules=array(
        "content"=>"required|min:0|max:300"
        );
    public static $rules_reaction=array(
        "reaction_count_heart"=>"integer",
        "reaction_count_cheer"=>"integer",
        "reaction_count_tear"=>"integer",
        );
    protected $fillable = [
        'content',"reaction_count_heart","reaction_count_cheer" ,"reaction_count_tear","identifier_id","uuid"
    ];
}