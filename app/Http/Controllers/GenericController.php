<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\HelperTrait;

class GenericController extends Controller
{
    //

    
    public function lending(Request $r){
       return view ('lending');
    }



    public function generateToken(Request $request){
        //Todo: verificar se o user eh admin
        dd('generateToken', $request->all());
        $user = User::find(auth()->id());
        $token = $user->createToken($request ->name)->accessToken;
        dd($token);

        return redirect()->to('admin/oauth-access-tokens')->with(['token', $token]);
            //Todo:indique que so admin pode criar token


    }
}
