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
    .example-wrapper { margin: 5em auto; max-width: 400px; width: 100%; font: 20px/1.5 sans-serif; position:absolute; margin-left: 38% ; }
    .box {background-color: #F4F6FC;}
</style>


<div class=\"example-wrapper\">
    <div class=\"title is-2\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "! <code>";
        echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</code></div>

";
        // line 16
        echo "
";
        // line 17
        if ( !twig_test_empty((isset($context["libelles"]) || array_key_exists("libelles", $context) ? $context["libelles"] : (function () { throw new RuntimeError('Variable "libelles" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "    <div class=\"box\">
\t<legend>Frais Forfait</legend>
\t
\t\t<form action=\"/visiteur/renseigner/forfais\" method=\"POST\">
\t\t\tSaisisez la quantitee :
\t\t\t<input type=\"number\" name=\"montant\" required/><br/>

            Saisisez le Frais
            <select id=\"libelle\" name=\"libelle\">
\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["libelles"]) || array_key_exists("libelles", $context) ? $context["libelles"] : (function () { throw new RuntimeError('Variable "libelles" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 28
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "libelle", [], "any", false, false, false, 28), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            </select><br/>

\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" class=\"button is-primary\"/>
\t\t</form>\t
\t\t
\t</div>
";
        }
        // line 38
        echo "
";
        // line 40
        echo "
\t</br>
    <div class=\"box\">
\t<legend>Frais Hors Forfait</legend>
\t
\t\t<form action=\"/visiteur/renseigner/hors-forfais\" method=\"POST\">
\t\t\tSaisisez le montant :
\t\t\t<input type=\"number\" name=\"montant\" required/><br/>

\t\t\tSaisisez le libelle :
\t\t\t<input type=\"text\" name=\"libelle\" required/><br/>

\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" class=\"button is-primary\"/>
\t\t</form>\t
\t\t
\t</div>


";
        // line 60
        echo "<script>

document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach((\$delete) => {
    const \$notification = \$delete.parentNode;

    \$delete.addEventListener('click', () => {
      \$notification.parentNode.removeChild(\$notification);
    });
  });
});

</script>


\t<br/>
    ";
        // line 76
        if (array_key_exists("Frais", $context)) {
            // line 77
            echo "\t    <div class=\"notification is-success is-light\">
  \t\t\t<button class=\"delete\"></button>
 \t\t\tle frais: '<strong>";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["Frais"]) || array_key_exists("Frais", $context) ? $context["Frais"] : (function () { throw new RuntimeError('Variable "Frais" does not exist.', 79, $this->source); })()), "html", null, true);
            echo "</strong>' à bien était ajouter
\t\t</div>
    ";
        } else {
            // line 82
            echo "        <div class=\"notification is-warning is-light\">
  \t\t\t<button class=\"delete\"></button>
 \t\t\t Aucun frais n'a etait ajouter à la fiche
\t\t</div>
    ";
        }
        // line 87
        echo "

";
        // line 90
        echo "\t
\t<br/>
\t<div class=\"button is-info\"><a href=\"/visiteur\">Retour en arriere</a></div>
\t<div class=\"button is-info\"><a href=\"/visiteur/finaliser-fiche\">Finaliser la fiche</a></div>



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
        return array (  195 => 90,  191 => 87,  184 => 82,  178 => 79,  174 => 77,  172 => 76,  154 => 60,  133 => 40,  130 => 38,  120 => 30,  109 => 28,  105 => 27,  94 => 18,  92 => 17,  89 => 16,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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

{######################## Forfais ########################}

{% if libelles is not empty %}
    <div class=\"box\">
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
\t\t\t<input type=\"submit\" value=\"Valider\" class=\"button is-primary\"/>
\t\t</form>\t
\t\t
\t</div>
{% endif %}

{######################## Hors Forfais ########################}

\t</br>
    <div class=\"box\">
\t<legend>Frais Hors Forfait</legend>
\t
\t\t<form action=\"/visiteur/renseigner/hors-forfais\" method=\"POST\">
\t\t\tSaisisez le montant :
\t\t\t<input type=\"number\" name=\"montant\" required/><br/>

\t\t\tSaisisez le libelle :
\t\t\t<input type=\"text\" name=\"libelle\" required/><br/>

\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" class=\"button is-primary\"/>
\t\t</form>\t
\t\t
\t</div>


{######################## Frais Valide ########################}
<script>

document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach((\$delete) => {
    const \$notification = \$delete.parentNode;

    \$delete.addEventListener('click', () => {
      \$notification.parentNode.removeChild(\$notification);
    });
  });
});

</script>


\t<br/>
    {% if Frais is defined %}
\t    <div class=\"notification is-success is-light\">
  \t\t\t<button class=\"delete\"></button>
 \t\t\tle frais: '<strong>{{Frais}}</strong>' à bien était ajouter
\t\t</div>
    {% else %}
        <div class=\"notification is-warning is-light\">
  \t\t\t<button class=\"delete\"></button>
 \t\t\t Aucun frais n'a etait ajouter à la fiche
\t\t</div>
    {% endif %}


{######################## Fiche Valide ########################}
\t
\t<br/>
\t<div class=\"button is-info\"><a href=\"/visiteur\">Retour en arriere</a></div>
\t<div class=\"button is-info\"><a href=\"/visiteur/finaliser-fiche\">Finaliser la fiche</a></div>



</div>
{% endblock %}
", "visiteur/renseigner.html.twig", "/mnt/c/Users/charl/Desktop/SIO/GSB-Frais/templates/visiteur/renseigner.html.twig");
    }
}
