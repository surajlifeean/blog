@extends('main')
@section('content')
@if(Session::has('success'))
<div class="alert-success"role="alert">
<strong>success:</strong>{{Session::get('success')}}
</div>
@endif
<h1>{{$post->title}}</h1>
<p class="lead">{{$post->body}}</p>
@endsection



