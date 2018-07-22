@extends('Lameck\Lauth::layout.app')
@section('title','Lauth')
@section('content')
    
    @section('signin-wraper-title','Login')
    @section('signin-wraper-input-email','E-mail')
    @section('signin-wraper-input-email-placeholder','Entre com o e-mail')
    @section('signin-wraper-input-password','Senha')
    @section('signin-wraper-input-password-placeholder','Entre com sua senha')
    @section('signin-wraper-rememberme','Lembre-me')
    @section('signin-wraper-forgot','Esqueceu sua senha?')
    @section('signin-wraper-login-namebtn','Login')
    @section('signin-wraper-link-signup','Registrar-me')
    @include('Lameck\Lauth::layout.partials.account.signin')

@endsection

