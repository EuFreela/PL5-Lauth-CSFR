@extends('Lameck\Lauth::layout.app')
@section('title','Lauth-Dashboard')
@section('content')

este é o dashboard
<br/>

<a href="{{URL::to(config('lauth.CALLBACK_LOGOUT'))}}">logout</a>
{{Auth::user()->name}}

@endsection