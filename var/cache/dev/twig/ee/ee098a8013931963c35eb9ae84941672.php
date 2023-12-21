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

/* ville/statistiques.html.twig */
class __TwigTemplate_8b7610364f2d3876531c7d31f52d668e extends Template
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
        // line 4
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ville/statistiques.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ville/statistiques.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ville/statistiques.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Statistiques de la ville";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Statistiques de la ville ";
        echo twig_escape_filter($this->env, (isset($context["nomVille"]) || array_key_exists("nomVille", $context) ? $context["nomVille"] : (function () { throw new RuntimeError('Variable "nomVille" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h1>
    <div>
        <p>Moyenne d'âge: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["moyenneAge"]) || array_key_exists("moyenneAge", $context) ? $context["moyenneAge"] : (function () { throw new RuntimeError('Variable "moyenneAge" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</p>
        <p>Nombre d'habitants : ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["nbHabitants"]) || array_key_exists("nbHabitants", $context) ? $context["nbHabitants"] : (function () { throw new RuntimeError('Variable "nbHabitants" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " </p>
        <p>Surface totale habitable : ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["surfaceTotale"]) || array_key_exists("surfaceTotale", $context) ? $context["surfaceTotale"] : (function () { throw new RuntimeError('Variable "surfaceTotale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " m²</p>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ville/statistiques.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  102 => 13,  98 => 12,  94 => 11,  88 => 9,  78 => 8,  59 => 6,  36 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("
{# templates/ville/statistiques.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Statistiques de la ville{% endblock %}

{% block body %}
    <h1>Statistiques de la ville {{ nomVille }}</h1>
    <div>
        <p>Moyenne d'âge: {{ moyenneAge }}</p>
        <p>Nombre d'habitants : {{ nbHabitants }} </p>
        <p>Surface totale habitable : {{ surfaceTotale }} m²</p>
    </div>
{% endblock %}
", "ville/statistiques.html.twig", "/home/lacoste/TP_Projet/templates/ville/statistiques.html.twig");
    }
}
