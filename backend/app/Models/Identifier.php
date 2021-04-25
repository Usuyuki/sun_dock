<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identifier extends Model
{
    public static $rules=array(
        "content"=>"required|min:0|max:300"
        );
    protected $fillable = [
        'identifier', 
    ];
}
