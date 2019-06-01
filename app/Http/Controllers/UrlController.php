<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    //
    public function url()
    {
        //    return view('viewComposer');
//    return url("/posts/post/1");
//    return url()->previous();
//    return url()->signedRoute('signed', ['user' => 1]);
        return url()->temporarySignedRoute(
            'signed', now()->addSecond(20), ['user' => 1]
        );
    }

    public function urlSigned(User $user)
    {
//        if(! request()->hasValidSignature()){
//            abort(401);
//        }
        return $user->name;
    }
}
