{% extends 'plantillabase.twig.php '%}



{% block body %}
<div class="col-xs-3"></div>
<div class="col-xs-6">
	<div class="row">
		<h1>El XML se ha subido correctamente</h1>
	</div>
	<div class="row">
		<h2>Para el sistema: {{ nombre }}</h2>
	</div>
	<div class="row">
		 {% for k in keys %}
			<h3>Clave: {{ k }}</h3>
		{% endfor %} 
	</div>
</div>
<div class="col-xs-3"></div>
{% endblock %}