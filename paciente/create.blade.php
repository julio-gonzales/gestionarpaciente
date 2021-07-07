@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Paciente</h3>

			<div class="form-group">
            	<label for="apellido">Apellidos</label>
            	<input type="text" name="apellido" class="form-control" placeholder="Apellido...">
            </div>
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Nombre...">
            </div>
			<div class="form-group">
				<label for="Correo Electronico">Correo Electronico</label>
				<input type=email name="correoElectronico" class="form-control" placeholder="Correo Electronico...">
			</div>
			<div class="form-group">
				<label for="fecha nacimiendo">Fecha Nacimiento</label>
				<input type="date" name="fechaNacimiento" class="form-control" placeholder="Fecha de Nacimiento....">
			</div>
			<div class="form-group">
				<label for="sexo">Sexo</label>
				<br/>
				<input name="masculino" type="checkbox" />masculino
				<input name="femenino" type="checkbox" />femenino
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="number" name="telefono" class="form-control" placeholder="Nro de telefono....">
			</div>
			<div class="form-group">
				<label for="direccion">Direccion</label>
				<input type="text" name="direccion" class="form-control" placeholder="Direccion....">
			</div>
			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type=text name="descripcion" class="form-control" placeholder="Descripcion del paciente....">
			</div>



			<div class="form-group">
            	<a href="gestionarpaciente"><button class="btn btn-primary" type="submit">Guardar</button></a>
				<a href="gestionarpaciente"><button class="btn btn-danger" type="reset">Cancelar</button></a>
            </div>

            
		</div>
	</div>
@endsection