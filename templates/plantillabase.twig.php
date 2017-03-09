<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Licencias Ultimate Edition</title>
	<link rel="stylesheet" type="text/css" href="{{base_url()}}/../assert/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="{{base_url()}}/assert/bootstrap-languages-master/languages.min.css"> -->
</head>
<body><!-- {{ base_url() }} -->
<div class="container">
	<div class="row">
		<div class="col-xs-3">
			<img src="{{base_url()}}/../img/logoies.jpg" class="img-responsive" alt="logo">
		</div>
		<div class="col-xs-9">
			<h1>Licencias Ultimate Edition</h1>
		</div>
	</div>

	<div class="row">
	<div class="col-xs-4"></div>
	<div class="col-xs-3">
		<ul class="nav nav-pills">
  			<li role="presentation"><a href="{{path_for('login')}}">Login</a></li>
  			<li role="presentation"><a href="{{path_for('acercade')}}">Acerca de</a></li>
  			
		</ul>
	</div>
	<div class="col-xs-5"></div>
	</div>
	<div class="row">
		{% block body %}{% endblock %}
	</div>
</div>
	<script type="text/javascript" src="{{base_url()}}/../assert/bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}/../assert/
	bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	
</body>
</html>