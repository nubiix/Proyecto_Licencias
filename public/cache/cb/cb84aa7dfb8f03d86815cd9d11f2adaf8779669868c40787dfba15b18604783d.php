<?php

/* xmlsubido.twig.php */
class __TwigTemplate_9fb6965b5bba2ed1b2834ea59c0cb5a951cdab1c9fbc7e2a94911b58dc980364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php ", "xmlsubido.twig.php", 1);
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
\t\t<h1>El XML se ha subido correctamente</h1>
\t</div>
\t<div class=\"row\">
\t\t<h2>Para el sistema: ";
        // line 12
        echo twig_escape_filter($this->env, ($context["nombre"] ?? null), "html", null, true);
        echo "</h2>
\t</div>
\t<div class=\"row\">
\t\t ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 16
            echo "\t\t\t<h3>Clave: ";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</h3>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
\t</div>
</div>
<div class=\"col-xs-3\"></div>
";
    }

    public function getTemplateName()
    {
        return "xmlsubido.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  49 => 16,  45 => 15,  39 => 12,  31 => 6,  28 => 5,  11 => 1,);
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
\t\t<h1>El XML se ha subido correctamente</h1>
\t</div>
\t<div class=\"row\">
\t\t<h2>Para el sistema: {{ nombre }}</h2>
\t</div>
\t<div class=\"row\">
\t\t {% for k in keys %}
\t\t\t<h3>Clave: {{ k }}</h3>
\t\t{% endfor %} 
\t</div>
</div>
<div class=\"col-xs-3\"></div>
{% endblock %}", "xmlsubido.twig.php", "C:\\wamp64\\www\\proyecto_final\\templates\\xmlsubido.twig.php");
    }
}
