@extends('layouts.app')

@section('content')

	<h1>Buscar Taxi con número</h1>

 	@if($errors->any())
 			<ul>
 				@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 				@endforeach
 			</ul>
 	@endif

 	<form method="POST" action="{{route('verification.showtaxinumber')}}">

 		@csrf
		<label>
			# Taxi <br>
			<input type="text" name="taxinumber" value="{{ old('taxinumber',$verification->taxinumber) }}"><br>
			{!! $errors->first('taxinumber', '<small>:message</small><br>') !!}
		</label>

		<button>Buscar</button>

 	</form>

@endsection