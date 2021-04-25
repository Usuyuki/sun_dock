<?php

namespace App\Http\Controllers;

use App\Models\Identifier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
class IdentifierController extends Controller
{


    public function makeIdentifier(Request $request){
        // $response->cookie(キー,値,分数);
        $identifier=Str::uuid();
        Cookie::queue('sun_dock_identifier', $identifier);
        Identifier::create([
            'identifier'=>$identifier,
        ]);
       return redirect("/SunDock");
    }
}
