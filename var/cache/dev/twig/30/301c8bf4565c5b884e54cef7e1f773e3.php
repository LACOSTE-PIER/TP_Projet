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

/* habitant/_delete_form.html.twig */
class __TwigTemplate_902df1b3200cc5c6a36d9439614d32bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitant/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitant/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitant_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["habitant"]) || array_key_exists("habitant", $context) ? $context["habitant"] : (function () { throw new RuntimeError('Variable "habitant" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <button type=\"submit\" class=\"btn btn-delete\">
    <i class=\"fa fa-trash\"></i> Delete
    </button>
</form>
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>
.btn-delete {
    padding: 8px 15px;
    background-color: #dc3545; /* Couleur rouge pour l'action de suppression */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-delete:hover,
.btn-delete:focus {
    background-color: #c82333; /* Un rouge légèrement plus foncé pour le survol */
    outline: none; /* Supprime le contour lorsque le bouton est cliqué ou sélectionné */
}

.btn-delete:active {
    background-color: #bd2130; /* Un rouge encore plus foncé pour l'effet cliqué */
    transform: translateY(1px); /* Effet d'appui léger */
}
.form-container .csrf_token {
        display: none;
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
        return "habitant/_delete_form.html.twig";
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
        return array (  80 => 8,  70 => 7,  59 => 34,  57 => 7,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_habitant_delete', {'id': habitant.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ habitant.id) }}\">
    <button type=\"submit\" class=\"btn btn-delete\">
    <i class=\"fa fa-trash\"></i> Delete
    </button>
</form>
{% block stylesheets %}
<style>
.btn-delete {
    padding: 8px 15px;
    background-color: #dc3545; /* Couleur rouge pour l'action de suppression */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-delete:hover,
.btn-delete:focus {
    background-color: #c82333; /* Un rouge légèrement plus foncé pour le survol */
    outline: none; /* Supprime le contour lorsque le bouton est cliqué ou sélectionné */
}

.btn-delete:active {
    background-color: #bd2130; /* Un rouge encore plus foncé pour l'effet cliqué */
    transform: translateY(1px); /* Effet d'appui léger */
}
.form-container .csrf_token {
        display: none;
    }
</style>
{% endblock %}

", "habitant/_delete_form.html.twig", "/home/lacoste/TP_Projet/templates/habitant/_delete_form.html.twig");
    }
}
