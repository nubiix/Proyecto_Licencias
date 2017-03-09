{% extends 'plantillabase.twig.php '%}



{% block body %}
<div class="col-xs-3"></div>
<div class="col-xs-6">
	<div class="row">
		<h1>Login</h1>
	</div>
	<div class="row">
		<form class="form-horizontal">
			<div class="form-group">
			<label for="usuario" class="col-xs-2 control-label">Usuario</label>
				<div class="col-xs-10">
					<input type="text" class="form-control" id="usuario" placeholder="introduce tu usuario">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-xs-2 control-label">Contraseña</label>
				<div class="col-xs-10">
					<input type="password" class="form-control" id="password" placeholder="introduce tu contraseña">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-2 col-xs-10">
					<button type="submit" class="btn btn-default">Entrar!</button>
					<button type="reset" class="btn btn-default">Cancelar</button>
				</div>
			</div>
		</form>

	</div>
	<div class="row">
		<p>Si ha olvidado su contraseña, pulse <a href="#">aqui</a></p>
	</div>
</div>
<div class="col-xs-3"></div>
{% endblock %}