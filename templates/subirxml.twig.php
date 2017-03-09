{% extends 'plantillabase.twig.php '%}



{% block body %}
<div class="col-xs-3"></div>
<div class="col-xs-6">
	<div class="row">
		<h1>Subir XML con licencias</h1>
	</div>
	<div class="row">
		<form method="POST" action="{{path_for('subirxmlpost')}}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="subirxml">Subir XML con licencias</label>
				<input type="file" id="subirxml" name="subirxml">	
			</div>
			<button type="submit" class="btn btn-default">Enviar</button>
		</form>
	</div>
	
</div>
<div class="col-xs-3"></div>
{% endblock %}