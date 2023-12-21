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

/* habitation/new.html.twig */
class __TwigTemplate_05a30baca9a71c012e682924010e89ac extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitation/new.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nouvelle Habitation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"edit-container\">
    <h1>Créer une nouvelle habitation</h1>

    <div class=\"form-container\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "
        <div class=\"form-content\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 15
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15) != "_token")) {
                // line 16
                echo "                    <div class=\"mb-3\">
                        ";
                // line 17
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "form-label"]]);
                echo "
                        ";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                        ";
                // line 19
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors', ["attr" => ["class" => "form-text text-danger"]]);
                echo "
                    </div>
                ";
            }
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
                <button class=\"btn btn-primary btn-lg\" type=\"submit\">Créer</button>
            </div>
        </div>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "<style>
    /* ... Other styles ... */

    .edit-container {
        max-width: 600px; /* Adjust the width as needed */
        margin: 2rem auto;
        padding: 1rem;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    .form-container {
        margin-top: 1rem;
        background-color: #fff;
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.05);
    }

    .form-content {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .mb-3 {
        margin-bottom: 1rem;
    }

    .form-label {
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
        color: #212529;
    }

    .form-control {
        padding: 0.5rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-text.text-danger {
        color: #dc3545;
    }

    .btn-primary.btn-lg {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        border-radius: 0.3rem;
        
    }

    .d-grid {
        display: grid;
        gap: 0.5rem;
    }

    .d-md-flex {
        display: flex;
        justify-content: flex-end;
    }

    .justify-content-md-end {
        justify-content: flex-end;
    }

    .gap-2 {
        gap: 0.5rem;
    }

    .btn {
        padding: 0.75rem 1.25rem;
        font-size: 1.1rem;
        border-radius: 0.3rem;
        box-shadow: 0 0.2rem 0.2rem rgba(0, 0, 0, 0.1);
    }

    .btn-outline-secondary {
        background-color: transparent;
        color: #6c757d;
        border: 1px solid #6c757d;
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: #fff;
    }


    .action-container {
        text-align: center;
        margin-top: 1rem;
    }

    .action-container a {
        padding: 0.5rem 1rem;
        font-size: 1rem;
        border-radius: 0.25rem;
        color: #007bff;
        text-decoration: none;
        border: 1px solid #007bff;

        box-shadow: 0 0.2rem 0.2rem rgba(0, 0, 0, 0.1);
    }

    .action-container a:hover {
        text-decoration: underline;
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
        return "habitation/new.html.twig";
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
        return array (  160 => 33,  150 => 32,  136 => 27,  130 => 23,  124 => 22,  118 => 19,  114 => 18,  110 => 17,  107 => 16,  104 => 15,  100 => 14,  95 => 12,  89 => 8,  79 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/habitation/new.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Nouvelle Habitation{% endblock %}

{% block body %}
<div class=\"edit-container\">
    <h1>Créer une nouvelle habitation</h1>

    <div class=\"form-container\">
        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
        <div class=\"form-content\">
            {% for field in form %}
                {% if field.vars.name != '_token' %}
                    <div class=\"mb-3\">
                        {{ form_label(field, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(field, {'attr': {'class': 'form-text text-danger'}}) }}
                    </div>
                {% endif %}
            {% endfor %}
            <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
                <button class=\"btn btn-primary btn-lg\" type=\"submit\">Créer</button>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
    /* ... Other styles ... */

    .edit-container {
        max-width: 600px; /* Adjust the width as needed */
        margin: 2rem auto;
        padding: 1rem;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    .form-container {
        margin-top: 1rem;
        background-color: #fff;
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.05);
    }

    .form-content {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .mb-3 {
        margin-bottom: 1rem;
    }

    .form-label {
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
        color: #212529;
    }

    .form-control {
        padding: 0.5rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-text.text-danger {
        color: #dc3545;
    }

    .btn-primary.btn-lg {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        border-radius: 0.3rem;
        
    }

    .d-grid {
        display: grid;
        gap: 0.5rem;
    }

    .d-md-flex {
        display: flex;
        justify-content: flex-end;
    }

    .justify-content-md-end {
        justify-content: flex-end;
    }

    .gap-2 {
        gap: 0.5rem;
    }

    .btn {
        padding: 0.75rem 1.25rem;
        font-size: 1.1rem;
        border-radius: 0.3rem;
        box-shadow: 0 0.2rem 0.2rem rgba(0, 0, 0, 0.1);
    }

    .btn-outline-secondary {
        background-color: transparent;
        color: #6c757d;
        border: 1px solid #6c757d;
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: #fff;
    }


    .action-container {
        text-align: center;
        margin-top: 1rem;
    }

    .action-container a {
        padding: 0.5rem 1rem;
        font-size: 1rem;
        border-radius: 0.25rem;
        color: #007bff;
        text-decoration: none;
        border: 1px solid #007bff;

        box-shadow: 0 0.2rem 0.2rem rgba(0, 0, 0, 0.1);
    }

    .action-container a:hover {
        text-decoration: underline;
    }
</style>
{% endblock %}
", "habitation/new.html.twig", "/home/lacoste/TP_Projet/templates/habitation/new.html.twig");
    }
}
