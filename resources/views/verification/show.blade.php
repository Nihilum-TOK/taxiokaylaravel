@extends('layouts.app')

@section('content')

	<h1>Información del taxi</h1>
	<p>
		{{$verification->taxinumber}}
	</p>
	<p>
		{{$verification->plate}}
	</p>
	<p>
		{{$verification->name}}
	</p>
	<p>
		{{$verification->status}}
	</p>



@endsection