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
        echo "
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "! ✅ <code>";
        echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</code></h1>

";
        // line 16
        echo "    <fieldset>
\t<legend>Frais Frais Forfait</legend>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["FicheFrais"]) || array_key_exists("FicheFrais", $context) ? $context["FicheFrais"] : (function () { throw new RuntimeError('Variable "FicheFrais" does not exist.', 18, $this->source); })()), "ligneFraisForfait", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 19
            echo "        <fieldset>
            <form method=\"POST\">
                <input type=\"number\" name=\"id\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" style=\"display: none;\">
                libelle :<input type=\"text\" name=\"libelle\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "libelle", [], "any", false, false, false, 22), "html", null, true);
            echo "\" readonly/>
                quantite :<input type=\"number\" name=\"quantite\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "quantite", [], "any", false, false, false, 23), "html", null, true);
            echo "\" />

                <button type=\"submit\" formaction=\"/visiteur/modifier-fraisforfais\">modifier</button>
                <button type=\"submit\" formaction=\"/visiteur/supprimer-fraisforfais\">supprimer</button>
            </form>
        </fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </fieldset></br>

";
        // line 33
        echo "
    <fieldset>
\t<legend>Frais Hors Forfait</legend>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["FicheFrais"]) || array_key_exists("FicheFrais", $context) ? $context["FicheFrais"] : (function () { throw new RuntimeError('Variable "FicheFrais" does not exist.', 36, $this->source); })()), "ligneHorsForfait", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 37
            echo "        <fieldset>
            <form method=\"POST\">
                
                <input type=\"number\" name=\"id\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" style=\"display: none;\">
                libelle :<input type=\"text\" name=\"libelle\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "libelle", [], "any", false, false, false, 41), "html", null, true);
            echo "\" />
                montant :<input type=\"number\" name=\"montant\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fiche"], "montant", [], "any", false, false, false, 42), "html", null, true);
            echo "\"/>

                <button type=\"submit\" formaction=\"/visiteur/modifier-fraishors\">modifier</button>
                <button type=\"submit\" formaction=\"/visiteur/supprimer-fraishors\">supprimer</button>
            </form>
        </fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </fieldset>

    <center><code><a href=\"/visiteur/renseigner\">Retour en arriere</a></code></center><center><code><a href=\"/visiteur/fiche-validee\">Valider fiche frais</a></code></center>


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
        return array (  161 => 49,  148 => 42,  144 => 41,  140 => 40,  135 => 37,  131 => 36,  126 => 33,  122 => 30,  109 => 23,  105 => 22,  101 => 21,  97 => 19,  93 => 18,  89 => 16,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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

{######################## Liste Frais ########################}
    <fieldset>
\t<legend>Frais Frais Forfait</legend>
{% for Fiche in FicheFrais.ligneFraisForfait %}
        <fieldset>
            <form method=\"POST\">
                <input type=\"number\" name=\"id\" value=\"{{Fiche.id}}\" style=\"display: none;\">
                libelle :<input type=\"text\" name=\"libelle\" value=\"{{Fiche.libelle}}\" readonly/>
                quantite :<input type=\"number\" name=\"quantite\" value=\"{{Fiche.quantite}}\" />

                <button type=\"submit\" formaction=\"/visiteur/modifier-fraisforfais\">modifier</button>
                <button type=\"submit\" formaction=\"/visiteur/supprimer-fraisforfais\">supprimer</button>
            </form>
        </fieldset>
{% endfor %}
    </fieldset></br>

{######################## Liste Hors ########################}

    <fieldset>
\t<legend>Frais Hors Forfait</legend>
{% for Fiche in FicheFrais.ligneHorsForfait %}
        <fieldset>
            <form method=\"POST\">
                
                <input type=\"number\" name=\"id\" value=\"{{Fiche.id}}\" style=\"display: none;\">
                libelle :<input type=\"text\" name=\"libelle\" value=\"{{Fiche.libelle}}\" />
                montant :<input type=\"number\" name=\"montant\" value=\"{{Fiche.montant}}\"/>

                <button type=\"submit\" formaction=\"/visiteur/modifier-fraishors\">modifier</button>
                <button type=\"submit\" formaction=\"/visiteur/supprimer-fraishors\">supprimer</button>
            </form>
        </fieldset>
{% endfor %}
    </fieldset>

    <center><code><a href=\"/visiteur/renseigner\">Retour en arriere</a></code></center><center><code><a href=\"/visiteur/fiche-validee\">Valider fiche frais</a></code></center>


</div>
{% endblock %}
", "visiteur/fichefrais.html.twig", "/mnt/c/Users/charl/Desktop/SIO/GSB-Frais/GSB-Frais/templates/visiteur/fichefrais.html.twig");
    }
}
