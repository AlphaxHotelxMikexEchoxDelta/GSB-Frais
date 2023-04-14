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
class __TwigTemplate_3cfab9256a11d401680b48ad69b9df35c4abe8433ad27283a05e23319ea865da extends Template
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
    .example-wrapper { margin: 5em auto; max-width: 400px; width: 100%; font: 20px/1.5 sans-serif; position:absolute; margin-left: 38% ; }
    .box {background-color: #F4F6FC;}
</style>

<div class=\"example-wrapper\">
    <div class=\"title is-2\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "! <code>";
        echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</code></div>

    <div class=\"box\">
        <legend>Fiche Frais Forfais</legend>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["FicheFrais"]) || array_key_exists("FicheFrais", $context) ? $context["FicheFrais"] : (function () { throw new RuntimeError('Variable "FicheFrais" does not exist.', 16, $this->source); })()), "ligneFraisForfait", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 17
            echo "        <div class=\"box\">
                libelle : ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "libelle", [], "any", false, false, false, 18), "html", null, true);
            echo "</br>
                montant : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "quantite", [], "any", false, false, false, 19), "html", null, true);
            echo " 
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>

    <div class=\"box\">
        <legend>Fiche Hors Forfais</legend>
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["FicheFrais"]) || array_key_exists("FicheFrais", $context) ? $context["FicheFrais"] : (function () { throw new RuntimeError('Variable "FicheFrais" does not exist.', 26, $this->source); })()), "ligneHorsForfait", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 27
            echo "        <div class=\"box\">
                libelle : ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "libelle", [], "any", false, false, false, 28), "html", null, true);
            echo "</br>
                montant : ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "montant", [], "any", false, false, false, 29), "html", null, true);
            echo " 
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>

        <button class=\"button is-info\"><a href=\"/visiteur\">Retour en arriere</a></button>

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
    .example-wrapper { margin: 5em auto; max-width: 400px; width: 100%; font: 20px/1.5 sans-serif; position:absolute; margin-left: 38% ; }
    .box {background-color: #F4F6FC;}
</style>

<div class=\"example-wrapper\">
    <div class=\"title is-2\">{{ controller_name }}! <code>{{mois}}</code></div>

    <div class=\"box\">
        <legend>Fiche Frais Forfais</legend>
{% for Fiche in FicheFrais.ligneFraisForfait %}
        <div class=\"box\">
                libelle : {{Fiche.libelle}}</br>
                montant : {{Fiche.quantite}} 
        </div>
{% endfor %}
    </div>

    <div class=\"box\">
        <legend>Fiche Hors Forfais</legend>
{% for Fiche in FicheFrais.ligneHorsForfait %}
        <div class=\"box\">
                libelle : {{Fiche.libelle}}</br>
                montant : {{Fiche.montant}} 
        </div>
{% endfor %}
    </div>

        <button class=\"button is-info\"><a href=\"/visiteur\">Retour en arriere</a></button>

</div>
{% endblock %}", "visiteur/consulter.html.twig", "/mnt/c/Users/charl/Desktop/SIO/GSB-Frais/templates/visiteur/consulter.html.twig");
    }
}
