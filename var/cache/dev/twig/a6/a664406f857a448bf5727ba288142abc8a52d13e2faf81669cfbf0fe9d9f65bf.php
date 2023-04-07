<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* visiteur/index.html.twig */
class __TwigTemplate_6aca0bb0c791bd6d02bf38a85558a5a0eb393ec17c2ef4e8dbda150867678c49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Visiteur !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ✅</h1>
    
";
        // line 14
        echo "        \t\t
    <fieldset>
\t<legend>Renseigner Fiche Frais</legend>
\t
\t\t<a href=\"/visiteur/renseigner\">pour ce mois (";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 18, $this->source); })()), "html", null, true);
        echo ")</a>
\t\t
\t</fieldset>\t

";
        // line 23
        echo "    <fieldset>
\t<legend>Consulter Fiche Frais</legend>
\t
\t\t<form action=\"/visiteur/consulter\" method=\"POST\">
\t\t\tSelectionner le mois à consulter :<br/>
\t\t\t<input type=\"month\" name=\"month\" /><br/>

\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\"/>
\t\t</form>\t
\t\t
\t</fieldset>\t
    
";
        // line 37
        echo "    <code><a href=\"deconnection\">Deconnection</a></code>
\t

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  101 => 23,  94 => 18,  88 => 14,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Visiteur !{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>{{ controller_name }} {{id}} ✅</h1>
    
{######################## Renseigner  ########################}        \t\t
    <fieldset>
\t<legend>Renseigner Fiche Frais</legend>
\t
\t\t<a href=\"/visiteur/renseigner\">pour ce mois ({{mois}})</a>
\t\t
\t</fieldset>\t

{######################## Consulter ########################}
    <fieldset>
\t<legend>Consulter Fiche Frais</legend>
\t
\t\t<form action=\"/visiteur/consulter\" method=\"POST\">
\t\t\tSelectionner le mois à consulter :<br/>
\t\t\t<input type=\"month\" name=\"month\" /><br/>

\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\"/>
\t\t</form>\t
\t\t
\t</fieldset>\t
    
{######################## Deconnection ########################}
    <code><a href=\"deconnection\">Deconnection</a></code>
\t

</div>
{% endblock %}
", "visiteur/index.html.twig", "/mnt/c/Users/amrou/OneDrive/Bureau/GSB-Frais/templates/visiteur/index.html.twig");
    }
}
