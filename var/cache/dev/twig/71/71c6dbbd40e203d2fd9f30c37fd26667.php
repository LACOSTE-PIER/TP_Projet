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

/* habitant/show.html.twig */
class __TwigTemplate_24e58367e674cdafc1e61198809b16bc extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitant/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitant/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitant/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Détails de l'Habitant";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"habitant-container\">
    <div class=\"habitant-card\">
        <h2>Détails de l'Habitant</h2>
        <p><strong>Nom :</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 9, $this->source); })()), "nomFamille", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
        <p><strong>Prénom :</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 10, $this->source); })()), "prenomIndividu", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        <p><strong>Date de Naissance :</strong> ";
        // line 11
        ((twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 11, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 11)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 11, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 11), "Y-m-d"), "html", null, true))) : (print ("Non renseignée")));
        echo "</p>
        <p><strong>Genre :</strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 12, $this->source); })()), "genreIdentifie", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        <p><strong>Adresse :</strong> ";
        // line 13
        ((twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 13, $this->source); })()), "habitation", [], "any", false, false, false, 13)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 13, $this->source); })()), "habitation", [], "any", false, false, false, 13), "adresse", [], "any", false, false, false, 13), "html", null, true))) : (print ("Non renseignée")));
        echo "</p>
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitant_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Modifier</a>
    </div>
    
    <div class=\"actions\">
        ";
        // line 18
        echo twig_include($this->env, $context, "habitant/_delete_form.html.twig");
        echo "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "<style>
  .habitant-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        margin: 40px auto;
        max-width: 800px;
    }
    .habitant-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border: none;
        width: 100%;
        position: relative; 
    }
    .habitant-card h2 {
        color: #0056b3;
        margin-bottom: 16px;
        text-align: center;
    }
    .habitant-card p {
        margin-left: 20px;
        font-size: 1.1em;
        line-height: 1.5;
    }
    .button-container {
        position: absolute; 
        right: 200px; /* Align to the right side */
        top: 20px; /* Position from the top */
    }
    .actions {
        text-align: center;
        margin-top: 20px;
    }
    .btn {
        padding: 10px 15px;
        font-size: 1rem;
        border-radius: 4px;
        text-decoration: none;
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
        transition: background-color 0.2s;
        margin: 0 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

    }
    .btn-outline-secondary {
        background-color: transparent;
        color: #6c757d;
        border-color: #6c757d;
    }
    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: #fff;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "habitant/show.html.twig";
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
        return array (  145 => 24,  135 => 23,  121 => 18,  114 => 14,  110 => 13,  106 => 12,  102 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Habitant{% endblock %}

{% block body %}
<div class=\"habitant-container\">
    <div class=\"habitant-card\">
        <h2>Détails de l'Habitant</h2>
        <p><strong>Nom :</strong> {{ habitant.nomFamille }}</p>
        <p><strong>Prénom :</strong> {{ habitant.prenomIndividu }}</p>
        <p><strong>Date de Naissance :</strong> {{ habitant.dateDeNaissance ? habitant.dateDeNaissance|date('Y-m-d') : 'Non renseignée' }}</p>
        <p><strong>Genre :</strong> {{ habitant.genreIdentifie }}</p>
        <p><strong>Adresse :</strong> {{ habitant.habitation ? habitant.habitation.adresse : 'Non renseignée' }}</p>
        <a href=\"{{ path('app_habitant_edit', {'id': habitant.id}) }}\" class=\"btn btn-primary\">Modifier</a>
    </div>
    
    <div class=\"actions\">
        {{ include('habitant/_delete_form.html.twig') }}
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
  .habitant-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        margin: 40px auto;
        max-width: 800px;
    }
    .habitant-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border: none;
        width: 100%;
        position: relative; 
    }
    .habitant-card h2 {
        color: #0056b3;
        margin-bottom: 16px;
        text-align: center;
    }
    .habitant-card p {
        margin-left: 20px;
        font-size: 1.1em;
        line-height: 1.5;
    }
    .button-container {
        position: absolute; 
        right: 200px; /* Align to the right side */
        top: 20px; /* Position from the top */
    }
    .actions {
        text-align: center;
        margin-top: 20px;
    }
    .btn {
        padding: 10px 15px;
        font-size: 1rem;
        border-radius: 4px;
        text-decoration: none;
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
        transition: background-color 0.2s;
        margin: 0 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

    }
    .btn-outline-secondary {
        background-color: transparent;
        color: #6c757d;
        border-color: #6c757d;
    }
    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: #fff;
    }
</style>
{% endblock %}
", "habitant/show.html.twig", "/home/lacoste/TP_Projet/templates/habitant/show.html.twig");
    }
}
