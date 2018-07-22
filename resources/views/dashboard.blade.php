@extends('Lameck\Lauth::layout.app')
@section('title','Lauth-Dashboard')
@section('content')

este é o dashboard
<br/>

<a href="{{route('user.getlogout')}}">logout</a>
{{Auth::user()->name}}

@endsection