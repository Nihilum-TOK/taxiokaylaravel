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

<label>
	Nombre Conductor <br>
	<input type="text" name="name" value="{{ old('name',$verification->name) }}"><br>
	{!! $errors->first('name', '<small>:message</small><br>') !!}
</label>

<label>
	Estatus <br>
	<input type="text" name="status" value="{{ old('status',$verification->status) }}"><br>
	{!! $errors->first('status', '<small>:message</small><br>') !!}
</label>


<button>{{$btnText}}</button>