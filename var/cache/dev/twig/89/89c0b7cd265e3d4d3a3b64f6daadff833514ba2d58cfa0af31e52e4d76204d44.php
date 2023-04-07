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

/* visiteur/renseigner.html.twig */
class __TwigTemplate_3fd5370bfde24ffbbf2fbeb048262c95815adbd32d2194faa5fc7675fc42a913 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/renseigner.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/renseigner.html.twig", 1);
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

";
        // line 15
        echo "
";
        // line 16
        if ( !twig_test_empty((isset($context["libelles"]) || array_key_exists("libelles", $context) ? $context["libelles"] : (function () { throw new RuntimeError('Variable "libelles" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "    <fieldset>
\t<legend>Frais Forfait</legend>
\t
\t\t<form action=\"/visiteur/renseigner/forfais\" method=\"POST\">
\t\t\tSaisisez la quantitee :
\t\t\t<input type=\"number\" name=\"montant\" required/><br/>

            Saisisez le Frais
            <select id=\"libelle\" name=\"libelle\">
\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["libelles"]) || array_key_exists("libelles", $context) ? $context["libelles"] : (function () { throw new RuntimeError('Variable "libelles" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 27
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "libelle", [], "any", false, false, false, 27), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </select><br/>

\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\"/>
\t\t</form>\t
\t\t
\t</fieldset>
";
        }
        // line 37
        echo "
";
        // line 39
        echo "
\t</br>
    <fieldset>
\t<legend>Frais Hors Forfait</legend>
\t
\t\t<form action=\"/visiteur/renseigner/hors-forfais\" method=\"POST\">
\t\t\tSaisisez le montant :
\t\t\t<input type=\"number\" name=\"montant\" required/><br/>

\t\t\tSaisisez le libelle :
\t\t\t<input type=\"text\" name=\"libelle\" required/><br/>

\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\"/>
\t\t</form>\t
\t\t
\t</fieldset>


";
        // line 59
        echo "
\t<br/>
    ";
        // line 61
        if (array_key_exists("Frais", $context)) {
            // line 62
            echo "\t\t<center>le frais: '<strong>";
            echo twig_escape_filter($this->env, (isset($context["Frais"]) || array_key_exists("Frais", $context) ? $context["Frais"] : (function () { throw new RuntimeError('Variable "Frais" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "</strong>' à bien était ajouter</center>
    ";
        } else {
            // line 64
            echo "        <center>Aucun frais n'a etait ajouter à la fiche</center>
    ";
        }
        // line 66
        echo "

";
        // line 69
        echo "\t
\t<br/>
\t<code><a href=\"/visiteur\">Retour en arriere</a></code>
\t<code><a href=\"/visiteur/finaliser-fiche\">Finaliser la fiche</a></code>
\t




</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/renseigner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 69,  169 => 66,  165 => 64,  159 => 62,  157 => 61,  153 => 59,  132 => 39,  129 => 37,  119 => 29,  108 => 27,  104 => 26,  93 => 17,  91 => 16,  88 => 15,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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

{######################## Forfais ########################}

{% if libelles is not empty %}
    <fieldset>
\t<legend>Frais Forfait</legend>
\t
\t\t<form action=\"/visiteur/renseigner/forfais\" method=\"POST\">
\t\t\tSaisisez la quantitee :
\t\t\t<input type=\"number\" name=\"montant\" required/><br/>

            Saisisez le Frais
            <select id=\"libelle\" name=\"libelle\">
\t\t\t{% for l in libelles %}
                <option value=\"{{l.id}}\">{{l.libelle}}</option>
\t\t\t{% endfor %}
            </select><br/>

\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\"/>
\t\t</form>\t
\t\t
\t</fieldset>
{% endif %}

{######################## Hors Forfais ########################}

\t</br>
    <fieldset>
\t<legend>Frais Hors Forfait</legend>
\t
\t\t<form action=\"/visiteur/renseigner/hors-forfais\" method=\"POST\">
\t\t\tSaisisez le montant :
\t\t\t<input type=\"number\" name=\"montant\" required/><br/>

\t\t\tSaisisez le libelle :
\t\t\t<input type=\"text\" name=\"libelle\" required/><br/>

\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\"/>
\t\t</form>\t
\t\t
\t</fieldset>


{######################## Frais Valide ########################}

\t<br/>
    {% if Frais is defined %}
\t\t<center>le frais: '<strong>{{Frais}}</strong>' à bien était ajouter</center>
    {% else %}
        <center>Aucun frais n'a etait ajouter à la fiche</center>
    {% endif %}


{######################## Fiche Valide ########################}
\t
\t<br/>
\t<code><a href=\"/visiteur\">Retour en arriere</a></code>
\t<code><a href=\"/visiteur/finaliser-fiche\">Finaliser la fiche</a></code>
\t




</div>
{% endblock %}
", "visiteur/renseigner.html.twig", "/mnt/c/Users/charl/Desktop/SIO/GSB-Frais/GSB-Frais/templates/visiteur/renseigner.html.twig");
    }
}
