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

/* acceuil/index.html.twig */
class __TwigTemplate_3aee97026b71084be148192daef07de86b78d9b1f8ae30d2f4dd8352e466d0a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "acceuil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "! ✅</h1> 

";
        // line 13
        echo "
\t\t<fieldset class=\"anim-back\">
\t\t<legend>Visiteur</legend>
\t\t
\t\t\t<form action=\"/connection/visiteur\" method=\"POST\">
\t\t\t\tIdentifiant :<br/>
\t\t\t\t<input type=\"text\" name=\"id\" require/><br/>

\t\t\t\tMot de passe :<br/>
\t\t\t\t<input type=\"password\" name=\"mdp\" require/><br/>

\t\t\t\t<br/>
\t\t\t\t<input type=\"submit\" value=\"Valider\"/>
\t\t\t</form>\t
\t\t
\t\t</fieldset>\t
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "acceuil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>{{ controller_name }}! ✅</h1> 

{######################## VISITEUR ########################}

\t\t<fieldset class=\"anim-back\">
\t\t<legend>Visiteur</legend>
\t\t
\t\t\t<form action=\"/connection/visiteur\" method=\"POST\">
\t\t\t\tIdentifiant :<br/>
\t\t\t\t<input type=\"text\" name=\"id\" require/><br/>

\t\t\t\tMot de passe :<br/>
\t\t\t\t<input type=\"password\" name=\"mdp\" require/><br/>

\t\t\t\t<br/>
\t\t\t\t<input type=\"submit\" value=\"Valider\"/>
\t\t\t</form>\t
\t\t
\t\t</fieldset>\t
</div>
{% endblock %}
", "acceuil/index.html.twig", "/mnt/c/Users/charl/Desktop/SIO/GSB-Frais/GSB-Frais/templates/acceuil/index.html.twig");
    }
}
