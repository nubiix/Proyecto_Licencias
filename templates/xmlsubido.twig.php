{% extends 'plantillabase.twig.php '%}



{% block body %}
<div class="col-xs-3"></div>
<div class="col-xs-6">
	<div class="row">
		<h1>XML que acabas de subir</h1>
	</div>
	<div class="row">
		<h1>{{ nombre }}</h1>
	</div>
	<div class="row">
		 {% for j in k %}
			<p>{{ j }}</p>
		{% endfor %} 
	</div>
	
</div>
<div class="col-xs-3"></div>
{% endblock %}