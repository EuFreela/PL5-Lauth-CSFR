<?php

namespace Lameck\Lauth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Lameck\Lauth\Mail\ConfirmRegister;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\User;

class MailController extends Controller
{
    public function getTokenConfirm($token)
    {
        $user = User::where('remember_token','=',$token)
        ->update([
            'confirm' => 1,
            'remember_token' => '',
        ]);
        if($user)
            return Redirect::
                to(config('lauth.CALLBACK_SIGNIN_SIGNUP_SUCCESS'))
                ->with('success', 'E-mail confirmado. Seja bem vindo.');
        return Redirect::
            to(config('lauth.CALLBACK_SIGNIN_SIGNUP_ERROR'))
            ->with('error', 'Houve algum erro.');
    }
    public function getTokenForgot($token)
    {     
        if(User::where('remember_token','=',$token)->count()>0):
            return view(config('lauth.EMAIL_VIEW_NEWKEY'))->with(['token'=>$token]);
        else:
            return Redirect::
            to(config('lauth.CALLBACK_SIGNIN_SIGNUP_ERROR'))
            ->with('error', 'Token expirado!');
        endif;
    }
}
