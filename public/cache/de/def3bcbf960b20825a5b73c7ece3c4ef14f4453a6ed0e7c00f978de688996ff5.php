<?php

/* plantillabase.twig.php  */
class __TwigTemplate_09353bfbdd5c4c5db131bb1d4ac635bb84f97e6ba485caa971f2e257ca8167d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Licencias Ultimate Edition</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/bootstrap-3.3.7-dist/css/bootstrap.min.css\">
\t<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assert/bootstrap-languages-master/languages.min.css\"> -->
</head>
<body><!-- ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo " -->
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-3\">
\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../img/logoies.jpg\" class=\"img-responsive\" alt=\"logo\">
\t\t</div>
\t\t<div class=\"col-xs-9\">
\t\t\t<h1>Licencias Ultimate Edition</h1>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t<div class=\"col-xs-4\"></div>
\t<div class=\"col-xs-3\">
\t\t<ul class=\"nav nav-pills\">
  \t\t\t<li role=\"presentation\"><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
        echo "\">Login</a></li>
  \t\t\t<li role=\"presentation\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
        echo "\">Acerca de</a></li>
  \t\t\t
\t\t</ul>
\t</div>
\t<div class=\"col-xs-5\"></div>
\t</div>
\t<div class=\"row\">
\t\t";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "\t</div>
</div>
\t<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/bootstrap-3.3.7-dist/js/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/
\tbootstrap-3.3.7-dist/js/bootstrap.min.js\"></script>
\t
</body>
</html>";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "plantillabase.twig.php ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  81 => 36,  77 => 35,  73 => 33,  71 => 32,  61 => 25,  57 => 24,  43 => 13,  36 => 9,  31 => 7,  27 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Licencias Ultimate Edition</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{base_url()}}/../assert/bootstrap-3.3.7-dist/css/bootstrap.min.css\">
\t<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"{{base_url()}}/assert/bootstrap-languages-master/languages.min.css\"> -->
</head>
<body><!-- {{ base_url() }} -->
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-3\">
\t\t\t<img src=\"{{base_url()}}/../img/logoies.jpg\" class=\"img-responsive\" alt=\"logo\">
\t\t</div>
\t\t<div class=\"col-xs-9\">
\t\t\t<h1>Licencias Ultimate Edition</h1>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t<div class=\"col-xs-4\"></div>
\t<div class=\"col-xs-3\">
\t\t<ul class=\"nav nav-pills\">
  \t\t\t<li role=\"presentation\"><a href=\"{{path_for('login')}}\">Login</a></li>
  \t\t\t<li role=\"presentation\"><a href=\"{{path_for('acercade')}}\">Acerca de</a></li>
  \t\t\t
\t\t</ul>
\t</div>
\t<div class=\"col-xs-5\"></div>
\t</div>
\t<div class=\"row\">
\t\t{% block body %}{% endblock %}
\t</div>
</div>
\t<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/bootstrap-3.3.7-dist/js/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/
\tbootstrap-3.3.7-dist/js/bootstrap.min.js\"></script>
\t
</body>
</html>", "plantillabase.twig.php ", "C:\\wamp64\\www\\proyecto_final\\templates\\plantillabase.twig.php");
    }
}
