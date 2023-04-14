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
    .example-wrapper { margin: 5em auto; max-width: 300px; width: 100%; font: 20px/1.5 sans-serif; position:absolute; margin-left: 40%; }
    .box {background-color: #F4F6FC;}
</style>

<div class=\"example-wrapper\">
        <div class=\"box\">
            
            <figure class=\"image is-160-85\">
                <img src=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.gif"), "html", null, true);
        echo " alt=\"Image\">
            </figure><br/>
            
            <form action=\"/connection/visiteur\" method=\"POST\">
                Identifiant :<br/>
                <input type=\"text\" name=\"id\" require class=\"label\" value=\"lvillachane\"/>
                Mot de passe :<br/>
                <input type=\"password\" name=\"mdp\" require class=\"label\" value=\"jux7g\"/>
                <br/>
                <input type=\"submit\" value=\"Valider\" class=\"button is-primary\"/>
            </form>\t


        </div>
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
        return array (  70 => 13,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    .example-wrapper { margin: 5em auto; max-width: 300px; width: 100%; font: 20px/1.5 sans-serif; position:absolute; margin-left: 40%; }
    .box {background-color: #F4F6FC;}
</style>

<div class=\"example-wrapper\">
        <div class=\"box\">
            
            <figure class=\"image is-160-85\">
                <img src={{ asset(\"logo.gif\") }} alt=\"Image\">
            </figure><br/>
            
            <form action=\"/connection/visiteur\" method=\"POST\">
                Identifiant :<br/>
                <input type=\"text\" name=\"id\" require class=\"label\" value=\"lvillachane\"/>
                Mot de passe :<br/>
                <input type=\"password\" name=\"mdp\" require class=\"label\" value=\"jux7g\"/>
                <br/>
                <input type=\"submit\" value=\"Valider\" class=\"button is-primary\"/>
            </form>\t


        </div>
    </div>
{% endblock %}
", "acceuil/index.html.twig", "/mnt/c/Users/charl/Desktop/SIO/GSB-Frais/templates/acceuil/index.html.twig");
    }
}
