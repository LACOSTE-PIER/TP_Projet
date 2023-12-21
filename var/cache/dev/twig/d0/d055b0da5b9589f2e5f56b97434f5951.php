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

/* habitation/index.html.twig */
class __TwigTemplate_b24582db0de90d5be4709e68f5b1d5cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitation/index.html.twig", 1);
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

        echo "Habitations";
        
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
        echo "    <h1>Liste des habitations :</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Adresse</th>
                <th>Type d'habitation</th>
                <th>Surface</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habitations"]) || array_key_exists("habitations", $context) ? $context["habitations"] : (function () { throw new RuntimeError('Variable "habitations" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["habitation"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitation"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitation"], "adresse", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitation"], "TypeHabitation", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitation"], "SurfaceHabitable", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                
                <td>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["habitation"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Détails</a>
                    <form method=\"post\" action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["habitation"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette habitation ?');\" style=\"display: inline-block;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["habitation"], "id", [], "any", false, false, false, 29))), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-delete\">
                            <i class=\"fa fa-trash\"></i> Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"3\">Aucune habitation trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 47
        echo "<style>
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    .table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .table th {
        background-color: #0056b3;
        color: white;
        padding: 12px;
        text-align: left;
    }
    .table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .table tr:hover {
        background-color: #ddd;
    }
    .btn {
        text-decoration: none;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        transition: background-color 0.2s ease-in-out;
    }
    .btn-info {
        background-color: #17a2b8;
        color: white;
    }
    .btn-info:hover {
        background-color: #138496;
    }
    .btn-delete {
        background-color: #007bff;
        color: white;
    }
    .btn-delete:hover {
        background-color: #0069d9;
    }
    a.btn:not(:last-child) {
        margin-right: 5px;
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
        return "habitation/index.html.twig";
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
        return array (  183 => 47,  173 => 46,  160 => 41,  151 => 37,  138 => 29,  134 => 28,  130 => 27,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  109 => 20,  104 => 19,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Habitations{% endblock %}

{% block body %}
    <h1>Liste des habitations :</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Adresse</th>
                <th>Type d'habitation</th>
                <th>Surface</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for habitation in habitations %}
            <tr>
                <td>{{ habitation.id }}</td>
                <td>{{ habitation.adresse }}</td>
                <td>{{ habitation.TypeHabitation }}</td>
                <td>{{ habitation.SurfaceHabitable }}</td>
                
                <td>
                    <a href=\"{{ path('app_habitation_show', {'id': habitation.id}) }}\" class=\"btn btn-info\">Détails</a>
                    <form method=\"post\" action=\"{{ path('app_habitation_delete', {'id': habitation.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette habitation ?');\" style=\"display: inline-block;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ habitation.id) }}\">
                        <button type=\"submit\" class=\"btn btn-delete\">
                            <i class=\"fa fa-trash\"></i> Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">Aucune habitation trouvée</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}

{% block stylesheets %}
<style>
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    .table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .table th {
        background-color: #0056b3;
        color: white;
        padding: 12px;
        text-align: left;
    }
    .table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .table tr:hover {
        background-color: #ddd;
    }
    .btn {
        text-decoration: none;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        transition: background-color 0.2s ease-in-out;
    }
    .btn-info {
        background-color: #17a2b8;
        color: white;
    }
    .btn-info:hover {
        background-color: #138496;
    }
    .btn-delete {
        background-color: #007bff;
        color: white;
    }
    .btn-delete:hover {
        background-color: #0069d9;
    }
    a.btn:not(:last-child) {
        margin-right: 5px;
    }
</style>
{% endblock %}
", "habitation/index.html.twig", "/home/lacoste/TP_Projet/templates/habitation/index.html.twig");
    }
}
