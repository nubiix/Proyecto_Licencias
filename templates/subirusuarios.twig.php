{% extends 'plantillabase.twig.php '%}



{% block body %}









<div class="col-xs-6">
	<div class="row">
		<h1>Subir Usuarios desde archivo CSV</h1>
	</div>
	<div class="row">
		<form method="POST" action="{{path_for('subirusuariospost')}}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="subirxml">Subir Usuarios</label>
				<input type="file" id="subirusuarios" name="subirusuarios">	
			</div>
			<button type="submit" class="btn btn-default">Enviar</button>
		</form>
	</div>
</div>
<div class="col-xs-6">
	<form class="form-horizontal">
		<div class="form-group">
		<label for="nombre_curso" class="col-xs-3 control-label">nombre del curso</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nombre_curso" placeholder="nombre del curso">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox"> Remember me
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Sign in</button>
			</div>
		</div>
	</form>


</div>

{% endblock %}