<div class="form-row">
	<div class="form-group col-md-12">
		{{ Form::label('nombre', 'Nombre de Reunión') }}
		{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		{{ Form::label('fecha', 'Fecha de Reunión') }}
		{{ Form::date('fecha', null , ['class' => 'form-control', 'id' => 'fecha']) }}
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		{{ Form::label('hora', 'Hora de Reunión') }}
		{{ Form::time('hora', null, ['class' => 'form-control', 'id' => 'hora']) }}
	</div>	
</div>
<div class="pull-right form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-lg btn-success']) }}
</div>