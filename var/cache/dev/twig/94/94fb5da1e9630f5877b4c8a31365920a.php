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

/* base.html.twig */
class __TwigTemplate_c18765714f8cb1e84ac999110ffb721e extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css\">
    
    <meta charset=\"UTF-8\">
    <title>DD-Manager</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
        footer {
            background-color: #555;
            color: #ccc; 
            text-align: center;
            padding: 0.5em 0; 
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            font-size: 0.8em; 
        }
        header {
            background-color: #555; 
            color: #ccc;
            text-align: center;
            padding: 0.6em 0;
        }
        header h1 {
            margin: 0;
            font-size: 3em; /* Taille de la police du titre */
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Ombre portée pour donner de la profondeur */
            padding: 0.5em 0; /* Espacement autour du titre */
            font-weight: bold; /* Rendre le texte plus gras */
            letter-spacing: 5px; /* Espacement entre les lettres */
        }
        nav {
            background-color: #555; /* Couleur différente pour le bandeau de navigation */
        }
        nav ul {
            padding: 0;
            list-style: none;
            text-align: left;
            margin: 0; /* Supprimez la marge par défaut */
        }
        nav ul li {
            display: inline-block;
            margin: 0; /* Pas de marge entre les éléments de la liste pour qu'ils soient collés */
        }
        nav ul li a {
            display: block;
            padding: 15px 20px; /* Espacement autour du texte */
            background-color: #555; /* Même couleur que le `nav` pour les onglets */
            color: white; /* Couleur du texte */
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s; /* Transition pour le survol */
        }
        nav ul li a:hover {
            background-color: #007BFF; /* Couleur au survol */
            
        }
        .content {
            margin-top: 30px;
        }
        
        ";
        // line 76
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 79
        echo "        
    </style>
</head>
<body>
    <header>
        <h1>Dragodindes de Saint Denis en Val</h1>
        <nav>
            <ul>
                <li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitant_index");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitant_new");
        echo "\">Ajouter une dragodinde</a></li>
                <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation_new");
        echo "\">Ajouter un enclos</a></li>
                <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitation_index");
        echo "\">Voir les enclos</a></li>
            </ul>
        </nav>
    </header>

    <div class=\"container\">
        <div class=\"content\">
            ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "              
        </div>
        
        
    </div>

    <footer>
        <p>© 2023 Guilde de Saint Denis en Val</p>
    </footer>
   ";
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo " 
    
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 76
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 77
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  237 => 108,  227 => 107,  209 => 97,  196 => 77,  186 => 76,  172 => 109,  170 => 107,  159 => 98,  157 => 97,  147 => 90,  143 => 89,  139 => 88,  135 => 87,  125 => 79,  123 => 76,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css\">
    
    <meta charset=\"UTF-8\">
    <title>DD-Manager</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
        footer {
            background-color: #555;
            color: #ccc; 
            text-align: center;
            padding: 0.5em 0; 
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            font-size: 0.8em; 
        }
        header {
            background-color: #555; 
            color: #ccc;
            text-align: center;
            padding: 0.6em 0;
        }
        header h1 {
            margin: 0;
            font-size: 3em; /* Taille de la police du titre */
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Ombre portée pour donner de la profondeur */
            padding: 0.5em 0; /* Espacement autour du titre */
            font-weight: bold; /* Rendre le texte plus gras */
            letter-spacing: 5px; /* Espacement entre les lettres */
        }
        nav {
            background-color: #555; /* Couleur différente pour le bandeau de navigation */
        }
        nav ul {
            padding: 0;
            list-style: none;
            text-align: left;
            margin: 0; /* Supprimez la marge par défaut */
        }
        nav ul li {
            display: inline-block;
            margin: 0; /* Pas de marge entre les éléments de la liste pour qu'ils soient collés */
        }
        nav ul li a {
            display: block;
            padding: 15px 20px; /* Espacement autour du texte */
            background-color: #555; /* Même couleur que le `nav` pour les onglets */
            color: white; /* Couleur du texte */
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s; /* Transition pour le survol */
        }
        nav ul li a:hover {
            background-color: #007BFF; /* Couleur au survol */
            
        }
        .content {
            margin-top: 30px;
        }
        
        {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
        
    </style>
</head>
<body>
    <header>
        <h1>Dragodindes de Saint Denis en Val</h1>
        <nav>
            <ul>
                <li><a href=\"{{ path('app_habitant_index') }}\">Accueil</a></li>
                <li><a href=\"{{ path('app_habitant_new') }}\">Ajouter une dragodinde</a></li>
                <li><a href=\"{{ path('app_habitation_new') }}\">Ajouter un enclos</a></li>
                <li><a href=\"{{ path('app_habitation_index') }}\">Voir les enclos</a></li>
            </ul>
        </nav>
    </header>

    <div class=\"container\">
        <div class=\"content\">
            {% block body %}{% endblock %}
              
        </div>
        
        
    </div>

    <footer>
        <p>© 2023 Guilde de Saint Denis en Val</p>
    </footer>
   {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %} 
    
</body>
</html>
", "base.html.twig", "/home/lacoste/TP_Projet/templates/base.html.twig");
    }
}
