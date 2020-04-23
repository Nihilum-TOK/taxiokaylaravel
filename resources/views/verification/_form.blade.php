@csrf
<label>
	Matricula <br>
	<input type="text" name="plate" value="{{ old('plate',$verification->plate) }}"><br>
	{!! $errors->first('plate', '<small>:message</small><br>') !!}
</label>

<label>
	Numero de Taxi <br>
	<input type="text" name="taxinumber" value="{{ old('taxinumber',$verification->taxinumber) }}"><br>
	{!! $errors->first('taxinumber', '<small>:message</small><br>') !!}
</label>


<button>{{$btnText}}</button>