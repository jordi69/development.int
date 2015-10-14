@extends('master')
@section('content')
<h1>Profile page</h1>

<div>
	Naam: {{ $user->name }} <br>
	Email: {{$user->email }} <br>
	Woonplaats: {{$user->woonplaats }} <br>
</div>
@endsection
