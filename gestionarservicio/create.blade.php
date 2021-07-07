@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Servicio</h3>

			<div class="form-group">
            	<label for="apellido">Nombre de servicio</label>
            	<input type="text" name="apellido" class="form-control" placeholder="registre el servicio...">
            </div>

			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type=text name="descripcion" class="form-control" placeholder="Descripcion del servicio....">
			</div>
			<div class="form-group">
				<label for="telefono">Precio</label>
				<input type="number" name="telefono" class="form-control" placeholder="Precio....">
			</div>
			<div class="form-group">
				<label for="direccion">Detalle</label>
				<input type="text" name="direccion" class="form-control" placeholder="Detalle de servicio....">
			</div>


			<div class="form-group">
            	<a href="gestionarservicio"><button class="btn btn-primary" type="submit">Guardar</button></a>
				<a href="gestionarservicio"><button class="btn btn-danger" type="reset">Cancelar</button></a>
			</div>

            
		</div>
	</div>
@endsection