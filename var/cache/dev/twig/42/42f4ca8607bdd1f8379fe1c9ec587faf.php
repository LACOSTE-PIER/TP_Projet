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

/* habitation/show.html.twig */
class __TwigTemplate_272ecd62ef7e294e49d316e03e3398ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitation/show.html.twig", 1);
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

        echo "Détails de l'Habitation";
        
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
        echo "<div class=\"habitation-container\">
    <div class=\"habitation-card\">
        <h2>Détails de l'Habitation</h2>
        <p><strong>Adresse:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitation"]) || array_key_exists("habitation", $context) ? $context["habitation"] : (function () { throw new RuntimeError('Variable "habitation" does not exist.', 9, $this->source); })()), "adresse", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
        <p><strong>Surface habitable:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitation"]) || array_key_exists("habitation", $context) ? $context["habitation"] : (function () { throw new RuntimeError('Variable "habitation" does not exist.', 10, $this->source); })()), "SurfaceHabitable", [], "any", false, false, false, 10), "html", null, true);
        echo " m²</p>
        <p><strong>Type d'habitation:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitation"]) || array_key_exists("habitation", $context) ? $context["habitation"] : (function () { throw new RuntimeError('Variable "habitation" does not exist.', 11, $this->source); })()), "TypeHabitation", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    </div>
    <div class=\"habitants-card\">
        <h3>Habitants</h3>
        ";
        // line 15
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["habitation"]) || array_key_exists("habitation", $context) ? $context["habitation"] : (function () { throw new RuntimeError('Variable "habitation" does not exist.', 15, $this->source); })()), "habitants", [], "any", false, false, false, 15)) > 0)) {
            // line 16
            echo "        <ul>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["habitation"]) || array_key_exists("habitation", $context) ? $context["habitation"] : (function () { throw new RuntimeError('Variable "habitation" does not exist.', 17, $this->source); })()), "habitants", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["habitant"]) {
                // line 18
                echo "            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitant"], "nomFamille", [], "any", false, false, false, 18), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitant"], "prenomIndividu", [], "any", false, false, false, 18), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
        ";
        } else {
            // line 22
            echo "        <p>Aucun habitant n'est enregistré pour cette habitation.</p>
        ";
        }
        // line 24
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #e9ecef;
        color: #333;
        line-height: 1.6;
    }
    .habitation-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        margin: 40px auto;
        padding: 20px;
        max-width: 800px;
    }
    .habitation-card, .habitants-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border: none;
    }
    .habitation-card h2, .habitants-card h3 {
        color: #0056b3;
        margin-bottom: 16px;
    }
    .habitation-card p, .habitants-card p, .habitants-card ul {
        margin-left: 20px;
        font-size: 1.1em;
    }
    .habitants-card ul {
        list-style: inside square;
    }
    .habitants-card ul li {
        padding: 8px 0;
    }
    .actions a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0056b3;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.2s;
    }
    .actions a:hover {
        background-color: #004494;
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
        return "habitation/show.html.twig";
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
        return array (  159 => 29,  149 => 28,  137 => 24,  133 => 22,  129 => 20,  118 => 18,  114 => 17,  111 => 16,  109 => 15,  102 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Habitation{% endblock %}

{% block body %}
<div class=\"habitation-container\">
    <div class=\"habitation-card\">
        <h2>Détails de l'Habitation</h2>
        <p><strong>Adresse:</strong> {{ habitation.adresse }}</p>
        <p><strong>Surface habitable:</strong> {{ habitation.SurfaceHabitable }} m²</p>
        <p><strong>Type d'habitation:</strong> {{ habitation.TypeHabitation }}</p>
    </div>
    <div class=\"habitants-card\">
        <h3>Habitants</h3>
        {% if habitation.habitants|length > 0 %}
        <ul>
            {% for habitant in habitation.habitants %}
            <li>{{ habitant.nomFamille }} {{ habitant.prenomIndividu }}</li>
            {% endfor %}
        </ul>
        {% else %}
        <p>Aucun habitant n'est enregistré pour cette habitation.</p>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #e9ecef;
        color: #333;
        line-height: 1.6;
    }
    .habitation-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        margin: 40px auto;
        padding: 20px;
        max-width: 800px;
    }
    .habitation-card, .habitants-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border: none;
    }
    .habitation-card h2, .habitants-card h3 {
        color: #0056b3;
        margin-bottom: 16px;
    }
    .habitation-card p, .habitants-card p, .habitants-card ul {
        margin-left: 20px;
        font-size: 1.1em;
    }
    .habitants-card ul {
        list-style: inside square;
    }
    .habitants-card ul li {
        padding: 8px 0;
    }
    .actions a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0056b3;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.2s;
    }
    .actions a:hover {
        background-color: #004494;
    }
</style>
{% endblock %}
", "habitation/show.html.twig", "/home/lacoste/TP_Projet/templates/habitation/show.html.twig");
    }
}
