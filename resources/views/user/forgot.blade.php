@extends('Lameck\Lauth::layout.app')
@section('title','Lauth')
@section('content')
    
    @section('forgot-wraper-title','Relembre-me')
    @section('forgot-wraper-input-email','E-mail')
    @section('forgot-wraper-input-email-placeholder','Informe o e-mail')
    @section('forgot-wraper-namebtn','Enviar')
    @section('forgot-wraper-cancel-namebtn','Cancelar')
    @include('Lameck\Lauth::layout.partials.account.forgot')

@endsection

