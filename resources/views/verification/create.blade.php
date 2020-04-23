@extends('layouts.app')

@section('content')

	<h1>Agregar Taxi</h1>

 	@if($errors->any())
 			<ul>
 				@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 				@endforeach
 			</ul>
 	@endif

 	<form method="POST" action="{{route('verification.store')}}">

 		@include('verification._form' ,['btnText'=> 'Crear'])

 	</form>

@endsection