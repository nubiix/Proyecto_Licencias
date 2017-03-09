<?php

/* login.twig.php */
class __TwigTemplate_7d17ec0d11340c9f4b11fddf54a74b32d4c5fae4c562d36b712a8e28d58eb616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php ", "login.twig.php", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "plantillabase.twig.php ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"col-xs-3\"></div>
<div class=\"col-xs-6\">
\t<div class=\"row\">
\t\t<h1>Login</h1>
\t</div>
\t<div class=\"row\">
\t\t<form class=\"form-horizontal\">
\t\t\t<div class=\"form-group\">
\t\t\t<label for=\"usuario\" class=\"col-xs-2 control-label\">Usuario</label>
\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"usuario\" placeholder=\"introduce tu usuario\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"password\" class=\"col-xs-2 control-label\">Contraseña</label>
\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"introduce tu contraseña\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-xs-offset-2 col-xs-10\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Entrar!</button>
\t\t\t\t\t<button type=\"reset\" class=\"btn btn-default\">Cancelar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>

\t</div>
\t<div class=\"row\">
\t\t<p>Si ha olvidado su contraseña, pulse <a href=\"#\">aqui</a></p>
\t</div>
</div>
<div class=\"col-xs-3\"></div>
";
    }

    public function getTemplateName()
    {
        return "login.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php '%}



{% block body %}
<div class=\"col-xs-3\"></div>
<div class=\"col-xs-6\">
\t<div class=\"row\">
\t\t<h1>Login</h1>
\t</div>
\t<div class=\"row\">
\t\t<form class=\"form-horizontal\">
\t\t\t<div class=\"form-group\">
\t\t\t<label for=\"usuario\" class=\"col-xs-2 control-label\">Usuario</label>
\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"usuario\" placeholder=\"introduce tu usuario\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"password\" class=\"col-xs-2 control-label\">Contraseña</label>
\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"introduce tu contraseña\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-xs-offset-2 col-xs-10\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Entrar!</button>
\t\t\t\t\t<button type=\"reset\" class=\"btn btn-default\">Cancelar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>

\t</div>
\t<div class=\"row\">
\t\t<p>Si ha olvidado su contraseña, pulse <a href=\"#\">aqui</a></p>
\t</div>
</div>
<div class=\"col-xs-3\"></div>
{% endblock %}", "login.twig.php", "C:\\wamp64\\www\\proyecto_final\\templates\\login.twig.php");
    }
}
