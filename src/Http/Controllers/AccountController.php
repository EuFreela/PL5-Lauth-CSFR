<?php

namespace Lameck\Lauth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use Illuminate\Mail\Mailer;
use Lameck\Lauth\Mail\ConfirmRegister;
use Lameck\Lauth\Mail\Forgot;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Config\Repository;

class AccountController extends Controller
{
    /**
    * GETTERS
    *
    */
    public function getSignin()
    {        
        return view('Lameck\Lauth::user.login');
    }
    public function getSignup()
    {
        return view('Lameck\Lauth::user.signup');
    }
    public function getForgot()
    {
        return view('Lameck\Lauth::user.forgot');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('user.getsignin');
    }
    /**
    * POSTTERS
    *   
    */
    public function postSignin(Request $request)
    {        
        $request->validate([
            'email' => 'email|required',
            'pwd' => 'required'
        ]);
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('pwd'),'confirm'=>1]))
        {    
            return redirect()->route('dashboard');
        }        
        return Redirect::
        to(config('lauth.CALLBACK_SIGNIN_SIGNUP_ERROR'))
        ->with('error', 'Creenciais inválidas ou E-mail não confirmado!');
    }
    public function postSignup(Request $request,Mailer $mailer)
    {
        $request->validate([
            'nome' => 'required|alpha',
            'email' => 'email|required|unique:users',
            'senha' => 'same:repita_senha',
            'repita_senha' => 'required'
        ]);        
        $token = str_random(60);
        $user = User::create([
            'confirm' => 0,
            'name' => $request->input('nome'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('senha')),
            'remember_token' => $token
        ]);        
        $mailer
        ->to($request->input('email'))
        ->send(new ConfirmRegister($request->input('nome'),config('lauth.CALLBACK_MAIL_URL_CONFIRM').$token));
        if($user)            
            return Redirect::
                to(config('lauth.CALLBACK_SIGNIN_SIGNUP_SUCCESS'))
                ->with('success', 'Sucesso! Verifique sua caixa de email para validação.');
        
        return Redirect::
            to(config('lauth.CALLBACK_SIGNIN_SIGNUP_ERROR'))
            ->with('error', 'Ocorreu algum erro no registro.');
    }
    public function postForgot(Request $request,Mailer $mailer)
    {
        $request->validate([            
            'email' => 'email|required',
        ]);
        $token = str_random(60);
        $user = User::where('email','=',$request->input('email'))->update(['remember_token'=>$token]);
        $mailer
        ->to($request->input('email'))
        ->send(new Forgot(User::where('email','=',$request->input('email'))->select('name')->first()->name,config('lauth.CALLBACK_MAIL_URL_FORGOT').$token));
        if($user)            
        return Redirect::
            to(config('lauth.CALLBACK_SIGNIN_SIGNUP_SUCCESS'))
            ->with('success', 'Verifique sua caixa de email para procedimentos.');
    
        return Redirect::
        to(config('lauth.CALLBACK_SIGNIN_SIGNUP_ERROR'))
        ->with('error', 'E-mail não existe');

    }
    public function postNewKey(Request $request)
    {
        $request->validate([            
            'senha' => 'same:repita_senha',
            'repita_senha' => 'required'
        ]);          
        $user = User::where('remember_token','=',$request->input('token'))
        ->update([
            'confirm' => 1,
            'password'=>Hash::make($request->input('senha')),
            'remember_token' => ''
        ]);
        if($user)            
        return Redirect::
        to(config('lauth.CALLBACK_SIGNIN_SIGNUP_SUCCESS'))
            ->with('success', 'Sua senha foi modificada com sucesso.');
    
        return Redirect::
        to(config('lauth.CALLBACK_SIGNIN_SIGNUP_ERROR'))
        ->with('error', 'Ocorreu algum erro.');
    }
}
