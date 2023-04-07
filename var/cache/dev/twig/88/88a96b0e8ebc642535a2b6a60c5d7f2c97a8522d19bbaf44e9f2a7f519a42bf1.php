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

/* visiteur/consulter.html.twig */
class __TwigTemplate_53afab7a2eebbc14bdaa5601d3c6ff22d30ec778592d164d2b86674e816c61a2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/consulter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/consulter.html.twig", 1);
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
        echo "! ✅ <code>";
        echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</code></h1>

    <fieldset>
        <legend>Fiche Frais Forfais</legend>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["FicheFrais"]) || array_key_exists("FicheFrais", $context) ? $context["FicheFrais"] : (function () { throw new RuntimeError('Variable "FicheFrais" does not exist.', 16, $this->source); })()), "ligneFraisForfait", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 17
            echo "        <fieldset>
                libelle : ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "libelle", [], "any", false, false, false, 18), "html", null, true);
            echo "</br>
                montant : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "montant", [], "any", false, false, false, 19), "html", null, true);
            echo " 
        </fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </fieldset>

    <fieldset>
        <legend>Fiche Hors Forfais</legend>
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["FicheFrais"]) || array_key_exists("FicheFrais", $context) ? $context["FicheFrais"] : (function () { throw new RuntimeError('Variable "FicheFrais" does not exist.', 26, $this->source); })()), "ligneHorsForfait", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 27
            echo "        <fieldset>
                libelle : ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "libelle", [], "any", false, false, false, 28), "html", null, true);
            echo "</br>
                montant : ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "montant", [], "any", false, false, false, 29), "html", null, true);
            echo " 
        </fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </fieldset>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 32,  127 => 29,  123 => 28,  120 => 27,  116 => 26,  110 => 22,  101 => 19,  97 => 18,  94 => 17,  90 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
    <h1>{{ controller_name }}! ✅ <code>{{mois}}</code></h1>

    <fieldset>
        <legend>Fiche Frais Forfais</legend>
{% for Fiche in FicheFrais.ligneFraisForfait %}
        <fieldset>
                libelle : {{Fiche.libelle}}</br>
                montant : {{Fiche.montant}} 
        </fieldset>
{% endfor %}
    </fieldset>

    <fieldset>
        <legend>Fiche Hors Forfais</legend>
{% for Fiche in FicheFrais.ligneHorsForfait %}
        <fieldset>
                libelle : {{Fiche.libelle}}</br>
                montant : {{Fiche.montant}} 
        </fieldset>
{% endfor %}
    </fieldset>

</div>
{% endblock %}", "visiteur/consulter.html.twig", "/mnt/c/Users/amrou/OneDrive/Bureau/GSB-Frais/templates/visiteur/consulter.html.twig");
    }
}
