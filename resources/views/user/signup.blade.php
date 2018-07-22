@extends('Lameck\Lauth::layout.app')
@section('title','Lauth')
@section('content')
    
    @section('signup-wraper-title','Cadastro')
    @section('signup-wraper-input-name','Nome')
    @section('signup-wraper-input-name-placeholder','Insira seu nome')
    @section('signup-wraper-input-email','E-mail')
    @section('signup-wraper-input-email-placeholder','Entre com o e-mail')
    @section('signup-wraper-input-password','Senha')
    @section('signup-wraper-input-password-placeholder','Entre com sua senha') 
    @section('signup-wraper-input-repassword','Repita a Senha')
    @section('signup-wraper-input-repassword-placeholder','Repita a sua senha')    
    @section('signup-wraper-signup-namebtn','Cadastro')
    @section('signup-wraper-signup-cancel-namebtn','Cancelar')
    @include('Lameck\Lauth::layout.partials.account.signup')

@endsection