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

/* visiteur/fichefrais.html.twig */
class __TwigTemplate_93f4ca5105d05d315f7bda616d934476f4f71b835edae9e2b570e33ea241aed9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/fichefrais.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/fichefrais.html.twig", 1);
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
    .example-wrapper { margin: 5em auto; max-width: 750px; width: 100%; font: 20px/1.5 sans-serif; position:absolute; margin-left: 25% ; }
    .box {background-color: #F4F6FC;}
</style>

<div class=\"example-wrapper\">
    <div class=\"title is-2\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "! <code>";
        echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</code></div>

";
        // line 15
        echo "    <div class=\"box\">
\t<legend>Frais Frais Forfait</legend>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["FicheFrais"]) || array_key_exists("FicheFrais", $context) ? $context["FicheFrais"] : (function () { throw new RuntimeError('Variable "FicheFrais" does not exist.', 17, $this->source); })()), "ligneFraisForfait", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 18
            echo "        <div class=\"box\">
            <form method=\"POST\">
                <input type=\"number\" name=\"id\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\" style=\"display: none;\">
                libelle :<input type=\"text\" name=\"libelle\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "libelle", [], "any", false, false, false, 21), "html", null, true);
            echo "\" readonly/>
                quantite :<input type=\"number\" name=\"quantite\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "quantite", [], "any", false, false, false, 22), "html", null, true);
            echo "\" />
                </br></br>
                <button type=\"submit\" formaction=\"/visiteur/modifier-fraisforfais\" class=\"button is-warning\">modifier</button>
                <button type=\"submit\" formaction=\"/visiteur/supprimer-fraisforfais\" class=\"button is-danger\">supprimer</button>
            </form>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div></br>

";
        // line 32
        echo "
    <div class=\"box\">
\t<legend>Frais Hors Forfait</legend>
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["FicheFrais"]) || array_key_exists("FicheFrais", $context) ? $context["FicheFrais"] : (function () { throw new RuntimeError('Variable "FicheFrais" does not exist.', 35, $this->source); })()), "ligneHorsForfait", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 36
            echo "        <div class=\"box\">
            <form method=\"POST\">
                
                <input type=\"number\" name=\"id\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" style=\"display: none;\">
                libelle :<input type=\"text\" name=\"libelle\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "libelle", [], "any", false, false, false, 40), "html", null, true);
            echo "\" />
                montant :<input type=\"number\" name=\"montant\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "montant", [], "any", false, false, false, 41), "html", null, true);
            echo "\"/>
                </br></br>
                <button type=\"submit\" formaction=\"/visiteur/modifier-fraishors\" class=\"button is-warning\">modifier</button>
                <button type=\"submit\" formaction=\"/visiteur/supprimer-fraishors\" class=\"button is-danger\">supprimer</button>
            </form>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>

    <button class=\"button is-info\"><a href=\"/visiteur/renseigner\">Retour en arriere</a></button>
    <button class=\"button is-info\"><a href=\"/visiteur/fiche-validee\">Valider fiche frais</a></button>


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/fichefrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 48,  147 => 41,  143 => 40,  139 => 39,  134 => 36,  130 => 35,  125 => 32,  121 => 29,  108 => 22,  104 => 21,  100 => 20,  96 => 18,  92 => 17,  88 => 15,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Visiteur !{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 5em auto; max-width: 750px; width: 100%; font: 20px/1.5 sans-serif; position:absolute; margin-left: 25% ; }
    .box {background-color: #F4F6FC;}
</style>

<div class=\"example-wrapper\">
    <div class=\"title is-2\">{{ controller_name }}! <code>{{mois}}</code></div>

{######################## Liste Frais ########################}
    <div class=\"box\">
\t<legend>Frais Frais Forfait</legend>
{% for Fiche in FicheFrais.ligneFraisForfait %}
        <div class=\"box\">
            <form method=\"POST\">
                <input type=\"number\" name=\"id\" value=\"{{Fiche.id}}\" style=\"display: none;\">
                libelle :<input type=\"text\" name=\"libelle\" value=\"{{Fiche.libelle}}\" readonly/>
                quantite :<input type=\"number\" name=\"quantite\" value=\"{{Fiche.quantite}}\" />
                </br></br>
                <button type=\"submit\" formaction=\"/visiteur/modifier-fraisforfais\" class=\"button is-warning\">modifier</button>
                <button type=\"submit\" formaction=\"/visiteur/supprimer-fraisforfais\" class=\"button is-danger\">supprimer</button>
            </form>
        </div>
{% endfor %}
    </div></br>

{######################## Liste Hors ########################}

    <div class=\"box\">
\t<legend>Frais Hors Forfait</legend>
{% for Fiche in FicheFrais.ligneHorsForfait %}
        <div class=\"box\">
            <form method=\"POST\">
                
                <input type=\"number\" name=\"id\" value=\"{{Fiche.id}}\" style=\"display: none;\">
                libelle :<input type=\"text\" name=\"libelle\" value=\"{{Fiche.libelle}}\" />
                montant :<input type=\"number\" name=\"montant\" value=\"{{Fiche.montant}}\"/>
                </br></br>
                <button type=\"submit\" formaction=\"/visiteur/modifier-fraishors\" class=\"button is-warning\">modifier</button>
                <button type=\"submit\" formaction=\"/visiteur/supprimer-fraishors\" class=\"button is-danger\">supprimer</button>
            </form>
        </div>
{% endfor %}
    </div>

    <button class=\"button is-info\"><a href=\"/visiteur/renseigner\">Retour en arriere</a></button>
    <button class=\"button is-info\"><a href=\"/visiteur/fiche-validee\">Valider fiche frais</a></button>


    </div>
{% endblock %}
", "visiteur/fichefrais.html.twig", "/mnt/c/Users/charl/Desktop/SIO/GSB-Frais/templates/visiteur/fichefrais.html.twig");
    }
}
