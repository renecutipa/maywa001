@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h5 class="m-0 font-weight-bold">
                    <span>Registrar Socio</span>
                    <a href="{{ route('reunion.index') }}" class="btn btn-sm btn-success pull-right">
                        <span class="icon text-white-50">
                            <i class="fa fa-list"></i>
                        </span>
                        <span class="text">Nuevo Socio</span>
                    </a> 
                </h5>
            </div>

            <div class="panel-body">
            <h3 style="font-weight:bold; text-decoration:underline;">DATOS PERSONALES</h3>
                <form method="POST" action="{{ route('socio.store') }}">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="nombres" class="required">Nombres</label> 
                                <input id="nombres" name="nombres" type="text" required="required" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellidop" class="required">Apellido Paterno</label> 
                                <input id="apellidop" name="apellidop" type="text" required="required" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellidom" class="required">Apellido Materno</label> 
                                <input id="apellidom" name="apellidom" type="text" required="required" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="fecha_nacimiento" class="required">Fecha de nacimiento</label> 
                                <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" required="required" class="form-control"> 
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="departamento" class="required">Departamento</label> 
                                <div>
                                <select id="departamento" name="departamento" required="required" class="custom-select form-control">
                                    <option value="">- Seleccione -</option>
                                                                
                                </select>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="provincia" class="required">Provincia</label> 
                                <div>
                                <select id="provincia" name="provincia" required="required" class="custom-select form-control">
                                    <option>- Seleccione -</option>
                                    
                                </select>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="distrito" class="required">Distrito</label> 
                                <div>
                                <select id="distrito" name="distrito" required="required" class="custom-select form-control">
                                    <option>- Seleccione -</option>							        
                                </select>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="comunidad" class="required">Comunidad o CP</label> 
                                <input id="comunidad" name="comunidad" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="dni" class="required">DNI</label> 
                                <input id="dni" name="dni" type="text" class="form-control" maxlength="8" required="required">                                
                            </div>
                            <div class="form-group col-md-2">
                                <label for="ocupacion" class="required">Ocupacion</label> 
                                <input id="ocupacion" name="ocupacion" type="text" class="form-control" maxlength="8" required="required">                                
                            </div>
                            <div class="form-group col-md-2">
                                <label for="instruccion" class="required">Grado de Instrucción</label> 
                                <div>
                                <select id="instruccion" name="instruccion" required="required" class="custom-select form-control">
                                    <option value="">- Seleccione -</option>
                                    <option value="1">INICIAL</option>
                                    <option value="2">PRIMARIA</option>
                                    <option value="3">SECUNDARIA</option>
                                    <option value="4">TECNICO</option>
                                    <option value="4">UNIVERSITARIA</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="civil" class="required">E. Civil</label> 
                                <div>
                                <select id="civil" name="civil" required="required" class="custom-select form-control">
                                    <option value="">- Seleccione -</option>
                                    <option value="1">SOLTERO</option>
                                    <option value="2">CASADO</option>
                                    <option value="3">VIUDO</option>
                                    <option value="4">DIVORCIADO</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="direccion">Direccion</label> 
                                <input id="direccion" name="direccion" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="esposa">Esposa(o) y/o conviviente</label> 
                                <input id="esposa" name="esposa" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dni_esposa" class="required">DNI</label> 
                                <input id="dni_esposa" name="dni_esposa" type="text" class="form-control" maxlength="8" required="required"> 
                                
                            </div>
                        </div> 

                        <hr/>
                        <h3 style="font-weight:bold; text-decoration:underline;">HIJOS QUE VIVEN EN EL HOGAR</h3>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="nom_ape_hijo">Nombres y Apellidos (Hijo(a))</label> 
                                <input id="nom_ape_hijo" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="edad">Edad</label> 							     
                                <input id="edad" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="estudio_realizado">Estudios realizados</label> 
                                <input id="estudio_realizado" type="text" class="form-control">
                            </div>
                            
                            <div class="form-group col-md-1">
                                <label class="invisible">Añadir</label>
                                <button class="btn btn-success" id="estudio_realizado_btn" type="button"> <i class="fa fa-plus fa-fw"></i> Añadir </button>
                            </div>
                            <div id="message_estudios">								
                            </div>							
                        </div>

                        <div class="row px-5">
                            <table class="table table-stripped" id="estudio_realizado_tbl">
                                <thead>
                                    <tr>
                                        <th width="40%">Nombres y Apellidos</th>
                                        <th width="15%">Edad</th>
                                        <th>Estudios</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="empty_estudios_row">
                                        <td colspan="3" class="text-center"><i> No se han registrado Hijos(as) </i></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>                        
                        
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')

	<script>
		$(document).ready(function (){
			$('#departamento').on('change', function(){
				var departamento_id = $(this).val();
				
				if($.trim(departamento_id) != ''){
					$.get('provincias', {departamento_id: departamento_id}, function(provincias){
						$('#provincia').empty();
						$('#provincia').append("<option value=''>- Seleccione -</option>");
						$.each(provincias, function(i, item){
							$('#provincia').append("<option value='"+provincias[i].clave+"'>"+provincias[i].valor+"</option>");
						});
					});
				}	
				
			});
			$('#provincia').on('change', function(){
				var provincia_id = $(this).val();
				
				if($.trim(provincia_id) != ''){
					$.get('distritos', {provincia_id: provincia_id}, function(distritos){
						$('#distrito').empty();
						$('#distrito').append("<option value=''>- Seleccione -</option>");
						$.each(distritos, function(i, item){
							$('#distrito').append("<option value='"+distritos[i].clave+"'>"+distritos[i].valor+"</option>");
						});
					});
				}
				
				
			});

			$('#estudio_realizado_btn').on('click', function(){
				var estudio_realizado = $("#estudio_realizado").val();
				var institucion_estudios = $("#institucion_estudios").val();
				
				if($.trim(estudio_realizado) != '' && $.trim(institucion_estudios) != ''){
					$('#message_estudios').empty();
					$('#empty_estudios_row').remove();
					$("#estudio_realizado").val("");
					$("#institucion_estudios").val("");

					var row = "<tr><td>"+estudio_realizado+"<input type='hidden' name='erEgresado[]' value="+estudio_realizado+"></td><td>"+institucion_estudios+"<input type='hidden' name='ierEgresado[]' value="+institucion_estudios+"></td></tr>";
					$('#estudio_realizado_tbl tbody').append(row);

				}else{
					$('#message_estudios').html("<div class='form-group text-red px-5'><small>* Debe rellenar los campos para añadir</small></div>");
				}
			});

			$('#grado_obtenido_btn').on('click', function(){
				var grado_obtenido = $("#grado_obtenido").val();
				var institucion_grado = $("#institucion_grado").val();
				
				if($.trim(grado_obtenido) != '' && $.trim(institucion_grado) != ''){
					$('#message_grado').empty();
					$('#empty_grados_row').remove();
					$("#grado_obtenido").val("");
					$("#institucion_grado").val("");

					var row = "<tr><td>"+grado_obtenido+"<input type='hidden' name='grEgresado[]' value="+grado_obtenido+"></td><td>"+institucion_grado+"<input type='hidden' name='igrEgresado[]' value="+institucion_grado+"></td></tr>";
					$('#grado_obtenido_tbl tbody').append(row);

				}else{
					$('#message_grado').html("<div class='form-group text-red px-5'><small>* Debe rellenar los campos para añadir</small></div>");
				}
			});

			$('#cargo_ocupado_btn').on('click', function(){
				var cargo_ocupado = $("#cargo_ocupado").val();
				var institucion_cargo = $("#institucion_cargo").val();
				
				if($.trim(cargo_ocupado) != '' && $.trim(institucion_cargo) != ''){
					$('#message_cargo').empty();
					$('#empty_cargos_row').remove();
					$("#cargo_ocupado").val("");
					$("#institucion_cargo").val("");

					var row = "<tr><td>"+cargo_ocupado+"<input type='hidden' name='crEgresado[]' value="+cargo_ocupado+"></td><td>"+institucion_cargo+"<input type='hidden' name='icrEgresado[]' value="+institucion_cargo+"></td></tr>";
					$('#cargo_ocupado_tbl tbody').append(row);

				}else{
					$('#message_cargo').html("<div class='form-group text-red px-5'><small>* Debe rellenar los campos para añadir</small></div>");
				}
			});

			$('#labora').on('change', function(){
				var labora = $("#labora").val();
				if($.trim(labora)=='NO'){
					$("#cargo_actual").val("");
					$("#cargo_actual").prop("disabled", true);

					$("#institucion_actual").val("");
					$("#institucion_actual").prop("disabled", true);

					$("#condicion_laboral").val("");
					$("#condicion_laboral").prop("disabled", true);

					$("#sector_laboral").val("");
					$("#sector_laboral").prop("disabled", true);
				}else{					
					$("#cargo_actual").prop("disabled", false);
					$("#institucion_actual").prop("disabled", false);
					$("#condicion_laboral").prop("disabled", false);
					$("#sector_laboral").prop("disabled", false);
				}		
			});
		});
	</script>

@endsection

