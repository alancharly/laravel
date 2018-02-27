@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="h3">Mensaje ID: {{ $message->id }}</h1>
	@include('messages.message')
</div>
@endsection