<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public static $rules=array(
        "content"=>"required|min:0|max:300"
        );
    protected $fillable = [
        'content', 'sunDock_id','identifier_id'
    ];
}