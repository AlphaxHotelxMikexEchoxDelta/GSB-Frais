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
class __TwigTemplate_bfd3c1936b49b9e60d2daf09c87a7eb0e86aef0ef7b384b0d2f293c9146fd733 extends Template
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
    .example-wrapper { margin: 5em auto; max-width: 400px; width: 100%; font: 20px/1.5 sans-serif; position:absolute; margin-left: 38% ; }
    .box {background-color: #F4F6FC;}
</style>


<div class=\"example-wrapper\">
    <div class=\"title is-1\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</div>
    
";
        // line 15
        echo "        \t\t
    <div class=\"box\">
\t<legend>Renseigner Fiche Frais</legend>
\t
\t\t<code><a href=\"/visiteur/renseigner\">pour ce mois (";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 19, $this->source); })()), "html", null, true);
        echo ")</a></code>
\t\t
\t</div></br>

";
        // line 24
        echo "    <div class=\"box\">
\t<legend>Consulter Fiche Frais</legend>
\t
\t\t<form action=\"/visiteur/consulter\" method=\"POST\">
\t\t\tSelectionner le mois à consulter :<br/>
\t\t\t<input type=\"month\" name=\"month\" required/><br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" class=\"button is-primary\"/>
\t\t</form>\t
\t\t
\t</div>\t
    
";
        // line 37
        echo "\t
\t<div class=\"button is-danger\"><a href=\"deconnection\">Deconnection</a></div>

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
        return array (  116 => 37,  102 => 24,  95 => 19,  89 => 15,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Visiteur !{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 5em auto; max-width: 400px; width: 100%; font: 20px/1.5 sans-serif; position:absolute; margin-left: 38% ; }
    .box {background-color: #F4F6FC;}
</style>


<div class=\"example-wrapper\">
    <div class=\"title is-1\">{{ controller_name }} {{id}}</div>
    
{######################## Renseigner  ########################}        \t\t
    <div class=\"box\">
\t<legend>Renseigner Fiche Frais</legend>
\t
\t\t<code><a href=\"/visiteur/renseigner\">pour ce mois ({{mois}})</a></code>
\t\t
\t</div></br>

{######################## Consulter ########################}
    <div class=\"box\">
\t<legend>Consulter Fiche Frais</legend>
\t
\t\t<form action=\"/visiteur/consulter\" method=\"POST\">
\t\t\tSelectionner le mois à consulter :<br/>
\t\t\t<input type=\"month\" name=\"month\" required/><br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" class=\"button is-primary\"/>
\t\t</form>\t
\t\t
\t</div>\t
    
{######################## Deconnection ########################}
\t
\t<div class=\"button is-danger\"><a href=\"deconnection\">Deconnection</a></div>

</div>
{% endblock %}
", "visiteur/index.html.twig", "/mnt/c/Users/charl/Desktop/SIO/GSB-Frais/templates/visiteur/index.html.twig");
    }
}
