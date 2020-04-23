@extends('layouts.app')

@section('content')

	<h1>Buscar Taxi con matricula</h1>

 	@if($errors->any())
 			<ul>
 				@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 				@endforeach
 			</ul>
 	@endif

 	<form method="POST" action="{{route('verification.showplate')}}">

 		@csrf
		<label>
			Matricula <br>
			<input type="text" name="plate" value="{{ old('plate',$verification->plate) }}"><br>
			{!! $errors->first('plate', '<small>:message</small><br>') !!}
		</label>

		<button>Buscar</button>

 	</form>

@endsection