@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<a href="create"><button class="btn btn-info">Registrar</button></a>
		<a href="edit"><button class="btn btn-success" >Modificar</button></a>
		<button class="btn btn-success"style="background-color: #9f191f" >Eliminar</button>



	</div>

</div>

<div class="row">
	<h2>Lista de Pacientes</h2>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Carnet de Identidad</th>
					<th>Edad</th>
					<th>Celular</th>
				</thead>
				<thead>
				<th>1</th>
				<th>Juan perez</th>
				<th>123456</th>
				<th>25</th>
				<th>123456</th>
				</thead>
				<thead>
				<th>2</th>
				<th>Daniel Rojas</th>
				<th>123456</th>
				<th>35</th>
				<th>123456</th>
				</thead>
				<thead>
				<th>3</th>
				<th>Carlos Rodriguez</th>
				<th>123456</th>
				<th>25</th>
				<th>123456</th>
				</thead>


    		</table>
		</div>
	</div>
</div>

@endsection