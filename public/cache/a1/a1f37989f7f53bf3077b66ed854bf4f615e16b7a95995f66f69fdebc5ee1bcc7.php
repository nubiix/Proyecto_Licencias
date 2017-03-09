<?php

/* subirxml.twig.php */
class __TwigTemplate_59a6c719e5f05f2ee5eb2557ee9f564b1355268599ced5b3de4fb7fca2d8d4bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php ", "subirxml.twig.php", 1);
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
\t\t<h1>Subir XML con licencias</h1>
\t</div>
\t<div class=\"row\">
\t\t<form method=\"POST\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirxmlpost"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subirxml\">Subir XML con licencias</label>
\t\t\t\t<input type=\"file\" id=\"subirxml\" name=\"subirxml\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
\t
</div>
<div class=\"col-xs-3\"></div>
";
    }

    public function getTemplateName()
    {
        return "subirxml.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  31 => 6,  28 => 5,  11 => 1,);
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
\t\t<h1>Subir XML con licencias</h1>
\t</div>
\t<div class=\"row\">
\t\t<form method=\"POST\" action=\"{{path_for('subirxmlpost')}}\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subirxml\">Subir XML con licencias</label>
\t\t\t\t<input type=\"file\" id=\"subirxml\" name=\"subirxml\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
\t
</div>
<div class=\"col-xs-3\"></div>
{% endblock %}", "subirxml.twig.php", "C:\\wamp64\\www\\proyecto_final\\templates\\subirxml.twig.php");
    }
}
