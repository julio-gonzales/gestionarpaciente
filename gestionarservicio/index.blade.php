@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<a href="create"><button class="btn btn-info">Registrar</button></a>
		<a href=""><button class="btn btn-success" style="position: center">Modificar</button></a>
		<button class="btn btn-success"style="background-color: #9f191f" >Eliminar</button>
	</div>

</div>

<div class="row">
	<h2>Lista de Servicios que ofrece el Consultorio Dental</h2>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Detalle</th>
				</thead>
				<thead>
				<th>1</th>
				<th>Blanqueamiento Dental</th>
				<th>Servicio de odontologia estetica que tiene por objetivo eliminar las manchas dentales</th>
				<th>180</th>
				<th>podria hacerse en una seccion</th>
				</thead>
				<thead>
				<th>2</th>
				<th>Calsaduras</th>
				<th>Restauracion dental para dientes o molares con caries</th>
				<th>150</th>
				<th>se realiza en una cita</th>
				</thead>
				<thead>
				<th>3</th>
				<th>consulta simple</th>
				<th>consulta simple y cotizacion de servicio</th>
				<th>20</th>
				<th></th>
				</thead>


    		</table>
		</div>
	</div>
</div>
@endsection