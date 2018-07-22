@extends('Lameck\Lauth::layout.app')
@section('title','Lauth')
@section('content')
    
    @section('newkey-wraper-title','Nova Senha')
    @section('newkey-wraper-input-password','Senha')
    @section('newkey-wraper-input-password-placeholder','Entre com sua senha') 
    @section('newkey-wraper-input-repassword','Repita a Senha')
    @section('newkey-wraper-input-repassword-placeholder','Repita a sua senha')    
    @section('newkey-wraper-newkey-namebtn','Redefinir senha')
    @include('Lameck\Lauth::layout.partials.account.newkey')

@endsection